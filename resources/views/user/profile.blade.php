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

        .form-group{

            padding-top: 5%;
        }

        #img-upload{
            width: 100%;
            height:auto;
        }
    </style>

@endsection

@section('content')

    <div class="page">

        @include('user.partials.navbar')


        <br><br>
        <div class="container">
            <div style="padding-left: 5%">
                <h2>Edit your Profile {{$member->first_name}}</h2>
            </div>

            <hr>
            <div class="row">


                <!-- left column -->
                <div class="col-md-3 ">

                    <div class="text-center"  style="margin-bottom: 10px;">

                        <div class="form-group ">
                            <a href="#"><img id='img-upload' src="{{$member->avatar}}" class="img-thumbnail"></a>

                        </div>

                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-primary browse btn-file " style="border-radius: 12px;">

                                      <i class="glyphicon glyphicon-search"></i> Browse <input type="file" id="imgInp">
                                 </span>
                             </span>
                        </div>


                    </div>


                </div>


                <!-- edit form column -->
                {{--<div class="alert alert-info alert-dismissable">--}}
                {{--<a class="panel-close close" data-dismiss="alert">×</a>--}}
                {{--<i class="fa fa-coffee"></i>--}}
                {{--This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
                {{--</div>--}}

                    <br>

                    <form action="">
                        <div class="row">


                            <div class="form-group">
                                <label for="username">Username</label>
                                <input disabled type="text" class="form-control" id="username" value="{{$member->username}}" name="username">
                            </div>


                            <div class="row">

                                {{--Left form column--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">First name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$member->first_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd">New password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Update Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{$member->email}}">
                                    </div>

                                </div>

                                {{--Right form column--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Last name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{$member->last_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd">Retype new password</label>
                                        <input type="password" class="form-control" id="retypepassword" name="retypepassword">
                                    </div>
                                </div>
                            </div>




                        </div>
                        {{--End of form row1--}}

                        {{--Start of form row2--}}
                        <div class="row">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Region/Province</label>

                                        <select id="countrySelect" size="1" class="form-control" onclick="makeSubmenu(this.value)" name="region" >
                                            <option value="{{$member->region}}">{{$member->region}}</option>
                                            <option>Balochistan</option>
                                            <option>Punjab</option>
                                            <option>KhyberPakhtunkhawa</option>
                                            <option>Sindh</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Select City</label>
                                        <select id="citySelect" size="1" class="form-control" name="city" value="{{$member->city}}">
                                            <option {{$member->city}}>{{$member->city}}</option>
                                        </select>

                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <label for="gender">Select Gender</label>

                                <div class="form-control form-inline">

                                    <input type="radio" id="gender" value="1" <?php echo ($member->gender==1)? 'checked':'' ?> name="gender">&nbsp;&nbsp;Male&nbsp;&nbsp;
                                    <input type="radio" id="gender" value="0" <?php echo ($member->gender==0)? 'checked':'' ?> name="gender">&nbsp;&nbsp;Female

                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="bio">Tell us about your self</label>
                                        <textarea name="bio" class="form-control" rows="4">{{$member->bio}}</textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="gender">Enter your Contact No.</label>
                                        <input type="text" class="form-control" id="contact" name="contact" value="{{$member->contact_number}}">
                                    </div>
                                </div>

                            </div>

                            <br>
                            <br>
                            <div >
                                <button type="submit" class="btn btn-block btn-primary"><b>Save Changes</b></button>
                            </div>

                        </div>
                        {{--End of form row2--}}

                    </form>

                </div>
            </div>
        </div>
        <hr>



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
            KhyberPakhtunkhawa:["Abbottabad","Adezai","Alpuri","Ayubia","Banda Daud Shah","Bannu","Batkhela","Battagram","Birote","Chakdara","Charsadda","Chitral","Daggar","Dargai","Darya Khan","Dera Ismail Khanv","Dir","Drosh","Hangu","Haripur","Karak","Kohat","Lakki Marwat","LatamberMadyan","Mansehra","Mardan","Mastuj","Mingora","Nowshera","Paharpur","Peshawar","Saidu Sharif","Swabi","Swat","Tangi","Tank","Thall","Timergara","Tordher"],
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

@endsection