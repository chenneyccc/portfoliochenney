@extends('layouts.app')

@section('content')
    <section>


        <div class="container my-4">

            <p style="font-size: 30px" class="font-weight-bold">PHP</p>

            <p><strong>Opdrachten & Challenge.</strong></p>

            <hr class="my-4">

            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <p style="font-size: 20px">Hier leerde ik om met variables te werken. Ook leerde ik om met
                                        variables tekst weertegeven op de pagina.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/phpvar.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hier leerde ik om de post method te gebruiken. Achteraf gezien
                                        was dit heel belangrijk, want ik heb dit vaak toegepast in me examen.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/phppost.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hier leerde ik om te werken met loops en if/else -statements.
                                                In het eerste plaatje leerde ik om met while te plaatjes te tonen van de apen.
                                                Ook leerde ik om met variables te werken in een if/else -statement.
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/phploops.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Hier leerde ik om te werken met foreach  -statement. Met een foreach -statement kan ik
                                        een array weergeven. Zoals je ziet heb ik dat ook gedaan!
                        </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/phparray.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge PHP, als je drukt op een aap naam stuurt hij je door naar google images van de aap.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/phpcha.png" alt="First slide">
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