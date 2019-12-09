<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> MM Tour Guide </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('logo.png') }}">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('wizard/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('wizard/assets/css/gsdk-bootstrap-wizard.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('wizard/assets/css/demo.css') }}" rel="stylesheet" />
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('{{ asset('frontend/images/home_slider.jpg') }}')">
    <!--   Creative Tim Branding   -->
    <a href="{{ asset('') }}">
         <div class="logo-container">
            <div class="logo">
                <img src="{{ asset('logo.png') }}" class="img-fluid" style="width: 60px; height: 50px;">
            </div>
            <div class="brand">
                MM Tour Guide
            </div>
        </div>
    </a>

    <!--  Made With Get Shit Done Kit  -->
        <a href="{{ asset('') }}" class="made-with-mk">
            <div class="brand"> << </div>
            <div class="made-with"> Go Back <strong> HOME </strong></div>
        </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="blue" id="wizardProfile">
                    <form action="{{asset('register/tourism_register')}}" method="POST" enctype="multipart/form-data" id="myForm">
                    @csrf

                    <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                        <div class="wizard-header">
                            <h3>
                               <b>BUILD</b> YOUR PROFILE <br>
                               <small>This information will let us know more about you.</small>
                            </h3>
                        </div>

                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#about" data-toggle="tab">About</a></li>
                                <li><a href="#detail" data-toggle="tab"> Detail </a></li>
                                <li><a href="#citizencard" data-toggle="tab"> Citizen Card </a></li>
                                
                            </ul>

                        </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              
                                <div class="row">
                                    
                                    <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                  
                                    <div class="col-sm-4 col-sm-offset-1">
                                        <div class="picture-container">
                                            <div class="picture">
                                                <img src="{{ asset('wizard/assets/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview" title=""/>
                                                <input type="file" id="wizard-picture" name="profile">
                                            </div>
                                            <h6>Choose Picture</h6>
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label> Name <small>(required)</small></label>
                                            <input name="name" type="text" class="form-control" placeholder="Andrew..." value="{{ old('name') }}">

                                            <p style="color: red;"> {{$errors->first('name') }} </p>

                                        </div>

                                        <div class="form-group">
                                            <label>Email <small>(required)</small></label>
                                            <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
                                            <p style="color: red;"> {{$errors->first('email') }} </p>

                                        </div>

                                        

                                    </div>
                                    
                                  

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Password <small>(required)</small></label>
                                            <input name="password" type="password" class="form-control" placeholder="Enter Password">
                                        </div>
                                    </div>

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Confirm Password <small>(required)</small></label>
                                            <input name="password_confirmation" type="password" class="form-control" placeholder="Enter Confirm Password">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            
                            <div class="tab-pane" id="detail">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Where Are You From </h4>
                                    </div>
                                    
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <input type="radio" name="gender" value="Male" id="male">
                                            <label for="male"> Male </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="radio" name="gender" value="Female" id="female">
                                            <label for="female"> Female </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label> Nationality </label>
                                            <input type="text" class="form-control" placeholder="Enter Your Nationality" name="nationality">
                                        </div>
                                    </div>

                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="form-group">
                                            <label> Date Of Birth </label>
                                            <input type="date" class="form-control" name="dob">
                                        </div>
                                    </div>

                                    
                                    
                                </div>
                            </div>

                            <div class="tab-pane" id="citizencard">
                                <h4 class="info-text"> Citizen Card </h4>
                                <p class="text-center"> Please Upload 2 Slide Passport / NRC Photo </p>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                            <label> Select Your Country </label><br>
                                             <select name="country" class="form-control country">
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}" data-id="{{ $country->id }}" > {{ $country->name }} </option>

                                                @endforeach
                                                
                                            </select>
                                          </div>
                                    </div>


                                    <div class="col-sm-10 col-sm-offset-1 mt-3">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <input type="radio" name="cardtype" value="Passport" id="passport">
                                            <label for="passport"> Passport </label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="radio" name="cardtype" value="NRC" id="nrc">
                                            <label for="nrc"> NRC </label>
                                        </div>
                                    </div>

                                    

                                    <div class="col-sm-10 col-sm-offset-1 nrc_div mt-3">

                                        <div class="form-group">
                                            <label> NRC Card No </label>
                                            <input type="text" class="form-control" placeholder="Enter NRC"  name="nrc_card">
                                        </div>

                                    </div>

                                    <div class="passport_div mt-3">

                                        <div class="row">
                                            <div class="col-sm-5 col-sm-offset-1">
                                                <img src="" class="passport_cover mx-auto d-block img-fluid" style="width: 150px; height: 200px">
                                            </div>

                                            <div class="col-sm-5">

                                                <div class="form-group">
                                                    <label> Passport Card </label>
                                                    <input type="text" class="form-control" placeholder="Enter Passport Number"  name="passport_card">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label> Date Of Issue </label>
                                                    <input type="date" class="form-control" name="doi">
                                                </div>

                                                <div class="form-group">
                                                    <label> Date Of Expiry </label>
                                                    <input type="date" class="form-control" name="doe">
                                                </div>

                                            </div>


                                        </div>

                                    </div>


                                    


                                    

                                    <div class="col-sm-10 col-sm-offset-1 mt-5">

                                        <div class="form-group">
                                            <label> Card Photo</label>
                                            <input type="file" name="cardphotos[]" multiple>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd btn-sm' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd btn-sm' name='finish' value='Finish' />

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

</div>

</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('wizard/assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('wizard/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('wizard/assets/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="{{ asset('wizard/assets/js/gsdk-bootstrap-wizard.js') }}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
    <script src="{{ asset('wizard/assets/js/jquery.validate.min.js') }}"></script>

    <script type="text/javascript">

        passportcover();

        $('#myForm input').on('change', function() 
        {
            var cardtype = $('input[name=cardtype]:checked', '#myForm').val();

            if (cardtype == "Passport") 
            {
                passportcover();

                $(".passport_div").show();
                $(".nrc_div").hide();

            }

            else if(cardtype == "NRC")
            {
                $(".passport_div").hide();
                $(".nrc_div").show();
            }

            else
            {
                $(".passport_div").hide();
                $(".nrc_div").hide();
            }

            console.log(cardtype); 
        });
        
        function passportcover()
        {
            $('select.country').change(function() 
            {
                var countryId = $('select.country').find(':selected').data('id');

                console.log("Country : "+countryId);

                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                $.ajax({
                    type:'POST',
                    url:'countrysearch',
                    data:{countryId:countryId},
                    success:function(data)
                    {
                        console.log(data);

                        $(".passport_cover").attr('src',data);
                    }
                });

            });

        }
        


    </script>

</html>
