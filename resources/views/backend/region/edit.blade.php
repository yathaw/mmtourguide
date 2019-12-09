@extends('backend')

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-4">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Region </h1>
	            </div>
	        </div>
	    </div>
	    <div class="col-sm-8">
	        <div class="page-header float-right">
	            <div class="page-title">
	                <a href="{{ route('admin.region.index') }}" class="btn btn-primary mt-1"> 
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
                            Update Existing <strong> Region </strong>
                        </div>
                        
                        <form action="{{route('admin.region.update', $region->id)}}" method="post" class="form-horizontal" >
                          	@csrf
                    		@method('PUT')



	                        <div class="card-body card-block">
	                        	

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="name" class=" form-control-label"> Name </label></div>
	                                <div class="col-12 col-md-10">
	                                	<input type="text" id="name" name="name" placeholder="Enter Name..." class="form-control" value="{{ $region->name }}">
	                                	
	                                	<p style="color: red;"> {{$errors->first('name') }} </p>
	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="capital" class=" form-control-label"> Region </label></div>
	                                <div class="col-12 col-md-10">
	                                	<select class="form-control" name="division">
	                                		@foreach($divisions as $division)
	                                		<option value="{{ $division->id }}" @if($region->division_id == $division->id) {{'selected'}} @endif > {{ $division->name }} </option>
	                                		@endforeach
	                                	</select>

	                                	<p style="color: red;"> {{$errors->first('capital') }} </p>
	                                </div>
	                            </div>

	                        </div>
	                        <div class="card-footer">
	                            <button type="submit" class="btn btn-primary btn-sm">
	                                <i class="fa fa-upload"></i> Update
	                            </button>
	                            <button type="reset" class="btn btn-danger btn-sm">
	                                <i class="fa fa-ban"></i> Reset
	                            </button>
	                        </div>

                       	</form>

                    </div>
                    
                </div>


	        </div>
	    </div><!-- .animated -->
	</div><!-- .content -->

@endsection