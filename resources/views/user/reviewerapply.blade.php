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

        #img-upload{
            width: 100%;
        }

        @media only screen and (min-width: 768px) {
            #img-upload {

                width:100%;
                height:auto;
            }


            #avatar_button{

                padding-left: 25%;
            }
        }


        @media only screen and (max-width: 767px) {
            #img-upload {

                width:50%;
                height:auto;
            }


        }




    </style>

@endsection

@section('content')

    <div class="page">

        <header class="header8">

            <div class="top_menubar row">


                <div class="col-md-11 col-sm-11 col-xs-11">
                    <div style="float:right;">
                        <a class="btn btn-primary" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                        <a class="btn btn-primary" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
                    </div>

                </div>

            </div>




            @include ('user.partials.modal')
            @include ('user.partials.mainbanner')

        </header>


        <div class="container" id="reviewer_apply">



            <div class="row">



                <div class="col-md-8 col-md-offset-2">
                    <form action="" id="" method="post" onsubmit="" style="margin-bottom:5%">
                        <div class="row" >


                            <div class="row" style="margin-top:25px;">

                                <div class="col-md-7 col-sm-6">

                                    <div class="text-center">
                                        <div class="well well-sm" style="background-color:#337ab6;color:white;border-radius: 15px;">
                                            <h4><i>Reviewer Application</i></h4>
                                        </div>
                                    </div>

                                    <div style="padding-top:10px;">
                                    <h5><i>Want to be part of ReviewHub ? An amazing portal where experienced writers share their reviews regarding different
                                    things including food, technology, entertainement and much more for the people of Pakistan ... </i></h5>

                                     </div>
                                </div>

                                <div class="col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1 text-center">



                                    <div class="form-group">
                                        <a href="#"> <img id='img-upload' src="/images/avatar.png"> </a>

                                    </div>



                                    <div class="input-group col-md-2 col-sm-2" id="avatar_button">
                                    <span class="input-group-btn ">
                                        <span class="btn btn-default btn-file">Choose Avatar<input type="file" id="imgInp"></span>
                                    </span>
                                    </div>



                                </div>

                            </div>



                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Usernname</label>
                                    <input class="form-control" type="text" name="username" id="username">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Password</label>
                                    <input  class="form-control" type="password" name="password" id="password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Confirm Password</label>
                                    <input  class="form-control" type="password" name="password" id="password">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Email</label>
                                    <input  class="form-control" type="email" name="email" id="email">
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-md-6 col-sm-6 form-group">

                                    <label>Region </label>
                                    <select class="form-control" id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
                                        <option>Region</option>
                                        <option>Balochistan</option>
                                        <option>Punjab</option>
                                        <option>KhyberPakhtunkhwa</option>
                                        <option>Sindh</option>
                                    </select>

                                </div>

                                <div class="col-md-6 sol-sm-6 form-group">
                                    <label>City</label>
                                    <select style="height: 34px;" class="form-control" id="citySelect" size="1">
                                        <option>Choose City</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-5 form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" name="contact" id="contact">
                                </div>

                                <div class="col-md-4 form-group">


                                    <label>Gender</label>
                                    <div class="form-control">
                                        Male&nbsp;&nbsp;<input type="radio"  name="gender" id="gender1" >
                                        Female&nbsp;&nbsp;<input type="radio" name="gender" id="gender">
                                    </div>


                                </div>

                                <div class="col-md-3 form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control">

                                </div>

                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Tell us about yourself</label>
                                    <textarea class="form-control" name="description" placeholder="Enter description here"></textarea>
                                </div>

                            </div>

                            <br>


                            <div style="float:right;">
                                <button type="submit" class="btn btn-success">Apply</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>
        </div>




    </div>

    </div>




@endsection


@section('custom-script')
    <script>
        $(document).ready( function() {
            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
            });

            $('.btn-file :file').on('fileselect', function(event, label) {

                var input = $(this).parents('.input-group').find(':text'),
                        log = label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

            });
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
    <script type="text/javascript">
        var citiesByState = {

            Balochistan: ["Quetta","Khuzdar","Turbat","Chaman","Hub","Sibi","Zhob","Gwadar","Dera Murad Jamali","Dera Allah Yar","Usta Mohammad","Loralai","Pasni","Kharan","Mastung","Nushki","Kalat"],
            Punjab: ["AhmedNagerChatha","Attock","Bahawalnagar","Bahawalpur","Burewala","Chillianwala","Chakwal","Chichawatni","Chiniot","DeraGhaziKhan","Faisalabad","Gujranwala","Gujrat","Hafizabad","Jhelum","Kalabagh","KarorLalEsan","Kasur","Khanpur","Lahore","Mianwali","Multan","Muzaffargarh","Narowal","Okara","RahimYarKhan","Rawalpindi","Sadiqabad","Sahiwal","Sargodha","Shakargarh","Sheikhupura","Sialkot","Sohawav","Talagang","Taxila","obaTekSingh","Vehari","WahCantonment","Wazirabad"],
            KhyberPakhtunkhwa:["Abbottabad","Adezai","Alpuri","Ayubia","Banda Daud Shah","Bannu","Batkhela","Battagram","Birote","Chakdara","Charsadda","Chitral","Daggar","Dargai","Darya Khan","Dera Ismail Khanv","Dir","Drosh","Hangu","Haripur","Karak","Kohat","Lakki Marwat","LatamberMadyan","Mansehra","Mardan","Mastuj","Mingora","Nowshera","Paharpur","Peshawar","Saidu Sharif","Swabi","Swat","Tangi","Tank","Thall","Timergara","Tordher"],
            Sindh:["Badin","Bhirkan","Bhiria City","Bhiria Road","Rajo Khanani","Chak","Dadu","Digri","Diplo","Dokri","Ghotki","Haala","Hyderabad","Islamkot","Jacobabad","Jamshoro","Jungshahi","Kandhkot","Kandiaro","Karachi","Kashmore","Keti Bandar","Khadro","Khairpur","Khipro","Kotri","Larkana","Matiari","Mehar","Mirpur Khas","Mithani","Mithi","Mehrabpur","Moro","Nagarparkar","Naudero","Naushahro Feroze","Naushara","Nawabshah","Qambar","Qasimabad","Ranipur","RatoderovRohri","Sakrand","Sanghar","Shahbandar","Shahdadkot","Shahdadpur","Shahpur Chakar","Shikarpaur","Sinjhoro","Sukkur","Tangwani","Tando Adam Khan","Tando Allahyar","Tando Muhammad Khan","Thatta","Thari Mirwah","Umerkot","Warah"],
        }
        function makeSubmenu(value) {
            if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
            else {
                var citiesOptions = "";
                for(cityId in citiesByState[value]) {
                    citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
                }
                document.getElementById("citySelect").innerHTML = citiesOptions;
            }
        }
        function displaySelected() {
            var country = document.getElementById("countrySelect").value;
            var city = document.getElementById("citySelect").value;
            alert(country+"\n"+city);
        }
        function resetSelection() {
            document.getElementById("countrySelect").selectedIndex = 0;
            document.getElementById("citySelect").selectedIndex = 0;
        }
    </script>

    <script>

        $('html, body').animate({ scrollTop: $('#reviewer_apply').offset().top }, 'slow');

    </script>


@endsection