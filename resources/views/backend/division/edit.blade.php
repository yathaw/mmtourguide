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
                            Update Existing <strong> Division </strong>
                        </div>
                        
                        <form action="{{route('admin.division.update', $division->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                          	@csrf
                    		@method('PUT')



	                        <div class="card-body card-block">
	                        	<div class="row form-group">
	                                <div class="col col-md-2"><label for="flag" class=" form-control-label"> Flag </label></div>
	                                <div class="col-12 col-md-10">

	                                	<nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true"> Old </a>
                                            
                                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false"> New </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                            <img src="{{ $division->flag }}" class="img-fluid" style="width: 100px; height: 70px;">
											<input type="hidden" name="oldphoto" value="{{ $division->flag }}">

                                        </div>
                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                            <input type="file" id="flag" name="flag" class="newImage">
											<img src="" class="previewImage" width="200px"/>
                                        </div>
                                        
                                    </div>


	                                	
	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2">
	                                	<label for="type" class=" form-control-label"> Division Type </label>
	                                </div>
	                                <div class="col-12 col-md-10">
	                                	<div class="form-check-inline form-check">
	                                        <label for="state_type" class="form-check-label mx-3">
	                                            <input type="radio" id="state_type" name="type" value="State" class="form-check-input" {{ ($division->type=="State")? "checked" : "" }} > State
	                                        </label>

	                                        
	                                        <label for="region_type" class="form-check-label mx-3">
	                                            <input type="radio" id="region_type" name="type" value="Region" class="form-check-input" {{ ($division->type=="Region")? "checked" : "" }}> Region
	                                        </label>

	                                        <label for="union_territory" class="form-check-label mx-3">
	                                            <input type="radio" id="union_territory" name="type" value="Union Territory" class="form-check-input" {{ ($division->type=="Union Territory")? "checked" : "" }}> Union Territory
	                                        </label>

	                                    </div>

	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="name" class=" form-control-label"> Name </label></div>
	                                <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="Enter Name..." class="form-control" value="{{ $division->name }}">
	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="capital" class=" form-control-label"> Capital </label></div>
	                                <div class="col-12 col-md-10"><input type="text" id="capital" name="capital" placeholder="Enter Capital..." class="form-control" value="{{ $division->capital }}">
	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2">
	                                	<label for="region" class=" form-control-label"> Region </label>
	                                </div>
	                                <div class="col-12 col-md-10">
	                                	<div class="form-check-inline form-check">
	                                        <label for="north" class="form-check-label mx-3">
	                                            <input type="radio" id="north" name="region" value="North" class="form-check-input" {{ ($division->region=="North")? "checked" : "" }}> North
	                                        </label>

	                                        <label for="east" class="form-check-label mx-3">
	                                            <input type="radio" id="east" name="region" value="East" class="form-check-input" {{ ($division->region=="East")? "checked" : "" }} > East
	                                        </label>

	                                        <label for="south" class="form-check-label mx-3">
	                                            <input type="radio" id="south" name="region" value="South" class="form-check-input" {{ ($division->region=="South")? "checked" : "" }}>South
	                                        </label>

	                                        <label for="west" class="form-check-label mx-3">
	                                            <input type="radio" id="west" name="region" value="West" class="form-check-input" {{ ($division->region=="West")? "checked" : "" }}>West
	                                        </label>

	                                        <label for="lower" class="form-check-label mx-3">
	                                            <input type="radio" id="lower" name="region" value="Lower" class="form-check-input" {{ ($division->region=="Lower")? "checked" : "" }}>Lower
	                                        </label>

	                                        <label for="central" class="form-check-label mx-3">
	                                            <input type="radio" id="central" name="region" value="Central" class="form-check-input" {{ ($division->region=="Central")? "checked" : "" }}>Central
	                                        </label>

	                                    </div>

	                                </div>
	                            </div>

	                            <div class="row form-group">
	                                <div class="col col-md-2"><label for="capital" class=" form-control-label"> Description </label></div>
	                                <div class="col-12 col-md-10">
	                                	<textarea class="form-control summernote" name="description"> {{ $division->name }} </textarea>
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