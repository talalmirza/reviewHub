@extends ('user.masterlayout')


@section('custom-css')
    <style>
        #everything{
            color: white;
        }

        li#dash{
            width: 101%;
            text-align:center;
        }
        a#sub:visited{
            border-color: rgb(1, 1, 41);
            background-color: rgb(1, 1, 41);
            color: white;
            border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;
        }

        #card{box-shadow:0 6px 6px 0 rgba(0,0,0,0.80),0 6px 10px 0 rgba(0,0,0,0.80)}
        a#everything:hover{
            border-color: rgb(1, 1, 41);
            background-color:rgb(1, 1, 41);
            color:white;
            border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;
        }


    </style>



@endsection

@section('searchkeyword')
    {{$keyword}}
    @endsection

@section ('content')
    @include ('user.partials.navbar')
    <div class="container" style="background-color: white">
        <div class="row" style="margin-bottom: 50px;">
            <div class="row"><h1>Search results for category "{{$keyword}}"</h1></div>
            <div class="row">

                <div class="col-md-2 col-sm-2 w3-card w3-darkgrey" id="card" style=" background-color: #0F0F0F; padding-top: 20px;margin-top: 30px;">
                    <div class="row" id="navtabs_row" style="background-color: #0F0F0F;">
                        <div class="col-md-12 col-sm-12" style="padding-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                            <ul class="nav nav-tabs nav-stacked" id="nav"style="background-color: #0F0F0F;border-bottom: 0px">
                                <li style="margin-top: 20px" role="presentation" id="dash" class="active"><a class="text-centre" style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;" id="everything" data-toggle="tab" href="#home">Catgories</a></li>


                                {{--<li role="presentation" style="margin-top: 20px">--}}

                                        <a href="/home#category_list" style="display: flex; justify-content: center;text-decoration: none;"> <button style=" margin-top:30px;" class="btn btn-primary ">Show All Categories</button></a>

                                {{--</li>--}}

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">


                            <div class="row">
                                <div class="col-md-10 col-sm-10" style="margin-bottom: 30px;">

                                    @if($reviews->isEmpty())

                                        <div class="alert alert-danger text-center" role="alert">
                                            <strong>Oops</strong> No reviews were found for the this category..</a>.
                                        </div>



                                        @elseif(!$reviews->isEmpty())
                                    @include ('user.partials.reviews')

                                        @endif
                                </div>




                            </div>


                            @if(!$categories->isEmpty())

                                @if(!$reviews->isEmpty())
                            <hr style="border-top:5px solid #eee">
                                @endif

                            <div class="row">
                                <div class="col-md-10">


                                </div>

                            </div>



                            @endif

                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

