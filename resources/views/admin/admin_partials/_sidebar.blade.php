
<div class="col-md-2 col-sm-12" style="margin-top:5%;">

    <ul class="list-group text-center">
        <a href="{{ url('dashboard') }}"><li class="list-group-item {{ set_active(['dashboard']) }} ">Home</li></a>
        <a href="{{ route('review.index') }}"><li class="list-group-item {{ set_active(['posts']) }} ">Posts</li></a>
        <a href="{{ url('settings') }}"><li class="list-group-item {{ set_active(['settings']) }} ">Setting</li></a>
        <li class="list-group-item {{ set_active(['users']) }} ">Users</li>

    </ul>



</div>