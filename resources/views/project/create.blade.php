@extends('root')
@extends('navbar')

@section('main')
<main class="features" id="features">
    <h1 class="heading">Envie seu<span>projeto</span> </h1>
    <form method="POST" action="{{ route('project.create') }}">
        @csrf

    <div class="l1">
        <div class="l2">
            <div class="form-group">
                <h3>Link Capa do projeto</h3>
                <input class="form-control" name="cover" id="capaProjeto">
                @error('cover')
                    <p>{{ $message }}</p>
                @enderror
                <br></br>

                <h3>Nome do projeto *</h3>
                <input type="text" class="form-control" name="name" id="nomeProjeto" placeholder="Ex: A inteligência artificial nas escolas" required>
                    @error('cover')
                    <p>{{ $message }}</p>
                    @enderror
                <br></br>

                <h3>Descrição</h3>
                <input class="form-control" name="description">
                    @error('cover')
                    <p>{{ $message }}</p>
                    @enderror
                <br></br>

                <h3>Autores do projeto *</h3>
                <input type="text" class="form-control" name="authors" id="autoresProjeto" placeholder="Ex: Ana, Maria e João" required>
                    @error('cover')
                    <p>{{ $message }}</p>
                    @enderror
                <br></br>

                <h3>Orientador *</h3>
                <input type="text" class="form-control" name="advisor" id="orientadorProjeto" placeholder="Ex: Prof. Maria José" required>
                    @error('cover')
                    <p>{{ $message }}</p>
                    @enderror
                <br></br>

                <h3>Link de documentação</h3>
                <input name="documentation" class="form-control" id="docProjeto" placeholder="Word, Google Docs...">
                    @error('cover')
                    <p>{{ $message }}</p>
                    @enderror
                <br></br>

                <h3>Link de apresentação</h3>
                <input name="presentation" class="form-control" id="apresentacaoProjeto" placeholder="PowerPoint, Canva...">
                    @error('cover')
                    <p>{{ $message }}</p>
                    @enderror
                <br></br>

                <h3>Link do GitHub</h3>
                <input name="github" type="text" class="form-control" id="githubProjeto">
                    @error('cover')
                    <p>{{ $message }}</p>
                    @enderror
                <br></br>

                <!-- <h3>Insira o nome do curso</h3>
                <input type="text" class="form-control" id="nomeCursoProjeto" placeholder="Ex: Análise de Sistemas">
                <br></br>

                <h3>Insira o nome da universidade</h3>
                <input type="text" class="form-control" id="nomeUniversidadeProjeto" placeholder="Ex: Fatec">
                <br></br>

                <h3>Insira o ano do projeto</h3>
                <input type="date" class="form-control" id="anoProjeto" placeholder="Ex: 2021">
                <br></br> -->
            </div>
            <div class="form-group">
                <div class="form-check">
                    <button type="submit" class="btn btn-primary">Criar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</main>
@endsection

@extends('footer')
