<style>

    #username:hover{
        color: darkgrey;
        font-weight: bold;
        text-decoration: none;
    }

</style>

<div class="col-md-12 col-sm-12" style="padding-top: 30px;">

    <div class="w3-container">

        <div class="w3-card-4" data-postid="{{ $review->id }}">
            <div class="row" style="padding-left: 40px;padding-right: 40px;padding-bottom: 10px">
                <header class="w3-container w3-white">

                    <h3 id="title" style="font-weight: bold">{{$review->title}}</h3>

                    <p style="font-weight: 400;display: inline-block;">
                        {{$review->reviewer->first_name}}&nbsp;{{$review->reviewer->last_name}}
                    </p>

                    <p style="color: darkgrey; display: inline-block;">
                        <a href="
@if(Auth::check())
                                /user/{{$review->reviewer->username}}
                        @else
                                #
                        @endif
                                " id="username"><i
                                    class="fa fa-at"></i>{{$review->reviewer->username}}</a>
                        &nbsp;|&nbsp;{{$review->created_at->format('F j')}}
                    </p>
                </header>

                <a href="/review/{{$review->id}}" style="text-decoration: none">
                <div class="w3-container w3-white">
                    <p>{{$review->caption}}</p>

                    @if (isset($review->featureimage))
                    <img src="{{asset($review->featureimage)}}" class="media-object"
                         style="width:70%; border-radius: 3px ;height:auto;">
                        @endif

                </div>
                    </a>

                @if(Auth::check())
                    <footer class="w3-container w3-white" style="padding-left:25px;padding-top: 20px">
                        <a class="like" data-id="{{$review->id}}"><i
                                    class="fa fa-2x fa-thumbs-up
                        @if($review->isLiked($review->id))
                                            unlike-btn
@else
                                            like-btn
@endif
                                            "

                                    @if($review->isLiked($review->id))
                                    style="color: dodgerblue;"
                                    @endif

                            >{{$review->likes->count()}}</i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {{--Share External--}}
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://reviewhub.com/review/{{$review->id}}" target="_blank"><i
                                    class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/review/{{ $review->id }}"><i
                                    class="fa fa-2x fa-comment">{{$review->comments->count()}}</i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </footer>
                @endif
            </div>
        </div>
    </div>
</div>