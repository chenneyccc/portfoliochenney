@extends('layouts.app')

@section('content')
    <section>


        <div class="container my-4">

            <p style="font-size: 30px" class="font-weight-bold">Java</p>

            <p><strong>Opdrachten & Challenges</strong></p>

            <hr class="my-4">

            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <p style="font-size: 20px">Hoofdstuk 2: Dit is de eerste hoofdstuk. Hier heb ik geleerd om een applet te starten.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/show.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hoofdstuk 4: In dit hoofdstuk heb ik geleerd om te tekenen met Java. Ik heb geoefend met verschillende vormen te maken
                            en met kleuren toepassen.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/h4java.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hoofdstuk 5: In dit hoofdstuk leerde ik werken met variables. </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/h5java.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hoofdstuk 6: In dit hoofdstuk heb ik geleerd om te rekenen met getallen en variables.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/h6java.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hoofdstuk 8: In dit hoofdstuk heb geleerd om te werken met tekstvakken en knoppen.
                                        Om een actie te geven aan de knop en een tekstvak geef ik het een functie.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/h8java.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hoofdstuk 10: In dit hoofdstuk heb ik geleerd om te werken met if/else statements.
                            Dit vond ik een uitdaging, omdat het in die tijd nieuw voor mij was.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/h10java.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hoofdstuk 11: In dit hoofdstuk heb ik geleerd om te werken met loops.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/h11java.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge 1: Als opdracht kreeg ik om een grafiek te maken met tekstvakken en knoppen.
                            Als je de cijfers invult in de tekstvak en druk op de knop moet de grafiek de cijfers weergeven
                            die zijn ingevuld.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/C1java.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge 2: Als opdracht kreeg ik om een soort van kassa scherm te maken met producten
                            voor een restaurant.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/C2java.png" alt="First slide">
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
                    <li data-target="#carousel-thumb" data-slide-to="8"><img class="d-block w-100" src="../img/blue.jpg"
                                                                             class="img-fluid"></li>
                </ol>
            </div>
            <!--/.Carousel Wrapper-->

        </div>





    </section>


@endsection