<div class="col-md-12 col-sm-12" style="padding: 15px;margin: 20px; border-radius: 15px; background-color: white">
    <!-- Media middle -->
    <div class="media">

        <div class="media-left media-middle">

            <img src="{{URL::asset('images/vectors/12-512.png')}}" class="media-object" style="width:150px;height:auto;">
            <img src="{{$review->featureimage}}" class="media-object" style="width:150px;height:auto;">

        </div>

        <div class="media-body">

            <h4 class="media-heading">{{$review->title}}</h4><b>{{$review->created_at->toFormattedDateString()}}</b> &nbsp;<a><b>{{$review->reviewer->first_name.' '.$review->reviewer->last_name}}</b></a>  
            <p>{{$review->caption}}</p>


            <div>
                <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;

            </div>


        </div>
    </div>


    {{--<div class="w3-container">--}}

        {{--<div class="w3-card-4">--}}
            {{--<header class="w3-container w3-blue">--}}
                {{--<h1>Header</h1>--}}
            {{--</header>--}}

            {{--<div class="w3-container">--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>--}}
            {{--</div>--}}

            {{--<footer class="w3-container w3-blue">--}}
                {{--<h5>Footer</h5>--}}
            {{--</footer>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>