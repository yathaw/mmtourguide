@extends('backend')

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-12">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Booking </h1>
	            </div>
	        </div>
	    </div>

	</div>
	@if(session("success_flashmsg") != NULL )

	<div class="container">
		<div class="row">
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
	</div>

	@endif

	<div class="content mt-3">
	    <div class="animated fadeIn">
	        <div class="row">

	            <div class="col-md-12">
	                <div class="card">
	                    <div class="card-header">
	                        <strong class="card-title"> All List </strong>
	                    </div>
	                    <div class="card-body">
	                        <table class="bootstrap-data-table-export table table-striped table-bordered">
	                            <thead>
	                                <tr>
	                                    <th>No</th>
	                                    <th>Token No</th>
	                                    <th> Status </th>
	                                    <th>Action</th>
	                                </tr>
	                            </thead>
	                            <tbody>
									@php $i =1; @endphp
	                            	@foreach($bookings as $booking)
										
										<tr>
											<td> {{ $i }} </td>
											<td> {{ $booking->tokenno }} </td>
											<td> {{ $booking->status }} </td>
											<td>

												<a href="{{ URL::to('admin/bookingconfirm/'.$booking->id) }}" class="btn btn-outline-success"> 
													<i class="fa fa-mail-reply"></i>	Confirm 
												</a>

												<a href="{{ URL::to('admin/bookingdetail/'.$booking->id) }}" class="btn btn-primary"> 
													<i class="fa fa-exclamation-circle"></i>
													Detail 
												</a>
												

											</td>

										</tr>
									@php $i++; @endphp
									
	                            	@endforeach
	                                
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>


	        </div>
	    </div><!-- .animated -->
	</div><!-- .content -->

@endsection