<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviewer</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-star"></i> Review.er </a>


    <nav class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('homepage') }}">Homepage</a>
        <a href="{{ route('project.list.page') }}">Projetos</a>
        <a href="{{ route('project.best.page') }}">Melhores Projetos</a>
        <a href="{{ route('profile') }}">Meu Perfil</a>
    </nav>

    <div class="icons">
        <a class="fas fa-bars" id="menu-btn"></a>
        <a class="fas fa-user" id="login-btn" href="login.html"></a>
    </div>


</div>

    
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
        <div class="content">
            <h3>Faça sua <strong><span>review</span></strong> de um projeto FATEC!</h3>
            <p>Ou cadastre seu projeto clicando <a href="cadastrarprojetos.html">aqui</a></p>
            <a href="paginadeprojetos.html" class="btn">Avalie aqui</a>




</section>




<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 id="reviews" class="heading">Mais bem<span>avaliados</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://files.passeidireto.com/e7f4d03f-42ce-499e-be7c-1a1277a785a2/e7f4d03f-42ce-499e-be7c-1a1277a785a2.jpeg" class="rounded float-left" alt="">
            <h3>Projeto 1</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="review.html" class="btn">Leia mais</a>
        </div>

        <div class="box">
            <img src="https://files.passeidireto.com/e7f4d03f-42ce-499e-be7c-1a1277a785a2/e7f4d03f-42ce-499e-be7c-1a1277a785a2.jpeg" class="rounded float-left" alt="">
            <h3>Projeto 2</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">Leia mais</a>
        </div>

        <div class="box">
            <img src="https://files.passeidireto.com/e7f4d03f-42ce-499e-be7c-1a1277a785a2/e7f4d03f-42ce-499e-be7c-1a1277a785a2.jpeg" class="rounded float-left" alt="">
            <h3>Projeto 3</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">Leia mais</a>
        </div>

    </div>
    

    <svg xmlns="http://www.w3.org/2000/svg" class="waves" viewBox="0 0 1440 320"><path fill="#130280" fill-opacity="1" d="M0,192L24,170.7C48,149,96,107,144,112C192,117,240,171,288,181.3C336,192,384,160,432,170.7C480,181,528,235,576,224C624,213,672,139,720,122.7C768,107,816,149,864,170.7C912,192,960,192,1008,186.7C1056,181,1104,171,1152,165.3C1200,160,1248,160,1296,176C1344,192,1392,224,1416,240L1440,256L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>

    <svg xmlns="http://www.w3.org/2000/svg" class="waves2" viewBox="0 0 1440 320"><path fill="#000b76" fill-opacity="1" d="M0,320L24,304C48,288,96,256,144,245.3C192,235,240,245,288,224C336,203,384,149,432,112C480,75,528,53,576,64C624,75,672,117,720,128C768,139,816,117,864,106.7C912,96,960,96,1008,112C1056,128,1104,160,1152,154.7C1200,149,1248,107,1296,101.3C1344,96,1392,128,1416,144L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>

</section>

<!-- features section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Últimas <span>reviews</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="https://capricho.abril.com.br/wp-content/uploads/2019/07/millie-bobby-brown-rabo-de-cavalo-alto.jpg" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>Millie</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>Eduardo Enari</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> Avaliadores <span>Oficiais</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4792989A2" alt="">
            
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> Eduardo Enari </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1 de Novembro, 2021 </a>
                </div>
                <h3>Projeto 1</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="http://servicosweb.cnpq.br/wspessoa/servletrecuperafoto?tipo=1&id=K4423331Z7" alt="">
            
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> Charles </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1 de Novembro, 2021 </a>
                </div>
                <h3>Projeto 1</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="https://www.fateccruzeiro.edu.br/images/docentes/03370432641.jpg" alt="">
            
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> Feichas </a>
                    <a href="#"> <i class="fas fa-calendar"></i> 1 de Novembro, 2021 </a>
                </div>
                <h3>Projeto 1</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>
        </div>

    </div>

</section>


<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">
    

    <div class="box-container">


    </div>

    <div class="credit"> created by <span> TG Fatec - Review.er </span> | all rights reserved </div>

</section>

<!-- footer section ends -->

</body>
</html>