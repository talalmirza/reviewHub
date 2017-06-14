@extends ('user.masterlayout')

@section ('custom-css')

    <style>
        @media only screen and (max-width: 767px) {

    #navtabs_row{

    margin-top:50px;

    }

    }


    </style>
    @endsection

@section ('content')


    <div class="page" >

        @include ('user.partials.navbar')

        <div class="container">

            <div class="row" id="navtabs_row">

                <ul class="nav nav-tabs nav-justified" style="margin:3% 0 3%">


                    <li role="presentation" class="active" ><a data-toggle="tab" href="#livefeed">Livefeed</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#subslist">Subscribed</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#category_list">Categories</a></li>

                </ul>
                <div class="tab-content">

                    {{------LIVEFEED------}}
                    <div id="livefeed" class="tab-pane fade in active">

                        <div class="container" >

                            <div class="row">
                                <div class="col-md-9 col-sm-8">

                                        @include ('user.partials.reviews')

                                </div>

                                <div class="col-md-3 col-sm-4 text-center" style="margin-top:10px;" >

                                    @include('user.partials.sidebarhomepage')

                                </div>

                            </div>
                        </div>
                    </div>

                    {{------SUBSCRIBED------}}
                    <div id="subslist" class="tab-pane fade">

                        <div class="container" >

                            <div class="row">
                                <div class="col-md-9 col-sm-8">

                                        @include ('user.partials.subreviews')

                                </div>
                                <div class="col-md-3 col-sm-4 text-center" style="margin-top:10px;" >

                                    @include('user.partials.sidebarhomepage')
                                </div>

                            </div>
                        </div>
                    </div>


                    {{------CATEGORIES------}}
                    <div id="category_list" class="tab-pane fade">

                        <div class="container" >

                            @include ('user.partials.categories')

                        </div>
                    </div>



                </div>
            </div>
            <br>
        </div>
    </div>
    @endsection


@section('custom-script')



 <script>
            var url = document.location.toString();

            if (url.match('#')) {
            $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
            } //add a suffix

            // Change hash for page-reload

            $('.nav-tabs a').on('shown.bs.tab', function (e) {
            window.location.hash = e.target.hash;
                window.scrollTo(0, 0);


            });

 </script>

    <script>
        $(function() {
            var hash = window.location.hash;
            hash && $('ul.nav a[href="' + hash + '"]').tab('show');

            $('.nav-tabs a').click(function (e) {
                $(this).tab('show');
                var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                window.location.hash = this.hash;
                $('html,body').scrollTop(scrollmem);
            })
        });


    </script>

 <script>
     var token = '{{ Session::token() }}';
     var urlLike = '{{ route('like') }}';
 </script>



    @endsection