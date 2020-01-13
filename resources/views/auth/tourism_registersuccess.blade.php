@extends('frontend')

@section('content')

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_subtitle"> Success Registration </div>
                    <div class="section_title"><h2> You've Got Mail! </h2></div>
                    <div class="text-center">
                        <img src="{{ asset('confirmmail.png') }}" class="img-fluid" style="width: 280px; height: 205px">

                        <p> 
                            We send a confirmation link to:
                            @if(session("mail") != NULL )
                            {{ session("mail") }}
                            @endif 
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection