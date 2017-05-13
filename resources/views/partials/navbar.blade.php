<!-- header -->
<header class="header8">

    <nav role="navigation" class="navbar navbar-default">

        <div class="col-md-1 col-sm-1">

        </div>

        <div class="col-md-5 col-sm-5 col-xs-5 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
            <div class="input-group col-md-12 col-sm-12 ">

                <input type="text" class="form-control"  placeholder="Search">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>

            </div>
        </div>




        <div class="col-md-4 col-sm-4 col-xs-5">


            <!-- Split button -->
            <div class="btn-group" style="float:right;">
                <button type="button" class="btn btn-primary"><span class="fa fa-user">&nbsp;User</span></button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Logout</a>
                    </li>
                    <li><a href=' {{ url ('profile') }} ' >Profile</a>
                    </li>
                    <li><a href="#">Settings</a>
                    </li>

                </ul>
            </div>








        </div>

    </nav>



</header><!-- header -->