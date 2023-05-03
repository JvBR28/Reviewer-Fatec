@extends('root')
@extends('navbar')

@section('main')
    <main class="home" id="home">
        <div class="content">
            <h3>Faça sua <strong><span>review</span></strong> de um projeto FATEC!</h3>
            <p>Você pode cadastrar seu projeto clicando <a href="{{ route('project.create.page') }}">aqui</a></p>
            @if(auth()->user())
                <a href="{{ route('project.list.page') }}" class="btn">Comece a avaliar!</a>
            @else
                <a href="{{ route('user.login.page') }}" class="btn">Comece a avaliar!</a>
            @endif
        </div>
    </main>
@endsection

@extends('footer')
