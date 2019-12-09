@extends('frontend')

@section('content')

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle"> Login To Our Site </div>
                    <div class="section_title"><h2> Login Now </h2></div>
                </div>
            </div>
        
        @if(session("success_flashmsg") != NULL )
            <div class="row mt-5">
                <div class="col-12">
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                        <span class="badge badge-pill badge-success">Success</span>
                        {{ session("success_flashmsg") }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                </div>
            </div>

        @endif

            <div class="row">
                <div class="contact_form_container">
                    <form action="{{ route('login') }}" method="POST" id="contact_form" class="contact_form">
                        @csrf
                    
                        <div class="form-group">

                            <div style="margin-bottom: 38px">
                                <input type="email" class="contact_input contact_input_name inpt" placeholder="Your Email" required="required" autofocus value="{{ old('email') }}" name="email">
                                <div class="input_border" style="visibility: visible; opacity: 1;"></div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        </div>
                        
                        
                        <div class="form-group">
                           
                            <div style="margin-bottom: 18px" >
                                <input type="password" class="contact_input contact_input_name inpt" placeholder="Your Password" required="required" autofocus value="{{ old('password') }}" name="password">
                                <div class="input_border" ></div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    
                            </div>

                        </div>
                        

                            <button class="contact_button" type="submit"> Login </button>


                    </form>
                </div>
                

            </div>

        </div>
    </div>

@endsection