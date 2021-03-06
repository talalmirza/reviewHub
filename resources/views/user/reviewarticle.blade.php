@extends ('user.masterlayout')


@section ('custom-css')

    <style>

        #tags {

            display: inline;
        }



        #tags > a:hover {

            color:white;
            font-weight: bold;

        }

        #username:hover{
            color: darkgrey;
            font-weight: bold;
            text-decoration: none;
        }

    </style>

@endsection

@section ('content')


    <div class="page">

    @include ('user.partials.navbar')

    <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-header">
                        <h1 id="title" style="font-weight: bold">{{ $review->title }}</h1>
                        <h5 id="category">
                            <span style="padding-right:3px; padding-top: 3px; display:inline-block;"><img
                                        style="width: 30px; height: 30px;"
                                        src="{{URL::asset('images/vectors/'.$review->category->vector)}}"></span>
                            {{ $review->category->name }}
                        </h5>

                        <p style="font-weight: 400;display: inline-block;">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            {{$review->reviewer->first_name}}&nbsp;{{$review->reviewer->last_name}}&nbsp;
                        </p>

                        <p style="color: darkgrey; display: inline-block;">
                            <a href="
@if(Auth::check())
                                    /user/{{$review->reviewer->username}}
                            @else
                                    #
                            @endif
                                    " id="username"><i class="fa fa-at"></i>{{$review->reviewer->username}}</a>
                            &nbsp;|&nbsp;&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{$review->created_at->format('F j')}}
                        </p>

                    </div>
                </div>
            </div>


            <!-- /.row -->

            <div class="row">
                <div class="col-md-9 col-sm-8">

                    <div class="text-center">

                        @if (isset($review->featureimage))
                        <img src="{{  asset($review->featureimage) }}" alt=""
                             style="width:90%; border-radius: 3px ;height:auto;">

                            @endif


                    </div>

                    <br>
                    <p class="lead">{{$review->caption}}</p>


                    {!! $review->body !!}

                    <div style="margin-top: 10px">
                        @foreach($tag_names as $tag_name)
                            <h4 id="tags"><a href="/search/tag/{{$tag_name}}" style="text-decoration: none"><span class="label label-default" style="font-weight: 500">#{{$tag_name}}</span></a></h4>
                        @endforeach
                        </div>

                    <hr>
                    @if(!Auth::check())
                            <p class="alert alert-info">Please Signin/Signup to submit your verdict.</p>
                            @endif

                    @if(Auth::check())
                    <!-- Comment form -->
                @include('user.partials.articlecommentform')
                @endif

                <!-- Comments -->
                    <h3>Comments</h3>


                    <div id="commentBox">
                        @include('user.partials.commentbox')
                    </div>

                </div>



                <div class="col-md-3 col-sm-4">

                    <!-- Panel -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">Reviewer
                                - {{ $review->reviewer->first_name . ' ' . $review->reviewer->last_name }}</h4>
                        </div>
                        <div class="panel-body">
                            <label>About {{  $review->reviewer->first_name }}</label>
                            <p>{{ $review->reviewer->about }}</p>
                        </div>
                    </div>


                </div>


            </div>
            <!-- /.row -->


        </div>
        <!-- /.container-fluid -->

        <br>
    </div>
@endsection


@section('custom-script')



    <script>
        var url = document.location.toString();

        if (url.match('#')) {
            $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
        } //add a suffix

        // Change hash for page-reload

        $('.nav-tabs a').on('shown.bs.tab', function (e) {
            window.location.hash = e.target.hash;
            window.scrollTo(0, 0);


        });

    </script>

    <script>
        $(function () {
            var hash = window.location.hash;
            hash && $('ul.nav a[href="' + hash + '"]').tab('show');

            $('.nav-tabs a').click(function (e) {
                $(this).tab('show');
                var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                window.location.hash = this.hash;
                $('html,body').scrollTop(scrollmem);
            });
        });


        $('.comment-btn').on('click', function () {

            _this = this;
            var id = $(this).attr('data-id');

            $.ajax({
                type: 'get',
                url: '/comment/review/' + id,
                data: {
                    comment: $("#comment").val()
                },
                success: function (res) {
                    console.log(res);
                    $("#comment").val('');
                    var s = '<div class="well"><div class="media"><div class="media-left media-middle"><img src="http://placehold.it/70x70" alt=""></div>' +
                        '<div class="media-body">' +
                        '<h5 class="margin-t-0"><b>'+ res.name +'</b></h5><h6>'+ res.time +'</h6>' +
                        '<p>'+ res.body +'</p></div></div></div>';
                        $('#commentBox').prepend(s);

                },
            })

        });
    </script>

@endsection