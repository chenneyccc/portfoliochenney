@extends('layouts.app')

@section('content')
    <section>


        <div class="container my-4">

            <p style="font-size: 30px" class="font-weight-bold">Kerntaak 2</p>

            <p><strong>Acceptatie test & Evaluatie.</strong></p>
            <a href="https://github.com/chenneyccc/rent-a-car-test">Rent-A-Car Github</a>

            <hr class="my-4">

            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <p style="font-size: 20px">Ontwikkelomgeving</p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/ontwikkelomgeving.png" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Database </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/database.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p>
                        <p style="font-size: 20px">Github </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/github.png" alt="First slide">
                        </p>
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Website </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/website.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <p style="font-size: 20px">Testplan </p>
                        <img class="d-block w-100" style=" height: 400px;" src="../img/testen.png" alt="First slide">
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