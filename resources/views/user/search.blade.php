@extends ('user.masterlayout')


@section('custom-css')
<style>

ul.nav{
 background-color: #0F0F0F;
}
li#dash{
    width: 101%;
    text-align:center;
}
a#sub:visited{
    border-color: rgb(1, 1, 41);
    background-color: rgb(1, 1, 41);
    color: white;
    border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;
}

a#everything:hover{
    border-color: rgb(1, 1, 41);
    background-color:rgb(1, 1, 41);
    color:white;
    border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;
}
img#food{
    border-radius:50%;
}
</style>
@endsection

@section ('content')
    @include ('user.partials.navbar')

        <div class="container" style="background-color: white">
            <div class="row">
                <div class="row"><h1>Search results for "Ali"</h1></div>
                <div class="row">
                    <div class="col-md-2 col-sm-2" style="background-color: #0F0F0F; padding-top: 20px">
                        <div class="row" id="navtabs_row" style="background-color: #0F0F0F;">

                            <div class="col-md-12 col-sm-12" style="padding-bottom: 20px;padding-left: 0px;padding-right: 0px;">
                                <ul class="nav nav-tabs nav-stacked" id="nav"style="background-color: #0F0F0F;border-bottom: 0px">
                                    <li role="presentation" id="dash" class="active"><a class="text-centre" style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;" id="everything" data-toggle="tab" href="#home">Everything</a></li>{{--<span id="span" style="font-size:small; left:47%" class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>--}}
                                    <li role="presentation" id="dash">               <a style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;" id="sub"data-toggle="tab" href="#subslist">Posts</a></li>{{--<span id="span" style="font-size: small; left:68%" class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>--}}
                                    <li role="presentation" id="dash">               <a style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;"id="sub" data-toggle="tab" href="#category_list">Tags</a></li>{{--<span id="span" style="font-size: small; left:73%" class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>--}}
                                </ul>
                             </div>

                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="tab-content">


                            <div id="home" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12" style="margin-bottom: 30px;">
                                    <!-- Media middle -->
                                    <div class="media">

                                        <div class="media-left media-middle">

                                            <img src="images/vectors/12-512.png" class="media-object" style="width:150px;height:auto;">

                                        </div>

                                        <div class="media-body">

                                            <h4 class="media-heading">Live Feeds</h4><b>Time Stamp</b> &nbsp;<a><b>Feeds</b></a>  
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                                            <div>
                                                <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;

                                            </div>


                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <hr style="border-top:5px solid #eee">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <img src="images/food.png"id="food" class="media-object img-rounded" style="width:150px;height:auto;">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Category</h4><b>food</b> &nbsp;<a><b>Tikka</b></a>  
                                                <p>Food was amazing ! we will visit again.</p>
                                                <div>
                                                    <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--@include ('user.partials._postbox')--}}     

                            <div id="category_list" class="tab-pane fade in fixed-bottom">

                                <div class="col-md-12 col-sm-12" style="margin-bottom: 30px;">
                                    <!-- Media middle -->
                                    <div class="media">

                                        <div class="media-left media-middle">

                                            <img src="images/vectors/12-512.png" class="media-object" style="width:150px;height:auto;">

                                        </div>

                                        <div class="media-body">

                                            <h4 class="media-heading">Tags</h4><b>Time Stamp</b> &nbsp;<a><b>Tags</b></a>  
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                                            <div>
                                                <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div id="subslist" class="tab-pane fade in">

                                <div class="col-md-12 col-sm-12" style="margin-bottom: 30px;">
                                    <!-- Media middle -->
                                    <div class="media">

                                        <div class="media-left media-middle">

                                            <img src="images/vectors/12-512.png" class="media-object" style="width:150px;height:auto;">

                                        </div>

                                        <div class="media-body">

                                            <h4 class="media-heading">Posts</h4><b>Time Stamp</b> &nbsp;<a><b>Posts</b></a>  
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                                            <div>
                                                <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>

   {{-- <div class="container">
        <div class="row">
            <div class="row"><h1>Search results for "Ali"</h1></div>
            <div class="row">
                <div class="col-md-2 col-sm-2" style="background-color: #0F0F0F;border-radius: 15px;">
                    <div class="row" id="navtabs_row" style="background-color: #0F0F0F;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12"> <h3 style="color:white;padding-left:  30px">You want?</h3></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12" style="padding-bottom: 20px;">
                                <ul class="nav nav-tabs nav-stacked" id="nav"style="background-color: #0F0F0F;border-bottom: 0px">
                                    <li role="presentation" id="dash"class="active" ><a style="border-top-width: 0px;border-radius: 15px;border-left-width: 0px;" id="everything" data-toggle="tab" href="#home">Everything<span id="span" style="font-size:  small; left:52%" class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></a></li>
                                    <li role="presentation"id="dash"><a style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;" id="sub"data-toggle="tab" href="#subslist">Posts<span id="span" style="font-size: small; left:70%" class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></a></li>
                                    <li role="presentation"id="dash"><a style="border-top-width: 0px;border-radius: 25px;border-left-width: 0px;"id="sub" data-toggle="tab" href="#category_list">Tags<span id="span" style="font-size: small; left:73%" class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10">
                    <div class="tab-content">


                        <div id="home" class="tab-pane fade in active">
                            <div class="col-md-12 col-sm-12" style="margin-bottom: 30px;">
                                <!-- Media middle -->
                                <div class="media">

                                    <div class="media-left media-middle">

                                        <img src="images/vectors/12-512.png" class="media-object" style="width:150px;height:auto;">

                                    </div>

                                    <div class="media-body">

                                        <h4 class="media-heading">Live Feeds</h4><b>Time Stamp</b> &nbsp;<a><b>Feeds</b></a>  
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                                        <div>
                                            <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;

                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>


                        <div id="subslist" class="tab-pane fade in fixed-bottom">

                            <div class="col-md-12 col-sm-12" style="margin-bottom: 30px;">
                                <!-- Media middle -->
                                <div class="media">

                                    <div class="media-left media-middle">

                                        <img src="images/vectors/12-512.png" class="media-object" style="width:150px;height:auto;">

                                    </div>

                                    <div class="media-body">

                                        <h4 class="media-heading">Review Name</h4><b>Time Stamp</b> &nbsp;<a><b>Reviewer Name</b></a>  
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                                        <div>
                                            <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>



                        <div id="category_list" class="tab-pane fade in">

                            <div class="col-md-12 col-sm-12" style="margin-bottom: 30px;">
                                <!-- Media middle -->
                                <div class="media">

                                    <div class="media-left media-middle">

                                        <img src="images/vectors/12-512.png" class="media-object" style="width:150px;height:auto;">

                                    </div>

                                    <div class="media-body">

                                        <h4 class="media-heading">Posts</h4><b>Time Stamp</b> &nbsp;<a><b>Posts</b></a>  
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                                        <div>
                                            <a><i class="fa fa-2x fa-thumbs-up"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a><i class="fa fa-2x fa-share"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                                            <a><i class="fa fa-2x fa-comment"></i></a>  &nbsp;&nbsp;

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection

