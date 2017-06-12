@extends ('user.masterlayout')


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
                            <span style="padding-right:3px; padding-top: 3px; display:inline-block;"><img style="width: 30px; height: 30px;" src="{{URL::asset('images/vectors/'.$review->category->vector)}}"></span>
                            {{ $review->category->name }}
                        </h5>

                        <p style="font-weight: 400;display: inline-block;">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            {{$review->reviewer->first_name}}&nbsp;{{$review->reviewer->first_name}}&nbsp;
                        </p>

                        <p style="color: darkgrey; display: inline-block;">
                            <a href="#" id="username" style="text-decoration: none;"><i class="fa fa-at"></i>{{$review->reviewer->username}}</a>
                            &nbsp;|&nbsp;&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{{$review->created_at->format('F j')}}
                        </p>
                        {{--<p>Posted by <span class="glyphicon glyphicon-user"></span> <a href="#">{{ $review->reviewer->first_name . ' ' . $review->reviewer->last_name }}</a> on <span class="glyphicon glyphicon-time"></span> {{ $review->created_at->toFormattedDateString() }} in <span class="glyphicon glyphicon-book"></span> {{ $review->category->name }} </p>--}}
                    </div>
                </div>
            </div>


            <!-- /.row -->

            <div class="row">
                <div class="col-md-9 col-sm-8">

                    <div class="text-center" >

                        <img src="{{  asset($review->featureimage) }}" alt="" style="width:90%; border-radius: 3px ;height:auto;">


                    </div>

                    <br>
                    <p class="lead">{{$review->caption}}</p>



                       {!! $review->body !!}


                    <hr>

                    <!-- Comment form -->
                    @include('user.partials.articlecommentform')

                    <!-- Comments -->
                    <h3>Comments</h3>
                   @include('user.partials.commentbox')


                </div>


                <div class="col-md-3 col-sm-4">

                    <!-- Panel -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">Reviewer - {{ $review->reviewer->first_name . ' ' . $review->reviewer->last_name }}</h4>
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
        $(function() {
            var hash = window.location.hash;
            hash && $('ul.nav a[href="' + hash + '"]').tab('show');

            $('.nav-tabs a').click(function (e) {
                $(this).tab('show');
                var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                window.location.hash = this.hash;
                $('html,body').scrollTop(scrollmem);
            });
        });


    </script>

    @endsection