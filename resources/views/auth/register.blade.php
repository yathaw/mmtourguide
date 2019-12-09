@extends('frontend')

@section('content')

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle"> Account Register </div>
                    <div class="section_title"><h2> Choose Who Your Are </h2></div>
                </div>
            </div>

            <div class="row team_row">

                <!-- Team Item -->
                <div class="col-xl-6 col-md-6 team_col">
                    <a href="{{ asset('register/tourism') }}">
                        <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                            <div class="team_image"><img src="{{ asset('tourism.png') }}" alt=""></div>
                            <div class="team_content">
                                <div class="team_title">
                                    <a href="{{ asset('register/tourism') }}">
                                        Tourism
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Team Item -->
                <div class="col-xl-6 col-md-6 team_col">
                    <a href="{{ asset('register/guide') }}">
                        <div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
                            <div class="team_image"><img src="{{ asset('tourguide.png') }}" alt=""></div>
                            <div class="team_content">
                                <div class="team_title">
                                    <a href="{{ asset('register/guide') }}">Tour Guide </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>

@endsection