@extends ('user.masterlayout')


@section('custom-css')



@endsection

@section('content')

    <div class="page">

        @include('user.partials.navbar')

        <div class="container">

            <div class="row">
            <div class="well">

                <div class="text-center">
                    <img src="{{asset('storage/1497220379.jpg')}}" style="width: 150px;height: auto" class="img-circle">
                    <h3>Humza Waseem</h3>
                    <h5>@humzawaseem</h5>
                </div>

                </div>

                <div class="text-center">

                <h3 class="media-heading">Humza Waseem &nbsp;<small>Lahore</small></h3>
                    <h6><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;ceo@techtipsrneview.com</h6>
                <span><strong>Rank:</strong></span>

                <span class="label label-info">Category Type/Rank</span>

                </div>

                                <p class="text-left"><strong>Bio: </strong><br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                                <br>

                <p class="text-left"><strong>Recent Posts</strong><br>


                      </div>
                    </div>
                </div>





@endsection


@section('custom-script')


@endsection