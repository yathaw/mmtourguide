@extends('backend')

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-4">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Place </h1>
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
                            Update Existing <strong> Place </strong>
                        </div>
                        
                        <form action="{{route('admin.place.update', $place->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                          	@csrf
                          	@method("PUT")


	                        <div class="card-body card-block">
	                        	<div class="row form-group">
	                                <div class="col col-md-2"><label for="photo" class=" form-control-label"> Photo </label></div>
	                                <div class="col-12 col-md-10">

	                                	<nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true"> Old </a>
                                            
                                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false"> New </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                            <img src="{{ $place->photo }}" class="img-fluid" style="width: 100px; height: 70px;">
											<input type="hidden" name="oldphoto" value="{{ $place->photo }}">

                                        </div>
                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                            <input type="file" id="photo" name="photo" class="newImage">
											<img src="" class="previewImage" width="200px"/>
                                        </div>
                                        
                                    </div>


	                                	
	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="name" class=" form-control-label"> Name </label></div>
	                                <div class="col-12 col-md-10">
	                                	<input type="text" id="name" name="name" placeholder="Enter Name..." class="form-control" value="{{ $place->name }}">
	                                	
	                                	<p style="color: red;"> {{$errors->first('name') }} </p>
	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="capital" class=" form-control-label"> Region </label></div>
	                                <div class="col-12 col-md-10">
	                                	<select name="region" class="form-control">
	                                		@foreach($regions as $region)
	                                			<option value="{{ $region->id }}" @if($place->region_id == $region->id) {{'selected'}} @endif > {{ $region->name }} </option>
	                                		@endforeach
	                                	</select>
	                                	<p style="color: red;"> {{$errors->first('capital') }} </p>
	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="capital" class=" form-control-label"> Description </label></div>
	                                <div class="col-12 col-md-10">
	                                	<textarea class="form-control summernote" name="description"> {{ $place->description }} </textarea>
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