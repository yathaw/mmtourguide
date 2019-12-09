@extends('backend')

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-4">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Country </h1>
	            </div>
	        </div>
	    </div>
	    <div class="col-sm-8">
	        <div class="page-header float-right">
	            <div class="page-title">
	                <a href="{{ route('admin.country.create') }}" class="btn btn-primary mt-1"> 
	                	<i class="fa fa-plus"></i>	Add New 
	                </a>
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
	                                    <th>Name</th>
	                                    <th>Passport Cover</th>
	                                    <th>Action</th>
	                                </tr>
	                            </thead>
	                            <tbody>
									@php $i =1; @endphp
	                            	@foreach($countries as $country)
										
										<tr>
											<td> {{ $i }} </td>
											<td> {{ $country->name }} </td>
											<td> <img src="{{ $country->passportcover }}" class="img-fluid"> </td>
											<td>

												<a href="{{ route('admin.country.edit',$country->id) }}" class="btn btn-warning"> 
													<i class="fa fa-edit"></i> Edit 
												</a>

												<form method="post" action="{{route('admin.country.destroy',$country->id)}}" class="d-inline" onsubmit="return confirm('Are your sure?')">
								                  	@csrf
								                  	@method('DELETE')
								                    <button type="submit" class="btn btn-danger btn-round" rel="tooltip" title="Delete">
								                      <i class="fa fa-times"> </i>
								                      Delete
								                    </button>
								                </form>
												

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