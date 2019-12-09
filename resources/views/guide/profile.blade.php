@extends('backend')
@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('pdf_preview/style.css') }}">

@endsection
@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-4">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Guide </h1>
	            </div>
	        </div>
	    </div>

	    <div class="col-sm-8">
	        <div class="page-header float-right">
	            <div class="page-title">
	                <a href="{{ route('tourguide.guide.edit', $guide->id) }}" class="btn btn-warning mt-1"> 
	                	<i class="fa fa-edit"></i>	Edit
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
                            <strong> {{ $guide->user->name }} </strong>

                            <strong class="float-right"> {{ $guide->approveddate }} </strong>

                        </div>
                        
                        <div class="card-body">
                        	<div class="container">
                        		<div class="row">
                        			<div class="col-4">
                        				<img src="{{ $guide->profile }}" class="img-fluid"  style="width: 300px; height: 300px">
                        			</div>

                        			<div class="col-8">

                        				<div class="row mb-3">
											<div class="col-3"> <b> License : </b> </div>
											<div class="col-9"> {{ $guide->license }} </div>
										</div>

										<div class="row mb-3">
											<div class="col-3"> <b> Gender : </b> </div>
											<div class="col-9"> {{ $guide->gender }} </div>
										</div>

										<div class="row mb-3">
											<div class="col-3"> <b> Phone : </b> </div>
											<div class="col-9"> {{ $guide->phone }} </div>
										</div>

										<div class="row mb-3">
											<div class="col-3"> <b> Address : </b> </div>
											<div class="col-9"> {{ $guide->address }} </div>
										</div>

										<div class="row mb-3">
											<div class="col-3"> <b> Hour Rate : </b> </div>
											<div class="col-9"> {{ $guide->hourrate }} </div>
										</div>

										<div class="row mb-3">
											<div class="col-3"> <b> Daily Rate : </b> </div>
											<div class="col-9"> {{ $guide->dailyrate }} </div>
										</div>

										<div class="row mb-3">
											<div class="col-3"> <b> Region : </b> </div>
											<div class="col-9"> {{ $guide->region->name }} </div>
										</div>

										<div class="row mb-3">
											<div class="col-3"> <b> Skill : </b> </div>
											<div class="col-9"> 
												@foreach($guide->languages as $language)
	                                            	<span class="badge badge-primary"> {{ $language->name }}</span>
	                                            @endforeach
                                            </div>
										</div>


                        			</div>
                        		</div>
								
								<div class="custom-tab mt-5">

                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        	<a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true"> License Certificate </a>

                                            <a class="nav-item nav-link" id="custom-nav-adventure-tab" data-toggle="tab" href="#custom-nav-adventure" role="tab" aria-controls="custom-nav-adventure" aria-selected="false"> Adventure </a>

                                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false"> Biography </a>
                                            <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact" aria-selected="false"> CV </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                        	
                                        	@foreach($licenses as $license)
												<div class="col-md-4">
							                        <div class="card">
							                            <img class="card-img-top" src="{{ $license}}" alt="Card image cap">
							                        </div>
							                    </div>

                                        	@endforeach

                                        </div>

                                        <div class="tab-pane fade show" id="custom-nav-adventure" role="tabpanel" aria-labelledby="custom-nav-adventure-tab">
                                        	@foreach($guide->places as $place)
                                            	<div class="col-md-4">
							                        <div class="card">
							                            <img class="card-img-top" src="{{ $place->photo }}" alt="Card image cap">
							                            <div class="card-body">
							                                <h4 class="card-title mb-3">{{ $place->name }}</h4>
							                                
							                            </div>
							                        </div>
							                    </div>
                                            @endforeach
                                        </div>

                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                            <p> {!! $guide->bio !!} </p>
                                        </div>
                                        <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                            <div id="app">
							    		
									    		<div role="toolbar" id="toolbar">
										        	<div id="pager">
										          		<button data-pager="prev">prev</button>
										          		
										          		<button data-pager="next">next</button>
										        	</div>
										        	
										        	<div id="page-mode">
										          		<label class="text-white">Page Mode <input type="number" value="1" min="1"/></label>
										        	</div>
									      		</div>
									      		<div id="viewport-container">
									      			<div role="main" id="viewport"></div>
									  			</div>
									    	</div>
                                        </div>
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

@section('script')
	
	<!-- pdf preview -->
    <script src="https://unpkg.com/pdfjs-dist@2.0.489/build/pdf.min.js"></script>

    <script type="text/javascript" src="{{ asset('pdf_preview/index.js') }}"></script>
	
	<script type="text/javascript">
		
    	var pdf_file =' {{ asset($guide->cv) }}';
    	console.log(pdf_file);
      	initPDFViewer(pdf_file);

	</script>


@endsection