<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function create(Request $request, $project_id): RedirectResponse
    {
        $new_evaluation = $request->validate([
            'rating' => ['numeric', 'min:0', 'max:10', 'required'],
            'comment' => ['string', 'min:0', 'max:255', 'required']
        ]);

        $new_evaluation['project_id'] = $project_id;
        $new_evaluation['user_id'] = auth()->user()->id;

        Evaluation::updateOrCreate([
            'project_id' => $new_evaluation['project_id'],
            'user_id' => $new_evaluation['user_id']
        ], $new_evaluation);

        return redirect()->back();
    }
}
