<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review.er</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/charts.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="index.html" class="logo"> <i class="fas fa-star"></i> review.er </a>

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

<form>
    <section class="features" id="features">

        <h1 class="heading">Charts<span>Melhores Trabalhos</span> </h1>

        <div class="l1">

            <div class="l2">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="position" >#</th>
                        <th scope="col">Capa</th>
                        <th scope="col">Informações</th>
                        <th scope="col">Notas</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="{{ $project->cover }}" class="rounded float-left" alt="..."></td>
                            <td width=1400 ><h3>{{ $project->name }}</h3>
                            </td>
                            <td width=400><h3>{{ $project->rating }}</h3></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    </section>

</form>

<!-- footer section starts  -->

<section class="footer">


    <div class="credit">TG Fatec - Review.er | all rights reserved </div>

</section>

<!-- footer section ends -->














<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
