<!-- header -->
<header class="header8">


    <nav role="navigation" class="navbar navbar-inverse">

        <div class="container">

            <div class="navbar-header">


                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ url ('home') }}"><img
                            src="{{ URL::asset ('images/Logos/navbarlogo.png') }}" style="height:34px;margin-top:-7px;"></a>
            </div>


            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav navbar-inverse navbar-right text-center">
                    @if(Auth::check())

                        <li><a href="/profile/{{Auth::user()->username}}"><img src="{{ asset(Auth::user()->avatar) }}"
                                                                 class="img-circle" style="width:25px;height:auto;">
                                &nbsp;&nbsp;<span>{{Auth::user()->first_name}}</span></a></li>


                        <li class="dropdown ">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="glyphicon glyphicon-option-horizontal" style="font-size: 25px;"></span></a>
                            <ul class="dropdown-menu" style="background-color: #222222">
                                <a href="/logout" style="text-decoration: none;color: white;">
                                    <li class="text-center">Logout</li>
                                </a>
                                <hr>
                                <a href="/contact" style="text-decoration: none;color: white;">
                                    <li class="text-center">Contact Us</li>
                                </a>
                                <hr>
                                <a href="/about" style="text-decoration: none;color: white;">
                                    <li class="text-center" style="margin-bottom: 10px">About Us</li>
                                </a>
                            </ul>
                        </li>
                    @else


                        <li class="text-center">
                            <a href="/about" style="text-decoration: none;color: white;">
                        About Us
                        </a></li>

                        <li class="text-center">
                            <a href="/contact" style="text-decoration: none;color: white;">
                        Contact Us
                        </a></li>

                        <li class="text-center">
                        <a href="/" style="text-decoration: none;color: white;">
                            Login</a></li>


                    @endif

                </ul>


                <form class="navbar-form navbar-inverse" action="/search" method="get">


                    <div style="width: 60%">
                    <div class="input-group" id="usernvbar_search">
                        <input type="text" class="form-control" placeholder="Search" name="keyword" value="@yield('searchkeyword')">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>

                    </div>

                </form>


            </div>

        </div>


    </nav>


</header><!-- header -->

