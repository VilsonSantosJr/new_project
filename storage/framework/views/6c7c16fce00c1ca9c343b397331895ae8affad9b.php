<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!------ home carousel ---------->
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- favicon -->
        <link rel="shortcut icon" href="https://casadocaminho-pae.org.br/designs/themes/casa-do-caminho/favicon.ico" type="image/x-icon">
        <h2><img src="https://casadocaminho-pae.org.br/assets/designs/themes/casa-do-caminho/images/casa-do-caminho.png" alt="logo casa do caminho"></h2>            
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">

        <!-- Styles -->
         <style>
/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
    height: 0vh;
   
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
    
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 2em;    
    font-weight: bold;
    color: #25b501;
    margin: 0;
    margin-top: 60px;
    margin-right: 50px;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
            margin-top: 10px;
            margin-left: -59px;
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;
}

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #2a1eb2;
    border-color: #1abc9c;
    outline: none;
    margin: 40px; auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 70vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(http://cecx.org.br/images/Centro-Espirita-Casa-do-Caminho-Chico-Xavier-Logotipo.svg); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(https://casadocaminho-pae.org.br/articles/colivre/0000/6896/caminhocasa-olho.jpg);
}
.fade-carousel .slides .slide-3 {
  background-image: url(https://casadocaminho-pae.org.br/articles/colivre/0002/8866/tratamento-espiritual02.jpg);
}

/********************************/
/*          Media Queries       */
/********************************/
@media  screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media  screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    

}
#main-footer {
    background: ##3498db;
    box-shadow: 0px 2px 13px rgba(0,0,0,0.5);
    position: relative;
    z-index: 10;
    padding: 30px 0px;
}
#main-footer p {
    background: url(https://casadocaminho-pae.org.br/assets/designs/themes/casa-do-caminho/images/casa-do-caminho.png) 0% 90% no-repeat;
    color: #27ae60;
    margin: auto;
    margin-right: 20px;
    padding-left: 140px;
    text-align: justify;
}

/* Blue Flat Button
==================================================*/
.btn-xlarge{
  position: relative;
  vertical-align: center;
  margin: 50px auto;
  margin-bottom: 100px;
  margin-top: 221px;
  margin-right: 70%;
  width: 40%;
  height: 100x;
  padding: 20px 48px;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #2980b9;
  border: 0;
  border-bottom: 3px solid #9FE8EF;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -3px #9FE8EF;
  box-shadow: inset 0 -3px #9FE8EF;
}
.btn-xlarge:active {
  top: 2px;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-xlarge:hover {
  background: #3498db;
}
    
        </style>
<!-- end styles -->
        <title>Sistema de Controle - Casa do Caminho</title>
    </head>
    <body>
                        <div class="links">

                <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>

        <!-- Indicators -->
        <!--<ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
        </ol>-->
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
            <div class="slide-1"></div>
            <div class="hero">
                <hgroup>
                   <!-- <h1>Sistema de Controle</h1>  -->
                </hgroup>
                <!--<button class="btn btn-hero btn-lg" role="button">Acessar</button>-->
                <div class="container">
	                <div class="row">
                    <a href="<?php echo e(url('/login')); ?>"><button class="btn btn-xlarge"/><i class="fa fa-sign-in fa-5x" ></i></button></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div id="main-footer">
            <p>
        <strong>A Casa do Caminho – Pronto Atendimento Espírita</strong>
         é uma organização religiosa filantrópica, cultural e de assistência social, sem fins lucrativos, pessoa jurídica de direito privado, instituída nos termos do Código Civil Brasileiro (Lei nº 10.406/2002), fundada em 2001, que tem como missão praticar a caridade e o amor ao próximo, 
        realizando o pronto atendimento fundamentado na doutrina espírita, servindo com alegria, simplicidade e humildade. 
            </p>
        </div>
    </body>
</html>
