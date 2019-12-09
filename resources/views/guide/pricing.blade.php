<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> MM Tour Guide </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('logo.png') }}">

    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/selectFX/css/cs-skin-elastic.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('summernote/summernote-bs4.css') }}">


</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="mt-5">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="{{ asset('logo.gif') }}" class="img-fluid" style="width: 100px; height: 80px" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{asset('tourguide/pricing')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label> Rate Type  </label> <br>
                            <div class="form-check-inline form-check">
                                <label for="rate_type_usd" class="form-check-label mx-3">
                                    <input type="radio" id="rate_type_usd" name="type" value="USD" class="form-check-input"> USD
                                </label>

                                
                                <label for="rate_type_mmk" class="form-check-label mx-3">
                                    <input type="radio" id="rate_type_mmk" name="type" value="MMK" class="form-check-input"> MMK
                                </label>

                            </div>
                        </div>

                        <div class="form-group">
                            <label> Hour Rate  </label>
                            <input type="text" class="form-control" placeholder="Hour Rate" name="hourrate">
                        </div>

                        <div class="form-group">
                            <label> Daily Rate  </label>
                            <input type="text" class="form-control" placeholder="Daily Rate" name="dailyrate">
                        </div>

                        <div class="form-group">
                            <label> Biography </label>
                            <textarea class="form-control summernote" name="bio"></textarea>
                        </div>




                        <button type="submit" class="btn btn-primary btn-flat m-b-15"> Send </button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('backend/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    
    <!-- summernote js -->
    <script type="text/javascript" src="{{ asset('summernote/summernote-bs4.min.js') }}"></script>

    <script type="text/javascript">
        jQuery('.summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 100
        });

    </script>

</body>

</html>
