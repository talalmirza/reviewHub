@extends ('user.masterlayout')


@section ('content')

    <div id="page" class="page">

        <!-- header -->
        <header class="header8">

            <div class="top_menubar row">


                <div class="col-md-11 col-sm-11 col-xs-11">
                    <div style="float:right;">
                        <a class="btn btn-primary" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                        <a class="btn btn-primary" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
                    </div>

                </div>

            </div>




      @include ('user.partials.modal')
            @include ('user.partials.mainbanner')

        </header>

        <section class="content-section8 text-center">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-content">
                            <h3>Bootstrap</h3>
                            <p>
                                Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza 		Humza Humza Humza
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-4">
                        <div class="single-content">
                            <h3>Bootstrap</h3>
                            <p>
                                Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">

                        <div class="single-content">
                            <h3>Bootstrap</h3>
                            <p>
                                Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-4">
                        <div class="single-content">
                            <h3>Bootstrap</h3>
                            <p>
                                Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-4">
                        <div class="single-content">
                            <h3>Bootstrap</h3>
                            <p>
                                Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="single-content">
                            <h3>Bootstrap</h3>
                            <p>
                                Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza Humza
                            </p>
                        </div>
                    </div>


                </div><!-- end row -->


            </div><!-- end container -->


        </section>

        <div class="wrapperDark"></div>

        <section id="content-section1" class="content-section1">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="text-center single-content">
                            <!-- Clip image with an oval -->
                            <img src="images/vetors/256-256-d13cafbf17ecd8f2065c8842a6e4e228.png" alt="..." class="img-rounded">


                            <h3>Food</h3>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center single-content">
                            <!-- Clip image with an oval -->
                            <img src="images/vetors/Movie alt 512x512.png" alt="..." class="img-rounded">


                            <h3>Movies</h3>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center single-content">

                            <br>
                            <!-- Clip image with an oval -->
                            <img src="images/vetors/desktop-computer-with-screen-vector-icon-800x566.png" alt="..." class="img-rounded">


                            <h3>Computers & Hardwares</h3>



                        </div>


                    </div>




                </div><!-- end row -->

                <a href="{{ url ('livefeed#category_list') }}" type="button" class="btn btn-info" style="float:right;">More Categories</a>


            </div><!-- end container -->
        </section>

        <div class="wrapperDark"></div>

        <section id="content2-1" class="content2-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="text-center"><h3 class="content-title">Join us</h3>
                            <h4>Do you have what it takes to be reviewer knight ?</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-info button">Apply</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    @endsection