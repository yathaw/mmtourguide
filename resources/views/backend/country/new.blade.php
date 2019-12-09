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
	                <a href="{{ route('admin.country.index') }}" class="btn btn-primary mt-1"> 
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
                            Create New <strong> Country </strong>
                        </div>
                        
                        <form action="{{route('admin.country.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                          	@csrf


	                        <div class="card-body card-block">
	                        	<div class="row form-group">
	                                <div class="col col-md-2"><label for="photo" class=" form-control-label"> Photo </label></div>
	                                <div class="col-12 col-md-10">
	                                	<input type="file" id="photo" name="photo" class="newImage">
										<img src="" class="previewImage" width="200px"/>
	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="name" class=" form-control-label"> Name </label></div>
	                                <div class="col-12 col-md-10">
	                                	<input type="text" id="name" name="name" countryholder="Enter Name..." class="form-control">
	                                	
	                                	<p style="color: red;"> {{$errors->first('name') }} </p>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer">
	                            <button type="submit" class="btn btn-primary btn-sm">
	                                <i class="fa fa-save"></i> Save
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