<div class="list-group">
    <a href="/review/{{$review->id}}" class="list-group-item active">
        @if (isset($review->latestComment()->pluck('body')[0]))
            <h4 class="list-group-item-heading">{{$review->latestComment()->pluck('body')[0]}}</h4>
            <p class="list-group-item-text">{{$review->latestComment()->pluck('created_at')[0]}}</p>

        @else
            <h4 class="list-group-item-heading">*No comment*</h4>
        @endif
    </a>
</div>