@extends('layouts.app')

@section('content')
    <section>


        <div class="container my-4">

            <p style="font-size: 30px" class="font-weight-bold">Video's</p>

            <p><strong>Klantgesprek, Kerntaak 2: Acceptatietest & Kerntaak 3: Testplan.</strong></p>
            <p>Klik op de foto's om de video's te zien.</p>
            <hr class="my-4">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">

                            <!--Content-->
                            <div class="modal-content">

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="../video/klangesprek.mp4"
                                                allowfullscreen></iframe>
                                    </div>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <span class="mr-4">Klantgesprek</span>
                                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                                    <!--Twitter-->
                                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                    <!--Google +-->
                                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                                    <!--Linkedin-->
                                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                </div>

                            </div>
                            <!--/.Content-->

                        </div>
                    </div>
                    <!--Modal: Name-->

                    <a>
                        <p style="text-align: center"><strong>Klantgesprek</strong></p>

                        <img style="height: 300px; " class="img-fluid z-depth-1" src="../img/klantgesprek.png" alt="video"
                            data-toggle="modal" data-target="#modal1"></a>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">



                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4">

                    <!--Modal: Name-->
                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">

                            <!--Content-->
                            <div class="modal-content">

                                <!--Body-->
                                <div class="modal-body mb-0 p-0">

                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                        <iframe class="embed-responsive-item" src="../video/aceptatietest.mp4"
                                                allowfullscreen></iframe>
                                    </div>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer justify-content-center">
                                    <span class="mr-4">Kerntaak 2: Testplan & Kerntaak 3: Acceptatietest</span>
                                    <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                                    <!--Twitter-->
                                    <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                                    <!--Google +-->
                                    <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                                    <!--Linkedin-->
                                    <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                                </div>

                            </div>
                            <!--/.Content-->

                        </div>
                    </div>
                    <!--Modal: Name-->

                    <a>
                        <p style="text-align: center"><strong>Kerntaak 2: Testplan  & Kerntaak 3: Acceptatietest</strong></p>
                        <img style="height: 300px;" class="img-fluid z-depth-1" src="../img/testplann.png" alt="video"
                            data-toggle="modal" data-target="#modal4"></a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->


        </div>
    </section>


@endsection
