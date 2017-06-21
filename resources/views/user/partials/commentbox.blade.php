@foreach($review->comments as $c)
    <div class="well">
        <div class="media">
            <div class="media-left media-middle">
                <img src="{{ asset($c->member->avatar) }}" alt="">
            </div>
            <div class="media-body">
                <h5 class="margin-t-0"><b>{{$c->member->email}}</b></h5>
                <h6>{{date('d M Y h:i',strtotime($c->created_at))}}</h6>
                <p>{{$c->body}}</p>
            </div>
        </div>
    </div>
@endforeach