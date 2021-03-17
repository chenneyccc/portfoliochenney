@extends('layouts.app')

@section('content')
    <section>


        <div class="container my-4">

            <p style="font-size: 30px" class="font-weight-bold">Javacript</p>

            <p><strong>Challenges</strong></p>

            <hr class="my-4">

            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <p style="font-size: 20px">Challenge 1: Elke keer als je de pagina refresht worden de aapjes willekeurig verplaats. elk plaatje heeft een nummer. Het script
                        kijkt naar het plaatje en zet hem vervolgends op een willekeurige plek</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/monkey.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge 2: Je kan je favoriete aapje kiezen. Als je drukt op het aapje krijgt het een hartje.  </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/chooser.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Ook heb ik toturials gekeken en minigames gemaakt, omdat ik oude games
                            altijd leuk vond probeerde ik ook een spel te maken met een balletje die steeds een muur kapot moet maken.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/game.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge 3: Het aapje veranderd van aapje als je op het plaatje drukt.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/aapje.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Het veranderd naar de kleur dat wat er op het knopje staat,
                            als je op het knopje drukt en als het opgehaald word zal het kijken naar welke kleur geselecteerd is. Daarna zal de functie de achtergrond die kleur maken.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/jskleur.png" alt="First slide">
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
                </ol>
            </div>
            <!--/.Carousel Wrapper-->

        </div>





    </section>


@endsection