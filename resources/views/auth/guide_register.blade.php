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

    {{-- multiple image display --}}
    <link href="{{ asset('multiple/imageuploadify.min.css')}}" rel="stylesheet">


    <style type="text/css">
        
        .nopad 
        {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        /*image gallery*/
        .image-checkbox {
            cursor: pointer;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border: 4px solid transparent;
            margin-bottom: 0;
            outline: 0;
        }
        .image-checkbox input[type="checkbox"] {
            display: none;
        }

        .image-checkbox-checked {
            border-color: #4783B0;
        }
        .image-checkbox .fa {
            position: absolute;
            color: #4A79A3;
            background-color: #fff;
            padding: 10px;
            top: 0;
            right: 0;
        }
        .image-checkbox-checked .fa {
            display: block !important;
        }

    </style>
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
                    <form action="{{asset('register/guide_register')}}" method="POST" enctype="multipart/form-data">
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
                                <li><a href="#address" data-toggle="tab">Address</a></li>
                                <li><a href="#license" data-toggle="tab"> Guide License </a></li>
                                
                                <li><a href="#language" data-toggle="tab">Language</a></li>

                                

                                <li><a href="#adventure" data-toggle="tab">Adventure</a></li>
                                
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
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4 col-sm-offset-2">
                                                <input type="radio" name="gender" value="Male" checked="" id="male">
                                                <label for="male"> Male </label>
                                        </div>
                                        <div class="col-sm-4">
                                                <input type="radio" name="gender" value="Female" id="female">
                                                <label for="female">Female</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-7 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="5h Avenue" name="address">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="242" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                         <div class="form-group">
                                            <label> Select Your Division </label><br>
                                             <select name="division" class="form-control division">
                                                @foreach($divisions as $division)
                                                    <option value="{{ $division->id }}" data-id="{{ $division->id }}"> {{ $division->name }} </option>

                                                @endforeach
                                                
                                            </select>
                                          </div>
                                    </div>

                                    <div class="col-sm-5 ">
                                         <div class="form-group">
                                            <label>CV</label>
                                            <input type="file" name="cv">
                                          </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="tab-pane" id="license">
                                <h4 class="info-text"> Guide License </h4>
                                <p class="text-center"> Please Upload 2 Slide License Photo </p>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1">

                                        <div class="form-group">
                                            <label> License </label>
                                            <input type="text" class="form-control" placeholder="G(MDY)-0250"  name="license">
                                        </div>

                                    </div>

                                    <div class="col-sm-10 col-sm-offset-1">

                                        <div class="form-group">
                                            <label> License Card Photo</label>
                                            <input type="file" name="licensephotos[]" multiple>
                                        </div>

                                    </div>

                                </div>
                            </div>


                            

                            <div class="tab-pane" id="language">
                                <h4 class="info-text"> What are you skills? (checkboxes) </h4>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1">

                                        @foreach($languages as $language)

                                        <div class="col-sm-3">
                                            <div class="choice" data-toggle="wizard-checkbox">
                                                <input type="checkbox" name="languages[]" value="{{ $language->id }}">
                                                <div class="icon">
                                                    <img src="{{ $language->flag }}" class="img-fluid" style="padding-top:25px">
                                                </div>
                                                <h6> {{ $language->name }} </h6>
                                            </div>
                                        </div>

                                        @endforeach
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane" id="adventure">
                                <h4 class="info-text"> Which place do you want to roll? (checkboxes) </h4>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1 grid-wrapper" id="places">
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

    {{-- multiple image display --}}
    <script src="{{ asset('multiple/imageuploadify.min.js')}}"></script>


    <script type="text/javascript">
        
        $('select.division').change(function() 
        {
            var divisionId = $('select.division').find(':selected').data('id');

            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
                type:'POST',
                url:'divisionsearch',
                data:{divisionId:divisionId},
                success:function(data)
                {
                    console.log(data);
                    var html ='';

                    $.each(data,function (i,v) 
                    {
                        var id = v.id;
                        var place = v.name;
                        var photo = v.photo;

                        var name = place.substring(0, 10);

                        html += '<div class="col-sm-4 m-3">'+
                                    '<label class="image-checkbox">'+
                                        '<img class="img-responsive" src="'+photo+'" style="height: 100px; width: 200px;  object-fit: cover;">'+
                                        '<input name="places[]" value="'+id+'" type="checkbox">'+
                                        '<i class="fa fa-check hidden"></i>'+
                                        '<h6 style="text-align: center;"> '+name+' </h6>'+
                                    '</label>'+
                                '</div>'; 
                    });

                    $('#places').html(html);

                }
            });

        });

        $(".image-checkbox").each(function () 
        {
            if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
                $(this).addClass('image-checkbox-checked');
            } else {
                $(this).removeClass('image-checkbox-checked');
            }
        });
    
        // sync the state to the input
        $('#places').on('click','.image-checkbox', function(e)
        {
            $(this).toggleClass('image-checkbox-checked');
            var $checkbox = $(this).find('input[type="checkbox"]');
            $checkbox.prop("checked", !$checkbox.prop("checked"))

            e.preventDefault();
        });
    </script>

</html>
