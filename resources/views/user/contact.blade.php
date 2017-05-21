@extends('user.masterlayout')



@section('content')

    <div class="page">

        @include('user.partials.navbar')


<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
        <fieldset>

            <!-- Form Name -->
            <div class="text-center">
                <legend>How Can We Help You ... </legend>
            </div>
            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Phone #</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" placeholder="(+92) City Code - Number" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Address</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="address" placeholder="Address" class="form-control" type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">City</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="City" placeholder="city" class="form-control"  type="text">
                    </div>
                </div>
            </div>

            <!-- Select Basic -->

            <div class="form-group">
                <label class="col-md-4 control-label">State</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="state" class="form-control selectpicker" >
                            <option value=" " >Please select your state</option>
                            <option>Punjab</option>
                            <option>KPK (Formerly NWFP)</option>
                            <option >Balochistan</option>
                            <option >Sindh</option>


                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label">Request / Issue</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="comment" placeholder="Let us know in detail .... "></textarea>
                    </div>
                </div>
            </div>

            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>

        </fieldset>
    </form>
</div>


</div><!-- /.container -->


    </div>

    @endsection


@section('custom-script')

    <script>
    $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    feedbackIcons: {
    valid: 'glyphicon glyphicon-ok',
    invalid: 'glyphicon glyphicon-remove',
    validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
    first_name: {
    validators: {
    stringLength: {
    min: 2,
    },
    notEmpty: {
    message: 'Please supply your first name'
    }
    }
    },
    last_name: {
    validators: {
    stringLength: {
    min: 2,
    },
    notEmpty: {
    message: 'Please supply your last name'
    }
    }
    },
    email: {
    validators: {
    notEmpty: {
    message: 'Please supply your email address'
    },
    emailAddress: {
    message: 'Please supply a valid email address'
    }
    }
    },
    phone: {
    validators: {
    notEmpty: {
    message: 'Please supply your phone number'
    },
    phone: {
    country: 'US',
    message: 'Please supply a vaild phone number with area code'
    }
    }
    },
    address: {
    validators: {
    stringLength: {
    min: 8,
    },
    notEmpty: {
    message: 'Please supply your street address'
    }
    }
    },
    city: {
    validators: {
    stringLength: {
    min: 4,
    },
    notEmpty: {
    message: 'Please supply your city'
    }
    }
    },
    state: {
    validators: {
    notEmpty: {
    message: 'Please select your state'
    }
    }
    },
    zip: {
    validators: {
    notEmpty: {
    message: 'Please supply your zip code'
    },
    zipCode: {
    country: 'US',
    message: 'Please supply a vaild zip code'
    }
    }
    },
    comment: {
    validators: {
    stringLength: {
    min: 10,
    max: 200,
    message:'Please enter at least 10 characters and no more than 200'
    },
    notEmpty: {
    message: 'Please supply a description of your project'
    }
    }
    }
    }
    })
    .on('success.form.bv', function(e) {
    $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
    $('#contact_form').data('bootstrapValidator').resetForm();

    // Prevent form submission
    e.preventDefault();

    // Get the form instance
    var $form = $(e.target);

    // Get the BootstrapValidator instance
    var bv = $form.data('bootstrapValidator');



    // Use Ajax to submit form data
    $.post($form.attr('action'), $form.serialize(), function(result) {
    console.log(result);
    }, 'json');
    });
    });

    </script>



@endsection