<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url ('dashboard') }}" style="color:white">ReviewHub</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/home') }}" style="background-color: transparent">Visit Site<span class="sr-only">(current)</span></a></li>

                <li><a href="{{url('review/create')}}">+ New</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/reviewer/profile/{{Session::get('admin')->username}}">{{Session::get('admin')->first_name}} &nbsp;<img src="{{ asset (Session::get('admin')->avatar) }}"
                                                                                                       class="img-circle" style="width:25px;height:auto;"></a></li>

                <li><a href="/reviewer/logout">Logout</a></li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>