@extends('root')
@extends('navbar')

@section('main')
<main>
    <form action="{{ route('user.login') }}" method="POST">
        @csrf
        <section class="features" id="features" style="margin-top: 9rem; margin-bottom: 2rem; width: 100%; transform: scale(95%, 115%);">
            <h1 class="heading mt-5">Faça seu<span>Login</span> </h1>
            <div class="l1">
                <div class="l2">
                    <h3>E-mail</h3>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <h3>Senha</h3>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="password">
                    </div>
                    <div>
                        <a href="{{ route('user.create.page') }}">Não tem conta? Cadastre-se aqui</a>
                    </div>

                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </div>
        </section>
    </form>
</main>
@endsection
@extends('footer')