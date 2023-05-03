@extends('root')
@extends('navbar')

@section('main')
<main>

    <form action="{{ route('user.create') }}" method="POST">
        @csrf
        <section class="features" id="features" style="padding-top: 10rem; transform: scale(96%, 110%);">
            <h1 class="heading">Cadastre seu<span>perfil</span></h1>

            <div class="l1">
                <div class="l2">
                    <div class="form-group">
                        <h3>Nome completo</h3>
                        <input name="name" class="form-control" type="text" placeholder="Nome">
                        @error('name')
                        <p color="red">{{ $message }}</p>
                        @enderror
                        <h3>Email</h3>
                        <input name="email" class="form-control" type="email" placeholder="E-mail">
                        @error('email')
                        <p color="red">{{ $message }}</p>
                        @enderror
                        <h3>Senha</h3>
                        <input name="password" class="form-control" type="password" placeholder="Senha">
                        @error('password')
                        <p color="red">{{ $message }}</p>
                        @enderror
                        <h3>Foto de perfil</h3>
                        <input type="text" name="picture" class="form-control" placeholder="Foto de perfil">
                        @error('picture')
                        <p color="red">{{ $message }}</p>
                        @enderror

                        <div class="form-check">
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</main>
@endsection
@extends('footer')