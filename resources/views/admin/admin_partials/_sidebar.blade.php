
<div class="col-md-2 col-sm-12" style="margin-top:5%;">

    <ul class="list-group text-center">
        <a href="{{ url('dashboard') }}" style="text-decoration: none"><li class="list-group-item {{ set_active(['dashboard']) }} ">Home</li></a>
        <a href="{{ route('review.index') }}" style="text-decoration: none"><li class="list-group-item {{ set_active(['review']) }} ">Reviews</li></a>
        <a href="/reviewer/profile/{{Session::get('admin')->username}}" style="text-decoration: none"><li class="list-group-item {{ set_active(['settings']) }} ">Setting</li></a>
        <a href="{{ url('followers') }}" style="text-decoration: none"><li class="list-group-item {{ set_active(['followers']) }} ">Followers</li></a>
        {{--<li class="list-group-item {{ set_active(['users']) }} ">Users</li>--}}

    </ul>



</div>
