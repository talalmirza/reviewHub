@extends ('user.masterlayout')


@section('custom-css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <style>

        .btn{
            text-transform:uppercase;
            font-size:12px;
            padding:0 1.5rem;
            line-height:34px;
            letter-spacing:1.2px;
        }

        .btn-outline {
            border:1px solid rgba(70,60,100,0.5);
            color:#737795;
        }
        .btn-outline:hover {
            border:1px solid #5bc0de;
            color:#46b8dc;
        }

        .btn-pill {
            border-radius: 3rem!important;
            padding:.5rem 1.5rem;
            text-transform:uppercase;
            font-size:12px;
            padding:0 2rem;
            line-height:34px;
            letter-spacing:1.2px;
        }


        .btn-blue {
            background-image: linear-gradient(45deg, #5bc0de 0%, #46b8dc 100%);
            color:#fff;
            border:1px solid rgba(255,255,255,0);
            padding:0 1.5rem;
            line-height:34px;
            box-shadow: -5px 15px 30px rgba(91,192,222,0.5);

        }
        .btn-blue:hover,
        .btn-blue:focus,
        .btn-blue:active {
            background-image: linear-gradient(-45deg, #5bc0de 0%, #46b8dc 100%);
            color:#fff;
            box-shadow: -0px 5px 10px rgba(91,192,222,0.5);
        }

        .btn-lg {
            font-size: 20px;
            line-height: 50px;
            padding-left: 65px;
            padding-right: 65px;
        }

    </style>

@endsection

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

                    <div class="col-md-12 col-sm-12">
                        @foreach($reviews as $review)
                            @include('user.partials._landingpage_box')
                            @endforeach


                        </div>

                </div>



            </div><!-- end container -->


        </section>

        <div class="wrapperDark"></div>

        <section id="content-section1" class="content-section1">
            <div class="container">
                <div class="row">


                            @foreach($categories as $category)

                                @include('user.partials._categorybadge')
                                @endforeach
                    </div>

                <br>
                <div class="row">
                    <a class="btn btn-blue btn-pill" style="float:right; text-transform: capitalize;" href="{{ url ('home#category_list') }}">More Categories</a>
                </div>






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
                                <a href="{{ url ('reviewerapply') }}" style="text-transform: capitalize;" class="btn btn-outline btn-blue btn-pill btn-lg" >
                                    Apply
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection


@section ('custom-script')

    <script>
        $(document).ready(function(){
            var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
        })
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>


@endsection