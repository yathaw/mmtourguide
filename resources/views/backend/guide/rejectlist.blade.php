@extends('backend')

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-12">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Guide </h1>
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
	                        <strong class="card-title"> Reject Guide List </strong>
	                    </div>
	                    <div class="card-body">
	                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
	                            <thead>
	                                <tr>
	                                    <th> No </th>
	                                    <th> Register Date </th>
	                                    <th> Name  </th>
	                                    <th> License </th>
	                                    <th> Action </th>
	                                </tr>
	                            </thead>
	                            <tbody>
									
									@php $i=1; @endphp

									@foreach($rejects as $reject)
									
									<tr>
										<td> {{ $i }} </td>
										<td> {{ $reject->user->registerdate }} </td>
										<td> {{ $reject->user->name }} </td>
										<td> {{ $reject->license }} </td>
										<td>
											<a href="{{ route('admin.guide.show',$reject->id) }}" class="btn btn-outline-primary"> 
												<i class="fa fa-exclamation-circle"></i>	Detail 
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