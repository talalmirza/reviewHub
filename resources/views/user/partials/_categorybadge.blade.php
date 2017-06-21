<div class="col-md-4 col-sm-4 ">

    <div class="text-center">

       <span>
           <a href="/search/{{$category->name}}" style="text-decoration: none; font-size: large">


               <div class="w3-hover-shadow" style="padding-bottom: 5%; padding-top: 5%;">
                   <img src="{{URL::asset('images/vectors/'.$category->vector)}}" class="img-rounded" >

                   <div class="w3-container w3-center">
                       <br>
                       <b>{{$category->name}}</b>
                   </div>
            </div>


            </a>
            </span>
    </div>
</div>
