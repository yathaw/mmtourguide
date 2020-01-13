@extends('backend')

@section('content')

	<?php 
		$tokenno = $bookingdetail->booking->tokenno;

		$hour_startdate = $bookingdetail->hour_startdate;
		$numberofhours = $bookingdetail->numberofhours;

		$daily_startdate = $bookingdetail->daily_startdate;
		$daily_enddate = $bookingdetail->daily_enddate;
		$tour_day = $bookingdetail->tour_day;

		$arrival_time = $bookingdetail->arrival_time;
		$departure_time = $bookingdetail->departure_time;

		$numberofadult = $bookingdetail->numberofadult;
		$numberofchild = $bookingdetail->numberofchild;

		$requirement = $bookingdetail->requirement;
		$cost = $bookingdetail->cost;

		$status = $bookingdetail->status;

		$place = $bookingdetail->place->name;

		$hourrate_string = $bookingdetail->guide->hourrate;
		$dailyrate_string = $bookingdetail->guide->dailyrate;

        $hourrate_array = explode(' ', $hourrate_string);
        $hourrate = $hourrate_array[0];

        $dailyrate_array = explode(' ', $dailyrate_string);
        $dailyrate = $dailyrate_array[0];

        if ($daily_startdate == "0000-00-00") 
        {
            $subtotal = $hourrate * $numberofhours;
        }

        else 
        {
            $subtotal = $dailyrate * $tour_day;
        }

        $tourist_image = $bookingdetail->booking->tourist->image;
        $tourist_gender = $bookingdetail->booking->tourist->gender;
        $tourist_phone = $bookingdetail->booking->tourist->phone;
        $tourist_address = $bookingdetail->booking->tourist->address;

        $tourist_name = $bookingdetail->booking->tourist->user->name;
        $tourist_email = $bookingdetail->booking->tourist->user->email;



	?>

	<div class="breadcrumbs">
	    <div class="col-sm-4">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> {{ $tokenno }} </h1>
	            </div>
	        </div>
	    </div>
	    <div class="col-sm-8">
	        <div class="page-header float-right">
	            <div class="page-title">
	                <a href="{{ URL::to('tourguide/booking') }}" class="btn btn-primary mt-1"> 
	                	<i class="fa fa-backward"></i>	Go Back
	                </a>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="content mt-3">
	    <div class="animated fadeIn">
	        <div class="row">

	            <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> {{ $place }}  </strong>

                            <span class="float-right text-danger"> {{ $status }}  </span>
                        </div>
                        
                        <div class="card-body">
                        	<div class="container">

                        	<div class="row">
                        		<div class="col-8">
								
									<div class="row my-3">
										<div class="col-3"> <b> Total : </b> </div>
										<div class="col-9 text-danger"> {{ $subtotal }} USD </div>
									</div>

									<?php if ($daily_startdate == '0000-00-00'):?>

									<div class="row my-3">
										<div class="col-3"> <b> Tour Date : </b> </div>
										<div class="col-9"> 
											{{ Carbon\Carbon::parse($hour_startdate)->format('d M Y') }}
										</div>
									</div>

									<div class="row my-3">
										<div class="col-3"> <b> No Of Hours : </b> </div>
										<div class="col-9"> {{ $numberofhours }} Hr </div>
									</div>

									<?php endif; ?>

									<?php if ($hour_startdate == '0000-00-00'):?>

									<div class="row my-3">
										<div class="col-3"> <b> Start Date : </b> </div>
										<div class="col-9"> 
											{{ Carbon\Carbon::parse($daily_startdate)->format('d M Y') }}
											

										</div>
									</div>

									<div class="row my-3">
										<div class="col-3"> <b> End Date : </b> </div>
										<div class="col-9"> 
											{{ Carbon\Carbon::parse($daily_enddate)->format('d M Y') }} 
										</div>
									</div>

									<?php endif; ?>

									<div class="row my-3">
										<div class="col-3"> <b> No Of Person : </b> </div>
										<div class="col-9"> 
											<span class="badge badge-success"> Adult :
												{{ $numberofadult }}
											</span>

											<span class="badge badge-warning"> Child :
												{{ $numberofchild }}
											</span>
										</div>
									</div>

									<div class="row my-3">
										<div class="col-3"> <b> Arrival Time : </b> </div>
										<div class="col-9"> 
											{{ $arrival_time }} 
										</div>
									</div>

									<div class="row my-3">
										<div class="col-3"> <b> Departure Time : </b> </div>
										<div class="col-9"> 
											{{ $departure_time }} 
										</div>
									</div>

									
								
								</div>
								
								<div class="col-4">

									<div class="row my-3">
										<img src="{{ $tourist_image }}" class="img-fluid" style=" height: 100px">
									</div>
									
									<div class="row my-3">
										<div class="col-3"> <b> Name </b> </div>
										<div class="col-9"> {{ $tourist_name }}  </div>
									</div>

									<div class="row my-3">
										<div class="col-3"> <b> Email </b> </div>
										<div class="col-9"> {{ $tourist_email }}  </div>
									</div>

									<div class="row my-3">
										<div class="col-3"> <b> Gender </b> </div>
										<div class="col-9"> {{ $tourist_gender }}  </div>
									</div>

									<div class="row my-3">
										<div class="col-3"> <b> Phone </b> </div>
										<div class="col-9"> {{ $tourist_phone }}  </div>
									</div>

									<div class="row my-3">
										<div class="col-3"> <b> Add </b> </div>
										<div class="col-9"> {{ $tourist_address }}  </div>
									</div>

								</div>

							</div>
							
							<div class="row my-3">
								<div class="col-3"> <b> Requirement : </b> </div>
								<div class="col-12 mt-3"> 
									{{ $requirement }} 
								</div>
							</div>


                        	</div>
                        </div>

                    </div>
                    
                </div>


	        </div>
	    </div><!-- .animated -->
	</div><!-- .content -->

@endsection