@extends('admin.masterlayout')




@section('admin-content')

    <div id="page" class="page">



        <div class="container">

            <div class="row dashrow1">


               @include('admin.admin_partials._sidebar')


                <div class="col-md-10 col-sm-12">

                    <div class="row">

                        <h4> &nbsp&nbsp Published Reviews &nbsp&nbsp <a href="{{url('review/create')}}" style="color:white"><button type="button" class="btn btn-primary">+ New Review</button></a> </h4>


                    </div>

                    <div class="row">

                        <div class="col-md-6 col-sm-12">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-success">Published</button>
                                <button type="button" class="btn btn-danger">Deleted</button>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">


                            <div class="input-group col-md-9 col-sm-9" id="sm_searchbar" style="float:right">

                                <input type="text" class="form-control"  placeholder="Search">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>

                            </div>



                        </div>

                    </div>

                    <!-- poststable row-->

                    <div class="row" style="margin-top:1%">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Reviewer</th>
                                    <th>Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>


                                <tbody>

                                @foreach($reviews as $review)

                                <tr>
                                    <th scope="row">{{$review->id }}</th>
                                    <td>{{$review->title }}</td>
                                    <td>{{$review->category->name }}</td>
                                    <td>{{$review->reviewer->first_name }}</td>
                                    <td>{{$review->created_at }}</td>
                                    <td><a href="/review/{{$review->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a></td>
                                        <td>
                                        <form action="/review/{{$review->id}}" method="POST">

                                            {{ csrf_field() }}

                                            {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                    </td>

                                </tr>

                                @endforeach

                                </tbody>

                            </table>

                        </div>
                    </div>



                </div>

            </div>
        </div>




    </div><!-- /#page -->


@endsection