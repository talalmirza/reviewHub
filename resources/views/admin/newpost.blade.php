@extends('admin.masterlayout')



@section('custom-css')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.6.0/css/froala_style.min.css" rel="stylesheet" type="text/css" >

    @endsection

@section('admin-content')

    <div id="page" class="page">


        <div class="container-fluid">

            <div class="text-center">
                <h4><div class="well well-sm" style="background-color:rgba(51,122,183,1.00);color:white;">New Post</div></h4>
            </div>

            <div class="row dashrow1">


                <div class="col-md-9 col-sm-8">

                    <div style="margin-bottom:10px;">

                        <input type="text" class="form-control" placeholder="Title of article/review ..." name="review_title">
                    </div>

                    <textarea name="review_content" id="review_content"></textarea>

                    <div style="margin-top:10px;">

                        <textarea class="form-control" placeholder="Caption/Excerpt" name="review_caption" id="review_caption" rows=2></textarea>
                    </div>


                </div>

                <div class="col-md-3 col-sm-4">

                    <div class="text-center" style="margin-top:10px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Post Options</div>

                            <div class="panel-body">

                                <div class="form-group">

                                    <label>Reviewer</label>
                                    <input class="form-control" type="text" placeholder="Review Name" name="post_tags" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="categories">Select list:</label>
                                    <select class="form-control" id="categories" >
                                        <option>Select Category</option>
                                        <option>Food</option>
                                        <option>Mobile</option>
                                        <option>Computer</option>
                                    </select>
                                </div>


                                <hr>
                                <div class="form-group">

                                    <label>Enter Tags</label>
                                    <input class="form-control" type="text" placeholder="Enter Comma Separated Tags" name="post_tags">
                                </div>

                                <hr>

                                <button type="submit" class="btn btn-success">Publish</button>
                                <button type="submit" class="btn btn-primary">Save Draft</button>


                            </div>

                        </div>

                    </div>

                </div>

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

    <script> $(function() { $('#review_content').froalaEditor({
            height: 300
        }) }); </script>

    @endsection
