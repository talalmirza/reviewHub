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
        a#sub{
            color: white;
            border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;
        }
        a#sub:hover{
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
            <div class="row"><h1>Search results for "{{$keyword}}"</h1></div>
            <div class="row">

                <div class="col-md-2 col-sm-2 w3-card w3-darkgrey" id="card" style=" background-color: #0F0F0F; padding-top: 20px;margin-top: 30px;">
                    <div class="row" id="navtabs_row" style="background-color: #0F0F0F;">
                        <div class="col-md-12 col-sm-12" style="padding-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                            <ul class="nav nav-tabs nav-stacked" id="nav"style="background-color: #0F0F0F;border-bottom: 0px">
                                <li role="presentation" id="dash" class="active"><a class="text-centre" style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;" id="everything" data-toggle="tab" href="#home">Everything</a></li>
                                <li role="presentation" id="dash"><a style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;" id="sub"data-toggle="tab" href="#posts">Posts</a></li>
                                <li role="presentation" id="dash"><a style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;"id="sub" data-toggle="tab" href="#tags">Tags</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-10 col-sm-10" style="margin-bottom: 30px;">


                                    @if (!isset($reviews) && !isset($categories) && !isset($tags))

                                        <div class="alert alert-danger alert-dismissable">
                                            <a class="panel-close close" data-dismiss="alert">×</a>

                                            <strong>Ooops ! </strong>{{$message}}
                                        </div>

                                        @endif


                                    @if (isset($reviews))
                                    @if($reviews->isEmpty())

                                                <div class="alert alert-danger alert-dismissable">
                                                    <a class="panel-close close" data-dismiss="alert">×</a>

                                                    <strong>Ooops ! </strong>No reviews were found for the searched keyword
                                                </div>



                                    @elseif(!$reviews->isEmpty())
                                        @include ('user.partials.reviews')

                                    @endif

                                        @endif
                                </div>




                            </div>


                            @if (isset($categories))
                            @if(!$categories->isEmpty())

                                @if(!$reviews->isEmpty())
                                    <hr style="border-top:5px solid #eee">
                                @endif

                                <div class="row">


                                    @include ('user.partials.categories')


                                </div>



                            @endif
                                @endif

                        </div>

                        <div id="posts" class="tab-pane fade in">
                            <div class="col-md-10 col-sm-10" style="margin-bottom: 30px;padding-left:0px;">
                                @if (isset($reviews))
                                @foreach($reviews as $review)

                                    @include('user.partials._postbox')

                                @endforeach
                                    @endif

                            </div>
                        </div>


                        <div id="tags" class="tab-pane fade in">
                            <div class="col-md-10 col-sm-10" style="margin-bottom: 30px;padding-left:0px;">

                                @if (isset($tags))
                                @foreach($tags as $tag)

                                    @foreach($tag->reviews as $review)
                                        @include('user.partials._postbox')

                                    @endforeach
                                @endforeach

@endif

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section ('custom-script')


    @endsection