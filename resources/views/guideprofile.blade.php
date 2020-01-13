@extends('frontend')

@section('content')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('starrating.css') }}">

@endsection

	<div class="about mb-5">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle"> Guide Profile </div>
					<div class="section_title">
						<h2> {{ $guide->user->name }} </h2>
					</div>
				</div>
			</div>
			
			<div class="row about_row">
				<div class="col-lg-6">
					
					<div class="text_highlight"> License Number </div>
					<p> {{ $guide->license }} </p>

					<div class="text_highlight"> Phone Number </div>
					<p> {{ $guide->phone }} </p>

					<div class="text_highlight"> Address </div>
					<p> {{ $guide->address }} </p>

					<div class="text_highlight"> Email </div>
					<p> {{ $guide->user->email }} </p>

					<div class="text_highlight"> Division </div>
					<p> {{ $guide->division->name }} </p>
						
					<div class="text_highlight mt-5"> Language </div>
					
					<div class="about_text">
						@foreach($guide->languages as $language)
                                            
                            <span class="badge badge-pill badge-dark"> {{ $language->name }} </span>
                        @endforeach
					</div>

				</div>

				<div class="col-lg-6">
					<div class="about_image">
						<img src="{{ $guide->profile }}" alt="">
						<h3 class="text-center pt-3"> {{ $guide->guidenumber }} </h3>
					</div>
					<div class="row mt-5">
						<h4 class="col-6"> Guide Rating </h4>

						<div class="col-6">

					        <div class="form-group required" id="addStar">
					          <div class="col-sm-12">
					            <input class="star star-5" value="5" id="star-5" type="radio" name="star" {{ ($star=="5")? "checked" : "" }} />
					            <label class="star star-5" for="star-5"></label>
					            
					            <input class="star star-4" value="4" id="star-4" type="radio" name="star" {{ ($star=="4")? "checked" : "" }}/>
					            <label class="star star-4" for="star-4"></label>
					            
					            <input class="star star-3" value="3" id="star-3" type="radio" name="star" {{ ($star=="3")? "checked" : "" }}/>
					            <label class="star star-3" for="star-3"></label>
					            
					            <input class="star star-2" value="2" id="star-2" type="radio" name="star" {{ ($star=="2")? "checked" : "" }} />
					            <label class="star star-2" for="star-2"></label>
					            
					            <input class="star star-1" value="1" id="star-1" type="radio" name="star" {{ ($star=="1")? "checked" : "" }} />
					            <label class="star star-1" for="star-1"></label>
					           </div>
					        </div>
							
						</div>
						
					</div>
					<div class="ratingBar">
						<div class="row form-group">
							
							<div class="col-3">
								Excellent
							</div>

							<div class="col-9">
								@if($ratingBar['star_5'])
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratingBar['star_5'] }}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $ratingBar['star_5'] }}% </div>
								</div>
								@else
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
								</div>
								@endif
							</div>
						</div>
						<div class="row form-group">
							<div class="col-3">
								Very Good
							</div>
							
							<div class="col-9">
								@if($ratingBar['star_4'])
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratingBar['star_4'] }}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $ratingBar['star_4'] }}% </div>
								</div>
								@else
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
								</div>
								@endif
							</div>



						</div>

						<div class="row form-group">
							<div class="col-3">
								Average
							</div>

							<div class="col-9">
								@if($ratingBar['star_3'])
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratingBar['star_3'] }}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $ratingBar['star_3'] }}% </div>
								</div>
								@else
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
								</div>
								@endif
							</div>

						</div>

						<div class="row form-group">
							<div class="col-3">
								Poor
							</div>

							<div class="col-9">
								@if($ratingBar['star_2'])
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratingBar['star_2'] }}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $ratingBar['star_2'] }}% </div>
								</div>
								@else
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
								</div>
								@endif
							</div>

						</div>

						<div class="row form-group">
							<div class="col-3">
								Terrible
							</div>

							<div class="col-9">
								@if($ratingBar['star_1'])
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: {{ $ratingBar['star_1'] }}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $ratingBar['star_1'] }}% </div>
								</div>
								@else
								<div class="progress">
									<div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
								</div>
								@endif
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="why mb-5" style="padding-top: 0px">

		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title text-dark">
						<h2> Adventurer List </h2>
					</div>
				</div>
			</div>

			<div class="row why_row">
				@foreach($adventurers as $adventurer)
				<div class="col-lg-4 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="{{ $adventurer->place->photo }}" alt="">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<img src="{{ asset('frontend/images/why_3.svg') }}" alt="">
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">
								<a href="#">
									{{ $adventurer->place->name }}
								</a>
							</div>
							<div class="why_text">
								<p>{{ Str::limit($adventurer->place->description,100,'...') }} </p>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>

		</div>
		
	</div>

@endsection


@section('script')

<script type="text/javascript">
	$('#addStar').change('.star', function(e) 
	{
		var stars = document.getElementsByName( "star" );
		var guideid = "{{ $guide->id }}";

		for (var i = 0, length = stars.length; i < length; i++) 
		{
		  	if (stars[i].checked) 
		  	{
		    	// do whatever you want with the checked radio
		    	var rating = stars[i].value;

		    	// only one radio can be logically checked, don't check the rest
		    	break;
		  	}
		}

		$.ajaxSetup({
          	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          	}
        });

        $.ajax({
            type:'POST',
            url:'/rating',
            data:{rating:rating, guideid:guideid},
            success:function(data)
            { 
            	console.log(data);
            }
        });
    });
</script>

@endsection

