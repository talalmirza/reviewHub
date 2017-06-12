{{--<div class="col-md-12 col-sm-12" style="padding: 15px;margin: 20px; border-radius: 15px; background-color: white">--}}
    {{--<!-- Media middle -->--}}
    {{--<div class="media">--}}

        {{--<div class="media-left media-middle">--}}

            {{--<img src="{{asset($review->featureimage)}}" class="media-object" style="width:150px;height:auto;">--}}

        {{--</div>--}}

        {{--<div class="media-body">--}}

            {{--<h4 class="media-heading">{{$review->title}}</h4>{{$review->created_at->format('F j')}}&nbsp;|&nbsp;<a><b>{{$review->reviewer->first_name.' '.$review->reviewer->last_name}}</b></a>  --}}
            {{--<p>{{$review->caption}}</p>--}}


            {{--<div>--}}
                {{--<a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;--}}
                {{--<a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;--}}
                {{--<a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;--}}

            {{--</div>--}}


        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="col-md-12 col-sm-12" style="padding: 15px;margin: 20px; border-radius: 15px; background-color: white">

    <div class="w3-container">

        <div class="w3-card-4">
            <header class="w3-container w3-white">
                <h4>{{$review->title}}</h4>{{$review->created_at->format('F j')}}&nbsp;|&nbsp;<a><b>{{$review->reviewer->first_name.' '.$review->reviewer->last_name}}</b></a>
            </header>

            <div class="w3-container w3-white">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <footer class="w3-container w3-white">
                <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;

            </footer>
        </div>
    </div>
</div>