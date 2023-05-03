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
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.html" class="logo"> <i class="fas fa-star"></i> Review.er </a>

    <nav class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('project.list.page') }}">Projetos</a>
        <a href="{{ route('project.best.page') }}">Melhores Projetos</a>
        <a href="{{ route('profile') }}">Meu Perfil</a>
        @if(auth()->user())
            <a href="/user/logout" class="btn">Logout!</a>
        @endif
    </nav>

    <div class="icons">
        <a class="fas fa-bars" id="menu-btn"></a>
        <a class="fas fa-user" id="login-btn" href="login.html"></a>
    </div>

</header>


<!-- login section starts -->

<form>
    <!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading">Faça seu<span>Login</span> </h1>

    <div class="l1">

        <div class="l2">
           
            <img src="https://yt3.ggpht.com/ytc/AKedOLS1s_S70sbmHuDBc8IMQTu6151-zFI1BRBEJ4vN1Q=s900-c-k-c0x00ffffff-no-rj" class="rounded float-left" alt="...">
            <h3>Olá, Nome do usuário aqui</h3>
            <p>Você é um avaliador oficial!</p>


                <h3 class="fotoperfil" >Editar foto de perfil:</h3>
                <br></br>
                <input type="file" class="arquivo" id="exampleFormControlFile1">
                <br></br>

                <h3 class="nomeusuario" >Editar nome de usuário:</h3>
                <br></br>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                <br></br>

              <button href="#" type="submit" class="btn btn-primary">Editar</button>
            
    
        </div>
            

    </div>

 

</section>

<!-- features section ends -->
</form>




<!-- footer section starts  -->

<section class="footer">
    

    <div class="box-container">


    </div>

    <div class="credit"> created by <span> TG Fatec - Review.er </span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>