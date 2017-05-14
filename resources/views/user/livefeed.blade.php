@extends ('user.masterlayout')



@section ('content')


    <div class="page">

        @include ('user.partials.navbar')


        <div class="container">

            <div class="row">

                <ul class="nav nav-tabs" style="margin:3% 0 3%">

                    <li role="presentation" class="active"><a data-toggle="tab" href="#livefeed">Livefeed</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#subslist">Subscribed</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#category_list">Categories</a></li>

                </ul>
                <div class="tab-content">


                    <div id="livefeed" class="tab-pane fade in active">

                        <div class="container" >

                            <div class="row">


                                @include ('user.partials.postbox')
                                @include ('user.partials.postbox')
                                @include ('user.partials.postbox')

                            </div>
                        </div>
                    </div>


                    <div id="subslist" class="tab-pane fade in">

                        <div class="container" >

                            <div class="row">


                                @include ('user.partials.postbox')
                                @include ('user.partials.postbox')
                                @include ('user.partials.postbox')

                            </div>
                        </div>
                    </div>



                    <div id="category_list" class="tab-pane fade in">

                        <div class="container" >

                            @include ('user.partials.categories')

                        </div>
                    </div>



                </div>
            </div>
            <br>
        </div>

        <br>

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
        $(function(){
            var hash = window.location.hash;
            hash && $('ul.nav a[href="' + hash + '"]').tab('show');

            $('.nav-tabs a').click(function (e) {
                $(this).tab('show');
                var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                window.location.hash = this.hash;
                $('html,body').scrollTop(scrollmem);
            })


    </script>

    @endsection