@extends('backend')

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-4">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Division </h1>
	            </div>
	        </div>
	    </div>
	    <div class="col-sm-8">
	        <div class="page-header float-right">
	            <div class="page-title">
	                <a href="{{ route('admin.division.index') }}" class="btn btn-primary mt-1"> 
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
                            <strong> {{ $division->name }} </strong>
                        </div>
                        
                        <div class="card-body">
                        	<div class="container">
                        		<div class="row">
                        			<div class="col-12 text-center">
                        				<img src="{{ $division->flag }}" class="img-fluid" >
                        			</div>
                        		</div>
								
								<div class="row">
									<div class="col-3"> <b> Capital : </b> </div>
									<div class="col-9"> {{ $division->capital }} </div>
								</div>

								<div class="row">
									<div class="col-3"> <b> Region : </b> </div>
									<div class="col-9"> {{ $division->region }} </div>
								</div>

								<div class="row">
									<div class="col-3"> <b> Type : </b> </div>
									<div class="col-9"> {{ $division->type }} </div>
								</div>

								<hr>

								<div class="row">
									<div class="col-12">
										<b> Description </b>
									</div>
									<div class="col-12"> 
										{{ $division->description }}
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