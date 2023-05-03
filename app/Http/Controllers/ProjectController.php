<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function listPage(Request $request)
    {
        $request->validate([
            'q' => ['string', 'min:3', 'max:255', 'nullable']
        ]);

        if ($request['q'])
        {
            $projects = Project::where('name', 'like', '%' . $request['q'] . '%')
                ->paginate(15);
        }
        else
        {
            $projects = Project::paginate(15);
        }

        return view('project.list', [
            'projects' => $projects
        ]);
    }

    public function bestProject()
    {
        $projects = DB::table('projects')
            ->join('evaluations', 'projects.id', '=', 'evaluations.project_id')
            ->select('projects.name', 'projects.cover', DB::raw("SUM(evaluations.rating) / count(evaluations.rating) as rating"))
            ->groupBy('projects.name', 'projects.cover')
            ->orderByDesc('evaluations.rating')
            ->take(10)
            ->get();

        return view('project.best', [
            'projects' => $projects
        ]);
    }

    public function showPage($project_id)
    {
        $project = Project::with('evaluations.user')
            ->find($project_id);

        $total_projects = sizeof($project['evaluations']);

        if ($total_projects > 0)
        {
            $project['rating'] = $project['evaluations']->sum('rating') / $total_projects;
        }

        if ($project)
        {
            return view('project.show', [
                'project' => $project
            ]);
        }

        abort(404);
    }

    public function createPage()
    {
        return view('project.create');
    }

    public function changePage($project_id)
    {
        $project = Project::find($project_id);

        if ($project)
        {
            if ($project['user_id'] == auth()->user()->id)
            {
                return view('project.change', [
                    'project' => $project
                ]);
            }

            abort(401);
        }

        abort(404);
    }

    public function create(Request $request)
    {
        $new_project = $request->validate([
            'name' => ['string', 'min:3', 'max:255', 'required'],
            'authors' => ['string', 'min:5', 'max:255', 'required'],
            'advisor' => ['string', 'min:5', 'max:255', 'required'],
            'presentation' => ['active_url', 'min:3', 'max:255', 'required'],
            'documentation' => ['active_url', 'min:3', 'max:255', 'required'],
            'cover' => ['active_url', 'min:3', 'max:255', 'required'],
            'github' => ['active_url', 'min:3', 'max:255', 'required'],
            'description' => ['string', 'min:3', 'required']
        ]);

        $new_project['user_id'] = auth()->user()->id;
        $project = Project::create($new_project);
        $authors = explode(',', $new_project['authors']);

        foreach ($authors as $author)
        {
            $new_author = [
                'project_id' => $project['id'],
                'name' => $author
            ];

            Author::create($new_author);
        }

        return redirect()->route('project.list.page');
    }

    public function change(Request $request, $project_id)
    {
        $request_body = $request->validate([
            'name' => ['string', 'min:3', 'max:255', 'required'],
            'presentation' => ['active_url', 'min:3', 'max:255', 'nullable'],
            'documentation' => ['active_url', 'min:3', 'max:255', 'nullable'],
            'cover' => ['active_url', 'min:3', 'max:255', 'required'],
            'github' => ['active_url', 'min:3', 'max:255', 'nullable'],
            'description' => ['string', 'min:3', 'required']
        ]);

        $project = Project::find($project_id);

        if ($project)
        {
            if ($project['user_id'] == auth()->user()->id)
            {
                $project->fill($request_body);
                $project->save();

                return view('message', [
                    'message' => 'Projeto editado com sucesso!',
                    'continue_link' => route('project.list.page')
                ]);
            }

            abort(401);
        }

        abort(404);
    }

        public function delete($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->back();
    }
    
}
