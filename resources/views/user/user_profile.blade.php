@extends ('user.masterlayout')


@section('custom-css')


    <style>
        .btn-file {
            position: relative;
            overflow: hidden;

        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        .form-group {

            padding-top: 5%;
        }

        #img-upload {
            width: 100%;
            height: auto;
        }
    </style>

@endsection

@section('content')

    <div class="page">

        @include('user.partials.navbar')


        <div class="well">
            @if($reviewer->isFollow($reviewer->id))
                <a href="/unfollow/{{$reviewer->username}}">
                    <button type="submit" class="btn btn-sm btn-primary"><b>Unfollow {{$reviewer->username}}</b></button>
                </a>
            @else
                <a href="/follow/{{$reviewer->username}}">
                    <button type="submit" class="btn btn-sm btn-primary"><b>Follow {{$reviewer->username}}</b></button>
                </a>
            @endif
        </div>


    </div>



@endsection