@extends('backend')

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-4">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> place </h1>
	            </div>
	        </div>
	    </div>
	    <div class="col-sm-8">
	        <div class="page-header float-right">
	            <div class="page-title">
	                <a href="{{ route('admin.place.index') }}" class="btn btn-primary mt-1"> 
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
                            <strong> {{ $place->name }} </strong>
                        </div>
                        
                        <div class="card-body">
                        	<div class="container">
                        		<div class="row">
                        			<div class="col-12 text-center">
                        				<img src="{{ $place->photo }}" class="img-fluid" >
                        			</div>
                        		</div>

								<div class="row mt-5">
									<div class="col-3"> <b> Region : </b> </div>
									<div class="col-9"> {{ $place->region->name }} </div>
								</div>

								<hr>

								<div class="row">
									<div class="col-12">
										<b> Description </b>
									</div>
									<div class="col-12"> 
										{{ $place->description }}
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