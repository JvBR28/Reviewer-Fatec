@section('navbar')
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-star"></i> Review.er </a>
        <nav class="navbar">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('project.list.page') }}">Projetos</a>
            <a href="{{ route('project.best.page') }}">Melhores Projetos</a>
            <a href="{{ route('profile') }}">Meu Perfil</a>
            @if(auth()->user())
                <a href="/user/logout" class="btn">Logout!</a>
            @endif
        </nav>
    </header>
@endsection
