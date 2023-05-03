@extends('root')
@extends('navbar')

@section('main')
<main>
    <section class="features" id="features">
        <h1 style="margin-top: 40px;" id="reviews" class="heading">Projetos<span>Fatec</span></h1>
        <a href="{{ route('project.create.page') }}">Envie seu projeto!</a>
        <div class="box-container">
            @foreach($projects as $project)
            <div class="box">
                <img src="{{ $project->cover }}" class="rounded float-left" alt="">
                <h3>{{ $project->name }}</h3>
                <p>{{ $project->description }}</p>
                <a href="{{ route('project.show.page', $project->id) }}" class="btn">Leia mais</a>
                @if(auth()->user())
                    <form action="{{ route('project.delete', $project->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Deletar</button>
                    </form>
                @endif
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection

@extends('footer');