@extends ('user.masterlayout')


@section ('content')


    <div class="page">

        @include ('user.partials.navbar')

                <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-header">
                        <h1>Blog post title</h1>
                        <p>Posted by <span class="glyphicon glyphicon-user"></span> <a href="#">Reviewer</a> on <span class="glyphicon glyphicon-time"></span> Time Span</p>
                    </div>
                </div>
            </div>


            <!-- /.row -->

            <div class="row">
                <div class="col-md-9 col-sm-8">

                    <div class="text-center" >


                        <?php dd ($review_image_url);exit; ?>
                        <img src="{{ URL::asset($review_image_url) }}" alt="" style="width:100%;height:auto;">
                    </div>


                    <p class="lead">Lorem ipsum dolor sit amet consect etuer adipi scing elit sed diam nonummy nibh euismod tinunt ut laoreet dolore magna aliquam erat volut. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>
                    <p>Vivamus risus ex, varius et libero quis, placerat rhoncus mi. Aenean sit amet aliquam nibh. Aliquam tortor est, consequat vitae libero at, vehicula mattis tellus. In condimentum consequat tempor. Nullam at lorem semper, ultricies mi et, mollis turpis. Mauris ut leo ac magna dapibus luctus. Mauris mi nibh, ornare et ipsum vel, finibus molestie nulla. Nunc eleifend leo eget ipsum pellentesque, vel varius ipsum placerat. Mauris tincidunt sapien et efficitur commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec at pellentesque arcu. Pellentesque justo enim, porttitor a arcu non, mollis venenatis felis.</p>
                    <p>Praesent viverra pellentesque enim, vitae porta erat elementum quis. Maecenas posuere mattis velit rutrum iaculis. Duis non efficitur nibh. Aliquam laoreet risus a nulla auctor interdum. Ut cursus leo eu justo laoreet porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse vitae nisi dictum, vulputate odio sed, blandit tortor. Fusce eu turpis ut mi porta bibendum nec eu libero.</p>
                    <p>Praesent libero sem, feugiat dapibus mattis et, vehicula eu turpis. In vitae consequat leo, quis venenatis justo. Fusce auctor bibendum aliquet. Nullam eu mi lectus. Maecenas risus mauris, feugiat nec ullamcorper non, efficitur et elit. Sed porta tellus ut aliquam auctor. Vivamus id lectus sed tellus cursus sodales sit amet a velit.</p>
                    <p>Quisque eu aliquam leo. Sed feugiat nulla massa, a faucibus nulla sagittis eget. Donec ullamcorper tincidunt risus et pharetra. Vivamus tristique dui metus, vitae gravida nisl volutpat eu. Vivamus dapibus leo sit amet metus luctus dapibus. Vivamus sodales tempor elit, at pellentesque elit eleifend sit amet. Aliquam erat volutpat.</p>
                    <hr>

                    <!-- Comment form -->
                    @include('user.partials.articlecommentform')

                    <!-- Comments -->
                    <h3>Comments</h3>
                   @include('user.partials.commentbox')


                </div>


                <div class="col-md-3 col-sm-4">

                    <!-- Panel -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">About Reviewer</h4>
                        </div>
                        <div class="panel-body">
                            <p>Reviewer Description Reviewer Description Reviewer Description Reviewer Description
                                Reviewer Description Reviewer Description Reviewer Description Reviewer Description Reviewer Description</p>
                        </div>
                    </div>



                </div>



            </div>
            <!-- /.row -->


        </div>
        <!-- /.container-fluid -->

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