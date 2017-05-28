@extends('admin.masterlayout')




@section('admin-content')

    <div id="page" class="page">



        <div class="container">

            <div class="row dashrow1">


               @include('admin.admin_partials._sidebar')


                <div class="col-md-10 col-sm-10">

                    <div class="row">

                        <h4> &nbsp&nbsp Published Reviews &nbsp&nbsp <a href="{{ url ('newpost') }}" style="color:white"><button type="button" class="btn btn-primary">New Review</button></a> </h4>


                    </div>

                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default">All</button>
                                <button type="button" class="btn btn-default">Published</button>
                                <button type="button" class="btn btn-default">Draft</button>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">


                            <div class="input-group col-md-9 col-sm-9" id="sm_searchbar" style="float:right">

                                <input type="text" class="form-control"  placeholder="Search">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>

                            </div>



                        </div>

                    </div>

                    <!-- poststable row-->

                    <div class="row" style="margin-top:1%">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Timestamp</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>

            </div>
        </div>


        <div class="wrapperDark footer_text">

            <div class="container divider6">

                <div class="col-md-12">

                    <h5 class="text-center" style="color:white;"> COPYRIGHTS RESERVED - REVIEWHUB 2017 </h5>

                </div><!-- /.col -->

            </div><!-- /.container -->

        </div>

    </div><!-- /#page -->


@endsection