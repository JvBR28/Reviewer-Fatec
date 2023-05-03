{{--@extends('root')--}}
{{--@extends('navbar')--}}
{{--@extends('footer')--}}

{{--@section('main')--}}
{{--    <main style="padding-top: 10rem;">--}}
{{--        <div>--}}
{{--            <h1>{{ $project->name }}</h1>--}}
{{--            <img--}}
{{--                src="{{ $project->cover }}"--}}
{{--                alt="Capa do projeto"--}}
{{--                width="500px"--}}
{{--                height="300px"--}}
{{--                style="object-fit: cover"--}}
{{--            />--}}
{{--            <p>Nota Total: {{ $project->rating }}</p>--}}
{{--            <p>{{ $project->description }}</p>--}}
{{--            <a href="{{ $project->presentation }}">Apresentação</a>--}}
{{--            <a href="{{ $project->documentation }}">Documentação</a>--}}
{{--            <a href="{{ $project->github }}">GitHub</a>--}}
{{--        </div>--}}
{{--        @if(auth()->user())--}}
{{--            <form--}}
{{--                method="POST"--}}
{{--                action="{{ route('project.evaluation.create', [$project->id]) }}"--}}
{{--            >--}}
{{--                @csrf--}}
{{--                <input--}}
{{--                    type="number"--}}
{{--                    name="rating"--}}
{{--                    min="0"--}}
{{--                    max="10"--}}
{{--                    required--}}
{{--                />--}}
{{--                <input--}}
{{--                    name="comment"--}}
{{--                    required--}}
{{--                />--}}
{{--                <button>Enviar</button>--}}
{{--            </form>--}}
{{--        @endif--}}
{{--        <div>--}}
{{--            <h2>Avaliações</h2>--}}
{{--            @foreach($project->evaluations as $evaluation)--}}
{{--                <div style="border: 1px solid black">--}}
{{--                    <p>Usuario: {{ $evaluation->user->name }}</p>--}}
{{--                    <p>Nota: {{ $evaluation->rating }}</p>--}}
{{--                    <p>Comentario: {{ $evaluation->comment }}</p>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </main>--}}
{{--@endsection--}}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review.er</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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


<!-- login section starts -->


<form>
    <!-- features section starts  -->

    <section class="features" id="features">

        <h1 class="heading"><span>Review</span> </h1>

        <div class="l1">

            <div class="l2">



                <img src="{{ $project->cover }}" class="rounded float-left" alt="...">

                <div class="areareview">

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                    <h3>{{ $project->name }}</h3>
                    <br>
                    <span class="curso">Descrição:</span>
                    <p>{{ $project->description }}</p>
                    <br>
                    <span class="ano">Apresentação:</span>
                    <a href="{{ $project->presentation }}">Link</a>
                    <br>
                    <span class="universidade">Documentação:</span>
                    <a href="{{ $project->documentation }}">Link</a>
                    <br>
                    <span class="orientador">GitHub:</span>
                    <a href="{{ $project->github }}">Link</a>
                </div>
                <div class="media">
                    <span class="rounded-circle text-center">{{ number_format($project->rating, 1) }}</span>
                    <div class="rounded-circle"> </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-lg mt-3 ml-2" data-toggle="modal" data-target="#meuModal">Escreva sua review</button>
    </section>

    <!-- features section ends -->
</form>

<div id="meuModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-name"> Review: {{ $project->name }}</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form
                method="POST"
                action="{{ route('project.evaluation.create', [$project->id]) }}"
            >
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <h1> Para escrever sua review...</h1>
                        <p>Separe em critérios toda a sua análise crítica, podendo ser em criatividade, coerência, documentação, algoritmo etc. Você faz a sua metodologia</p>
                        <input
                            type="number"
                            name="rating"
                            min="0"
                            max="10"
                            required
                            class="form-control"
                        />
                        <label for="exampleFormControlTextarea1">Escreva sua review</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="comment"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<form>
    <section class="features" id="features">
        <h1 class="heading"><span>Reviews</span> </h1>
        <div class="reviewsoficiais">
            @foreach($project->evaluations as $evaluation)
                <div class="l1 mb-5">
                    <div class="l2">
                        <img src="https://randomuser.me/api/portraits/men/85.jpg" class="rounded-circle" alt="...">
                        <div class="areareview">
                            <h3>{{ $evaluation->user->name }}</h3>
                            <br>
                            <p class="resenha">{{ $evaluation->comment }}</p>
                        </div>
                        <div class="media">
                            <span class="rounded-circle text-center">{{ number_format($evaluation->rating, 1) }}</span>
                            <div class="rounded-circle"> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</form>
<section class="footer">
    <div class="credit"> created by <span> TG Fatec - Review.er </span> | all rights reserved </div>
</section>
</div>
</body>
</html>
