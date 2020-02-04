<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
        <title>Laravel</title>
        <style>
            body{
                margin-left: 10px;
            }
            .links > a {
                text-decoration: none;
                text-transform: uppercase;
            }
            .img{
                width: 64px;   
                margin: 0px;
                padding: 0px;  
            }
            .imgCarrusel{
                width: 95%;
                height: 70%;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <p class="mb-0"><span></span> Tel.: #999 999 999 - <span></span>   Ubicación</p>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="">
                        @if (Route::has('login'))
                            @auth
                                <a  href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="login mx-3" href="{{ route('login') }}">Iniciar</a>
                                <b>|</b>
                                @if (Route::has('register'))
                                    <a class="register mx-3" href="{{ route('register') }}">Registrar</a>
                                @endif
                            @endauth
                        @endif 
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col pl-0 mt-1">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light m-0 p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a class="navbar-brand m-0" href="#"><img class="img ml-3" src="https://scontent.flim18-1.fna.fbcdn.net/v/t1.0-9/16730133_1311631452229102_11862339118284319_n.jpg?_nc_cat=102&_nc_eui2=AeFCdgYcIA1a9mpvqSnlo0yO2d5Lvzc4cugMNX-ExCuARlDaC7G-YELbOAkgjdEVMk2ZpmFFNcb3Okif1cDQR51mn4xeavoYO4oIAtqZhkyCCQ&_nc_ohc=XDRPTokFQz8AX9oqx1C&_nc_ht=scontent.flim18-1.fna&oh=08f4853bb5b84533970f40cd9835f074&oe=5ED06E77" alt=""></a>

                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"">Institucion</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">sistema de enseñanza</a>
                          </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0 mr-3" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
                </div>
            </div>


            <div class="row">
                <div class="col">
                                  
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner justify-content-around">
                            <div class="carousel-item active" data-interval="10000">
                                <img class="imgCarrusel m-3" src="https://revistaingenieria.deusto.es/wp-content/uploads/2015/01/DSC_0305.jpg" class="w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img class="imgCarrusel" src="https://c8.alamy.com/compes/f1tbbt/un-grupo-de-alumnos-de-la-escuela-secundaria-con-exito-mirando-a-la-camara-con-una-sonrisa-f1tbbt.jpg" alt="...">
                            </div>
                         <div  class="carousel-item" data-interval="2000">
                                <img class="imgCarrusel" src="https://lh3.googleusercontent.com/proxy/dvXuCbtS7SvCsqhMWXdOPUC4R4VazxBjQ78iy5e0f0riXyQbiMBXV53jzxE50pXEohfX95Bwd3GQTFAo1V5PByrYVuneAfRcZpsoL017E9d55Kx75A6ZQWVsih_KyleiZKFa4DhZkAYl1vdtrQGu1yKCcfuF9bqJg0Gb"alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>

            <div class="row">
                <div class="col pl-0 mt-1" >
                    <nav class="navbar navbar-expand-lg navbar-light bg-light m-0 p-0" >
                        <div style="text-align: center" class="collapse navbar-collapse" id="navbarSupportedContent">
                           <h5 class="p-3" >footer de la pagina web</h3>
                            <p>Información acerca de la pagina web, numeros de contacto
                                //** seguridad de informacion **//
                                //** politicas de privasdad y conctacto **//
                            </p>
                        </div>
                    </nav>
                </div>
            </div>  
        </div>
    </body>
</html>

