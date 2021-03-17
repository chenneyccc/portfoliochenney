@extends('layouts.app')

@section('content')
    <section>


            <div class="container my-4">

                <p style="font-size: 30px" class="font-weight-bold">Kerntaak 1</p>

                <p><strong>Functioneel ontwerp, Programma van eisen, Projectplan & Technisch ontwerp.</strong></p>

                <hr class="my-4">

                <!--Carousel Wrapper-->
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <p style="font-size: 20px">Functioneel ontwerp: Functionaliteiten </p>
                            <img class="d-block w-100" style=" height: 400px;" src="../img/functieFO.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <p style="font-size: 20px">Functioneel ontwerp: Lay-out </p>
                            <img class="d-block w-100" style=" height: 400px;" src="../img/layoutFO.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <p style="font-size: 20px">Functioneel ontwerp: Navigatiestructuur </p>
                            <img class="d-block w-100" style=" height: 400px;" src="../img/naviFO.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <p style="font-size: 20px">Programma van eisen </p>
                            <img class="d-block w-100" style=" height: 400px;" src="../img/PVE.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <p style="font-size: 20px">Projectplan: Planning Kerntaak 1 </p>
                            <img class="d-block w-100" style=" height: 400px;" src="../img/PVA.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <p style="font-size: 20px">Projectplan: Planning Rent-A-Car </p>
                            <img class="d-block w-100" style=" height: 400px;" src="../img/Planning.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <p style="font-size: 20px">Technisch ontwerp: Technische specificaties </p>
                            <img class="d-block w-100" style=" height: 400px;" src="../img/to.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <p style="font-size: 20px">Technisch ontwerp: Entiteit Relatie Diagrammen</p>
                            <img class="d-block w-100" style=" height: 400px;" src="../img/ERD.png" alt="Third slide">
                        </div>
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="../img/blue.jpg"
                                                                                                 class="img-fluid"></li>
                        <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="../img/blue.jpg"
                                                                                 class="img-fluid"></li>
                        <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="../img/blue.jpg"
                                                                                 class="img-fluid"></li>
                        <li data-target="#carousel-thumb" data-slide-to="3"><img class="d-block w-100" src="../img/blue.jpg"
                                                                                 class="img-fluid"></li>
                        <li data-target="#carousel-thumb" data-slide-to="4"><img class="d-block w-100" src="../img/blue.jpg"
                                                                                 class="img-fluid"></li>
                        <li data-target="#carousel-thumb" data-slide-to="5"><img class="d-block w-100" src="../img/blue.jpg"
                                                                                 class="img-fluid"></li>
                        <li data-target="#carousel-thumb" data-slide-to="6"><img class="d-block w-100" src="../img/blue.jpg"
                                                                                 class="img-fluid"></li>
                        <li data-target="#carousel-thumb" data-slide-to="7"><img class="d-block w-100" src="../img/blue.jpg"
                                                                                 class="img-fluid"></li>
                    </ol>
                </div>
                <!--/.Carousel Wrapper-->

            </div>





    </section>


@endsection
