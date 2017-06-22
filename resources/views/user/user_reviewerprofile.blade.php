@extends ('user.masterlayout')


@section('custom-css')


    <style>
        .btn-file {
            position: relative;
            overflow: hidden;

        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        .form-group {

            padding-top: 5%;
        }

        #img-upload {
            width: 100%;
            height: auto;
        }
    </style>

@endsection

@section('content')

    <div class="page">

        @include('user.partials.navbar')



        <div class="container">

            <div class="row">
                <div class="well">

                    <div class="text-center">
                        <img src="{{asset($reviewer->avatar)}}" style="width: 200px;height: 200px" class="img-circle">

                        <h5 style="color:orange"><strong><span>@</span>{{$reviewer->username}}</strong></h5>
                        @if($reviewer->isFollow($reviewer->id))
                            <a href="/unfollow/{{$reviewer->username}}">
                                <button type="submit" class="btn btn-sm btn-info"><b>Unfollow {{$reviewer->username}}</b></button>
                            </a>
                        @else
                            <a href="/follow/{{$reviewer->username}}">
                                <button type="submit" class="btn btn-sm btn-info"><b>Follow {{$reviewer->username}}</b></button>
                            </a>
                        @endif


                    </div>

                </div>

                <div class="text-center">

                    <h3 class="media-heading">{{$reviewer->first_name}}&nbsp;{{$reviewer->last_name}}&nbsp;<small>{{$reviewer->city}}</small></h3>
                    <h6><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;{{$reviewer->email}}</h6>

                    {{--<span><strong>Rank: {{$reviewer->rank->title}}</strong></span>--}}

                    <span class="label label-info">Category Type/Rank : {{$reviewer->rank->title}} </span>

                </div>


                <div class="w3-panel w3-leftbar w3-border-blue">
                    <h5><strong>About Reviewer: </strong></h5>
                    <p>{{$reviewer->about}}</p>
                </div>
                <br>


                <div class="w3-panel w3-leftbar w3-border-blue">
                    <h4>Recent Posts.</h4>

                </div>


                <div class="row">

                    <div class="col-md-6 col-sm-8">
                        @foreach($reviews as $review)


                            <a href="/review/{{$review->id}}" style="text-decoration: none">
                                <div class="w3-card-4" style="margin-bottom: 20px;">

                                    <header class="w3-container w3-blue">
                                        <h1>{{$review->title}}</h1>
                                    </header>

                                    <div class="w3-container">
                                        <p>{{$review->caption}}</p>
                                    </div>

                                </div>

                            </a>

                        @endforeach



                    </div>
                </div>


            </div>


        </div>


    </div>
@endsection