<a id="box" href="/review/{{$review->id}}">
    <div class="col-md-4 col-sm-6">

        <div class="w3-card-4 w3-margin" style="width:100%">
            <div class="w3-display-container w3-text-white">
                <img src="{{asset($review->featureimage)}}" class="w3-hover-opacity" style="height: auto; width:100%">
                <div class="w3-xlarge w3-display-topmiddle w3-padding" style="color: white; text-shadow: 2px 2px 4px #000000;">
                    <h2>{{$review->title}}</h2>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-third w3-left">
                    <h5>{{$review->caption}}</h5>
                </div>

            </div>
        </div>

    </div>
</a>