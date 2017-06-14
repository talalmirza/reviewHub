<div class="col-md-12 col-sm-12" style="padding-top: 30px;">

    <div class="w3-container">

        <div class="w3-card-4" data-postid="{{ $review->id }}" >
            <div class="row" style="padding-left: 40px;padding-right: 40px;padding-bottom: 10px">
                <header class="w3-container w3-white">

                    <h3 id="title" style="font-weight: bold">{{$review->title}}</h3>

                    <p style="font-weight: 400;display: inline-block;">
                        {{$review->reviewer->first_name}}&nbsp;{{$review->reviewer->first_name}}
                    </p>

                    <p style="color: darkgrey; display: inline-block;">
                        <a href="#" id="username" style="text-decoration: none;"><i class="fa fa-at"></i>{{$review->reviewer->username}}</a>
                        &nbsp;|&nbsp;{{$review->created_at->format('F j')}}
                    </p>

                </header>

                <div class="w3-container w3-white">
                    <p>{{$review->caption}}</p>
                    <img src="{{asset($review->featureimage)}}" class="media-object" style="width:70%; border-radius: 3px ;height:auto;">

                </div>

                <footer class="w3-container w3-white" style="padding-left:25px;padding-top: 20px">
                    <a class="like"><i class="fa fa-2x fa-thumbs-up">{{$review->likes->count()}}</i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a><i class="fa fa-2x fa-comment">{{$review->comments->count()}}</i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                </footer>

            </div>
        </div>
    </div>
</div>