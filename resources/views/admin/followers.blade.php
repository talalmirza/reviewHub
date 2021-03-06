@extends('admin.masterlayout')



@section('admin-content')


    <div class="page">

        <div class="container">

            @include('admin.admin_partials._sidebar')


            <h4>Followers</h4>
            <div class="tab-content">

                <div id="published" class="tab-pane fade in active">
                    <div class="row" style="margin-top:1%">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>


                                <tbody>

                                @foreach($f as $follower)

                                    <tr>
                                        <th scope="row">{{$loop->index+1 }}</th>
                                        <td>{{$follower->member->email }}</td>
                                        <td>{{$follower->member->username }}</td>

                                        <td>
                                            {{-- <form action="/review/{{$review->id}}" method="POST">
                                                 {{ csrf_field() }}
                                                 {{ method_field('DELETE') }}
                                                 <button type="submit" class="btn btn-danger">Delete</button>
                                             </form>
 --}}
                                            <a href="/follower/delete/{{$follower->member->id}}">
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </a>
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
    </div>
@endsection