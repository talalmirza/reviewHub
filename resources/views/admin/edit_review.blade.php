@extends('admin.masterlayout')



@section('custom-css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" >



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

        .form-group{

            padding-top: 5%;
        }

        #img-upload{
            width: 100%;
            height:auto;
        }
    </style>



    @endsection

@section('admin-content')

    <div id="page" class="page">


        <div class="container-fluid">

            <div class="text-center">
                <h4><div class="well well-sm" style="background-color:rgba(51,122,183,1.00);color:white;">Edit Post</div></h4>
            </div>

            <div class="row dashrow1">


                <form action="/review/{{$review->id}}" enctype="multipart/form-data" method="POST">

                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                <div class="col-md-9 col-sm-8">

                    <div style="margin-bottom:10px;">

                        <input type="text" class="form-control" placeholder="Title of article/review ..." name="title" id="title" value="{{$review->title}}">
                    </div>

                    <textarea name="body" id="body">{!! $review->body !!}</textarea>

                    <div style="margin-top:10px;">

                        <textarea class="form-control" placeholder="Caption/Excerpt" name="caption" id="caption" rows=2>{{$review->caption}}</textarea>
                    </div>


                </div>


                    <div class="col-md-3 col-sm-4">

                        <div class="text-center" style="margin-top:10px;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Post Options</div>

                                <div class="panel-body">

                                    <div class="form-group">

                                        <label>Reviewer</label>
                                        <input class="form-control" type="text" placeholder="Reviewer Name" name="reviewer_name" value="{{ $review->reviewer->first_name.' '.$review->reviewer->last_name }}" disabled>
                                        <input class="form-control" type="hidden" name="reviewerid" value="{{ $review->reviewer->id}}">
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Select list:</label>
                                        <select class="form-control" name="category_id" style="margin-left: 5%;width: 90%;">
                                            <option value="{{$review->category->id}}">{{$review->category->name}}</option>

                                          @foreach( $categories as $category)

                                              @if($review->category_id == $category->id)
                                                  @continue;
                                                @endif

                                                <option value="{{ $category->id }}"> {{ $category->name }} </option>

                                              @endforeach

                                        </select>

                                    </div>

                                    <hr>

                                    <div class="form-group">

                                        <label>Enter Tags</label>
                                        <input class="form-control" type="text" placeholder="Enter Comma Separated Tags" name="post_tags" style="margin-left:5%;width: 90%;" value="@foreach($tags as $tag){{$tag->name.','}}@endforeach">

                                    </div>

                                    <hr>



                                    <label>Select Feature Image</label>
                                    <div class="text-center"  style="margin-bottom: 10px;">

                                        <div class="form-group ">
                                            <a href="#"><img id='img-upload' name='img-upload' src="{{  asset($review->featureimage) }}" style="width:70%;height: auto;"></a>

                                        </div>

                                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-primary browse btn-file " style="border-radius: 12px;">

                                      <i class="glyphicon glyphicon-search"></i> Browse <input type="file" id="imgInp" name="imgInp" accept="image/*">
                                 </span>
                             </span>
                                        </div>



                                </div>





                                </div>

                            </div>

                        </div>






                    <button type="submit" class="btn btn-block btn-success">Publish</button>

                </form>
            </div>


            </div>




    </div>
    <!-- /#page -->


@endsection



@section('custom-script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/js/froala_editor.pkgd.min.js"></script>

    <script> $(function() { $('#body').froalaEditor({
            height: 300
        }) });

    </script>


    <script>
        $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

//            $('.btn-file :file').on('fileselect', function(event, label) {
//
//                var input = $(this).parents('.input-group').find(':text'),
//                        log = label;
//
//                if( input.length ) {
//                    input.val(log);
//                } else {
//                    if( log ) alert(log);
//                }
//
//            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#img-upload').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function(){
                readURL(this);
            });
        });
    </script>

    @endsection
