@extends('layouts.app')

@section('content')
    <section>


        <div class="container my-4">

            <p style="font-size: 30px" class="font-weight-bold">HTML & CSS</p>

            <p><strong>Challenges</strong></p>

            <hr class="my-4">

            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <p style="font-size: 20px">Challenge 1: Ik kreeg een opdracht om een website na te maken met HTML & CSS. Hier heb ik geleerd om te werken met website positions.
                        Ook heb ik geleeerd geleerd om mijn website responsive te maken.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/challengesite.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge 2: Ik kreeg een opdracht om dit na te maken met HTML & CSS. Hier heb ik geleerd om met "div" te werken.  </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/challenge2.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge 3: Ik kreeg een opdracht om dit na te maken met HTML & CSS. Hier heb ik geleerd om met "div" te werken.
                        Ook moest ik hiervoor meer CSS gebruiken.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/challenge3.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge 4.Ik kreeg een opdracht om dit na te maken met HTML & CSS.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/challenge6.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Challenge 5: Hier heb ik geleerd om een contact pagina met een formulier te maken.</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/contactchallenge.png" alt="First slide">
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