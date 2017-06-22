@extends('admin.masterlayout')




@section('admin-content')

    <div id="page" class="page">

        <div class="container" >

            <div class="row">
                <div class="text-center custom-heading" >
                    <h4 style="color:white;"><em><strong>Welcome to your ReviewHub Dashboard</strong></em></h4>
                </div>

            </div>


            <div class="row dashrow1">


                @include ('admin.admin_partials._sidebar')

                <div class="col-md-8 col-sm-8 col-md-offset-1">

                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <h4 class="text-center">Recent Posts</h4>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <h4 class="text-center">Recent Comments</h4>
                        </div>

                    </div>

                    <div class="row">
                        @foreach($reviews as $review)
                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                @include('admin.admin_partials._review')                            </div>

                            <div class="col-md-6 col-sm-6">
                                @include('admin.admin_partials._comment')
                            </div>

                        </div>
                        @endforeach

                    </div>

                </div>


            </div>
        </div>



    </div>


    @endsection