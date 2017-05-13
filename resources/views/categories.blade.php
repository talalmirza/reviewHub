@extends ('masterlayout')



@section ('content')


    <div class="page">

        @include ('partials.navbar')


        <div class="container">

            <div class="row">

                <ul class="nav nav-tabs" style="margin:3% 0 3%">

                    <li role="presentation" class="active"><a data-toggle="tab" href="#livefeed">Livefeed</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#subslist">Subscribed</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#category_list">Categories</a></li>

                </ul>
                <div class="tab-content">


                    <div id="livefeed" class="tab-pane fade in ">

                        <div class="container" >

                            <div class="row">


                                @include ('partials.postbox')
                                @include ('partials.postbox')
                                @include ('partials.postbox')

                            </div>
                        </div>
                    </div>


                    <div id="subslist" class="tab-pane fade in">

                        <div class="container" >

                            <div class="row">


                                @include ('partials.postbox')
                                @include ('partials.postbox')
                                @include ('partials.postbox')

                            </div>
                        </div>
                    </div>



                    <div id="category_list" class="tab-pane fade in active">

                        <div class="container" >

                            @include ('partials.categories')

                        </div>
                    </div>



                </div>
            </div>
            <br>
        </div>

        <br>

@endsection