@extends('layouts.app')

@section('content')
    <section>


        <div class="container my-4">

            <p style="font-size: 30px" class="font-weight-bold">Beroepsexamen</p>

            <p><strong>Rent A Car</strong></p>
            <a href="http://rent-a-car-examen.herokuapp.com">Rent-A-Car beroepsexamen Chenney</a>

            <hr class="my-4">

            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <p style="font-size: 20px">Pagina 1:Dit is de hoofdpagina op me website. Het heeft een zakelijk uiterlijk!</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/homepage.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 2: Assortiment. Hier kan je de auto's zien die verhuurd kunnen worden.
                                        Je kan alleen een auto huren als je ingelogd bent.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/assortimentrent.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 3: Contact Pagina. Hier vind je informatie over het bedrijf.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/contact.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 4: Inlog pagina. Op deze pagina kan je inloggen.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/login.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 5: Registratie pagina. Op deze pagina kan je registreren.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/registratie.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 6: Gegevens bewerken. Op deze pagina kan je je gegevens bewerken.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/profiel.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 7: Auto huren. Op deze pagina kan je een auto huren.
                            Je hoeft geen persoonlijke gegevens in te vullen dat wordt automatisch gedaan en toegevoegd in je factuur.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/reservenauto.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 8: Factuur. Hier kan je de factuur vinden van je gehuurde auto('s).</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/factuurpagina.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 9: Auto's. Op deze pagina kan je zien welke auto's in het assortiment te zien zijn.
                        Ook kan je de auto wijzigen en verwijderen. Je ziet ook dat de werknemer (Admin) een andere navbar heeft.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/autoassortiment.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 10: Gegevens van de auto bewerken. Hier kan je de gegevens  van de auto bewerken.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/profielauto.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 11: Gegevens van de auto bewerken. Hier kan je de gegevens van de auto bewerken.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/profielauto.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 12: Op deze pagina kan je een auto toevoegen aan het assortiment.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/toevoegen.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Pagina 13: Reserveringen. Op deze pagina kan je als werknemer de gereserveerde auto's terug zien.
                            Ook kan je de reserveringen een status geven (zie plaatje) en kan je de reserving verwijderen, als een auto stuk is bijvoobeeld.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/reserveringen.png" alt="First slide">
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
                    <li data-target="#carousel-thumb" data-slide-to="9"><img class="d-block w-100" src="../img/blue.jpg"
                                                                             class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="10"><img class="d-block w-100" src="../img/blue.jpg"
                                                                             class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="11"><img class="d-block w-100" src="../img/blue.jpg"
                                                                              class="img-fluid"></li>
                    <li data-target="#carousel-thumb" data-slide-to="12"><img class="d-block w-100" src="../img/blue.jpg"
                                                                              class="img-fluid"></li>

                </ol>
            </div>
            <!--/.Carousel Wrapper-->

        </div>





    </section>


@endsection