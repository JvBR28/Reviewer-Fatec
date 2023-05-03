@extends('root')

@extends('navbar')

@section('main')
<main class="features" id="features">
    <h1 class="heading">Envie seu<span>projeto</span> </h1>

    <form action="{{ route('project.change', $project['id']) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="l1">
            <div class="l2">
                <div class="form-group">
                    <input name="name" placeholder="Nome" value="{{ $project['name'] }}">
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="presentation" placeholder="Link Apresentação" value="{{ $project['presentation'] }}">
                    @error('presentation')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="documentation" placeholder="Link Documentação" value="{{ $project['documentation'] }}">
                    @error('documentation')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="cover" placeholder="Link Foto de Capa" value="{{ $project['cover'] }}">
                    @error('cover')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="github" placeholder="Link GitHub" value="{{ $project['github'] }}">
                    @error('github')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea name="description" placeholder="Descrição">{{ $project['description'] }}</textarea>
                    @error('description')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Editar</button>
            </div>
        </div>
    </form>
</main>
@endsection