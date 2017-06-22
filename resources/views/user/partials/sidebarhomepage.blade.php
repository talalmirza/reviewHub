
<div class="well" style="margin-top: 20px; border:2px solid rgba(40,166,243,1.00)" >
        <h4><strong>Trending</strong></h4>

    @foreach($tag_names as $tag_name)
        <h4 id="tags"><span class="label label-default"><a href="/search/tag/{{$tag_name}}" style="text-decoration: none; font-weight: 500">#{{$tag_name}}</a></span></h4>

    @endforeach


    </div>
