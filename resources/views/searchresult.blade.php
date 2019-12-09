@extends('frontend')

@section('content')
	
	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle"> Search Result </div>
					@if(empty($guides))
					<div class="section_title">
						<h2> 0 results found based on your {{ $location->place_name }} around {{ $location->region_name }} </h2>
					</div>
					@else
					<div class="section_title">
						@if(count($guides) == 1)
							<h2> {{ count($guides) }} result found based on your {{ $location->place_name }} around {{ $location->region_name }} </h2>
						@else
							<h2> {{ count($guides) }} results found based on your {{ $location->place_name }} around {{ $location->region_name }} </h2>
						@endif
					</div>
					@endif
				</div>
			</div>
			<div class="row mt-5">

				@if(!empty($guides))
					
					@foreach($guides as $guide)
						<div class="col-6">

							<div class="card mb-3">
								<div class="row no-gutters">
								    <div class="col-md-4">
								      	<img src="{{ $guide->guide_profile }}" class="card-img" alt="...">
								    </div>
								    <div class="col-md-8">
								      	<div class="card-body">

								        	<h5 class="card-title mb-3">
								        		{{ $guide->guide_name }}

								        		<span class="float-right">
								        			<p class="text-center">
												@php
													$languages_string = $guide->language_name;
													$languages = explode(',', $languages_string);

													$languagescount = count($languages)

												@endphp

												@for($i=0; $i<$languagescount; $i++ )
												
													<span class="badge badge-pill badge-dark"> {{ $languages[$i] }} </span>
												@endfor

											</p>
								        		</span>
								        	</h5>

								        	<p> <b> Hour Rate : </b> 
								        		<span class="text-danger"> {{ $guide->guide_hourrate }} </span>
								        	</p>

								        	<p> <b> Daily Rate : </b> 
								        		<span class="text-danger"> {{ $guide->guide_dailyrate }} </span>
								        	</p>

								        	<a href="#" class="btn btn-outline-info btn-sm mt-2">
										    	Guide Profile
										    </a>

										    <a href="#" class="btn btn-outline-warning btn-sm mt-2">
										    	Add Favourite
										    </a>

										    <a href="javascript:void(0)" class="btn btn-outline-success btn-sm mt-2 bookbtn" 
										    data-guideid ="{{ $guide->guide_id }}"
										    data-placeid = "{{ $location->place_id }}"
										    data-regionid = "{{ $location->region_id }}"
										    data-divisionid = "{{ $location->division_id }}"
										    >
										    	Book Now

										    </a>
								      	</div>
								    </div>
								</div>
							</div>


						</div>

					@endforeach

				@endif
				

				

			</div>
		</div>
	</div>

@endsection

@section('script')

	<script type="text/javascript">
		
		// Book Button
		$('.card').on('click','.bookbtn', function()
		{

			var guideid = $(this).data('guideid');
			var placeid = $(this).data('placeid');
			var regionid = $(this).data('regionid');
			var divisionid = $(this).data('divisionid');

			


			$.ajaxSetup({
              	headers: {
                	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              	}
            });

            $.ajax({
                type:'POST',
                url:'book',
                data:{guideid:guideid, guidename:guidename, placeid:placeid, placename:placename, regionid:regionid, regionname:regionname, divisionid:divisionid, divisionname:divisionname },
                // success:function(data)
                // {
                // 	window.location();
                // }
            });



		});

	</script>

@endsection