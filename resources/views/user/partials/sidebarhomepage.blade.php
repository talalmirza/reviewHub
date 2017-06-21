
<div class="well" style="margin-top: 20px; border:2px solid rgba(40,166,243,1.00)" >
        <h4><strong>Trending</strong></h4>

        @foreach($tags as $tag)
        <h4 id="tags"><span class="label label-default"><a href="#" style="text-decoration: none; font-weight: 500">#{{$tag->name}}</a></span></h4>

        @endforeach


    </div>
