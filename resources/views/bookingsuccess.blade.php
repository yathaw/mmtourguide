@extends('frontend')

@section('content')

	
	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle"> Thank You </div>
					<div class="section_title">
						<h2> SUCCESS! </h2>
					</div>

				</div>
			</div>
			
			<div class="row mt-5">

				<div class="offset-2 col-8 offset-2 text-center">

					<img src="{{ asset ('tick.png') }}" class="img-fluid" style="width: 150px; height: 150px;">
					
					<h3 class="mt-5"> You successfully scheduled a guide to booking. </h3>

					<p> We have received your request , your advisor will get in touch soon. </p>

				</div>


				<div class="offset-4 col-4 offset-4">
					<a href="{{ asset('') }}" class="btn btn-primary btn-block mt-5 text-white"> Done </a>
				</div>
				

			</div>

		</div>
	</div>


@endsection