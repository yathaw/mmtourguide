@extends('frontend')

@section('style')
    
    <link rel="stylesheet" type="text/css" href="{{ asset('booking.css') }}">

@endsection

@section('content')
    
    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col-8 text-center">
                    <div class="section_title">
                        <h2> Plan My Trip </h2>
                    </div>
                    <div class="section_subtitle"> Guide </div>

                </div>
                <div class="col-4">
                    <table class="table">
                        <tr>
                            <td> Hour Rate </td>
                            <td> {{ $guide->hourrate }} </td>
                        </tr>

                        <tr>
                            <td> Daily Rate </td>
                            <td> {{ $guide->dailyrate }} </td>
                        </tr>

                        <tr>
                            <td> Multi Day Tour </td>
                            <td> On Request </td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-4">
                    <div class="travello">
                        <div class="background_image" style="background-image:url({{ $guide->profile }})"></div>
                        <div class="travello_content">
                            <div class="travello_content_inner">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="travello_container">
                            <a>
                                <div class="d-flex flex-column align-items-center justify-content-end">
                                    <span class="travello_title">
                                        {{ $guide->user->name }}
                                    </span>
                                    <span class="travello_subtitle">
                                        {{ $guide->user->email }}
                                    </span>
                                    <span class="travello_subtitle">
                                        @foreach($guide->languages as $language)
                                            
                                            <span class="badge badge-pill badge-dark"> {{ $language->name }} </span>
                                        @endforeach

                                    </span>

                                </div>
                            </a>
                        </div>
                        </div>
                </div>

                <div class="col-8">
                  <h3 class="mb-5"> <span class="section_subtitle"> I'm Travelling To </span> {{ $place->name }} </h3>

                  <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-hour-tab" data-toggle="pill" href="#pills-hour" role="tab" aria-controls="pills-hour" aria-selected="true">
                        Hour Rate ( {{ $guide->hourrate }} )
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-daily-tab" data-toggle="pill" href="#pills-daily" role="tab" aria-controls="pills-daily" aria-selected="false">
                        Daily Rate ( {{ $guide->dailyrate }} )
                      </a>
                    </li>
                  </ul>

                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-hour" role="tabpanel" aria-labelledby="pills-hour-tab">

                      <div class="row">
                        <div class="col-6">
                          <label> Start Date </label>
                          <input type="date" name="" class="form-control" id="startdate">
                        </div>
                        <div class="col-6">
                          <label> No Of Hours </label>
                          <select id="numberofhours">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                            <option value="5"> 5 </option>
                            <option value="6"> 6 </option>
                            <option value="7"> 7 </option>
                          </select>
                        </div>
                      </div>
                      
                    </div>

                    <div class="tab-pane fade" id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">
                      <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label> Start Date </label>
                                <input id="dp1" type="text" class="form-control clickable input-md" id="DtChkIn" placeholder="&#xf133;  Check-In">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label> End Date </label>
                                <input id="dp2" type="text" class="form-control clickable input-md" id="DtChkOut" placeholder="&#xf133;  Check-Out">
                            </div>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-3">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Arrival Time</label>
                              
                                <div class="input-group time" id="arrival_timepicker">
                                  <input class="form-control input-group-append input-group-addon" placeholder="HH:MM AM/PM" id="arrival_time" />
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label> Departure Time</label>
                              
                                <div class="input-group time" id="departure_timepicker">
                                  <input class="form-control input-group-append input-group-addon" placeholder="HH:MM AM/PM" id="departure_time" />
                                </div>

                            </div>

                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <label class="col-12"> No of Person </label>
                        <div class="col-6">
                            <label> Adult </label>
                            <input type="number" name="" class="form-control" placeholder="No of Adult" id="numberofadult">
                        </div>

                        <div class="col-6">
                            <label> Child </label>
                            <input type="number" name="" class="form-control" placeholder="No of Child" id="numberofchild">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <label> Tell us your customised requirement </label>
                            <textarea class="form-control" placeholder="Type Something" id="requirement"></textarea>
                        </div>
                    </div>
    
                    <div class="button about_button">
                        <a href="javascript:void(0)" class="checkbtn" 
                        data-guideid = "{{ $guide->id }}"
                        data-guidename = "{{ $guide->user->name }}"
                        data-guideprofile = "{{ $guide->profile }}"

                        data-hourrate = "{{ $guide->hourrate }}"
                        data-dailyrate = "{{ $guide->dailyrate }}"
                        data-placeid = "{{ $place->id }}"
                        data-placename = "{{ $place->name }}"
                        data-href="{{URL::to('appointment')}}"
                        > 
                          Get Appointment
                        </a>
                    </div>
                  
                </div>

                

            </div>
        </div>
    </div>

@endsection

@section('script')

<script type="text/javascript" src="{{ asset('booking.js') }}"></script>

@endsection