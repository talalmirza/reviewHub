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

                <div class="col-md-4 col-sm-4 col-md-offset-1">

                    <h4 class="text-center">Recent Posts</h4>

                    <div class="row">


                        @foreach($reviews as $r)
                        <div class="list-group">
                            <a href="/review/{{$r->id}}" class="list-group-item active">


                                <h4 class="list-group-item-heading">{{$r->title}}</h4>

                                <p class="list-group-item-text">{{$r->caption}}</p>
                            </a>
                        </div>

                            @endforeach


                    </div>

                </div>
                <div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1">
                    <h4 class="text-center">Reviews Activity</h4>

                    <div class="row">

                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Review Name</h4>
                                <p class="list-group-item-text">Same Posts Content Yet to be generated</p>
                            </a>
                        </div>

                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Review Name</h4>
                                <p class="list-group-item-text">Same Posts Content Yet to be generated</p>
                            </a>
                        </div>

                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Review Name</h4>
                                <p class="list-group-item-text">Same Posts Content Yet to be generated</p>
                            </a>
                        </div>

                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Review Name</h4>
                                <p class="list-group-item-text">Same Posts Content Yet to be generated</p>
                            </a>
                        </div>

                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">Review Name</h4>
                                <p class="list-group-item-text">Same Posts Content Yet to be generated</p>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>



    </div>


    @endsection