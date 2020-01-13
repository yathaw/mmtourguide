@extends('frontend')

@section('content')

	
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle"> Profile </div>
					<div class="section_title"><h2>A few words about yours</h2></div>
				</div>
			</div>
			<div class="row about_row">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="text_highlight"> {{ $tourist->user->name }} </div>
						<div class="about_text">
							<div class="row form-group">
								<div class="col-4">
									<div class="text_highlight"> Email </div>
								</div>
								<div class="col-8">
									<p> {{ $tourist->user->email }} </p>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-4">
									<div class="text_highlight"> Gender </div>
								</div>
								<div class="col-8">
									<p> {{ $tourist->gender }} </p>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-4">
									<div class="text_highlight"> Phone </div>
								</div>
								<div class="col-8">
									<p> {{ $tourist->phone }} </p>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-4">
									<div class="text_highlight"> Address </div>
								</div>
								<div class="col-8">
									<p> {{ $tourist->address }} </p>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-4">
									<div class="text_highlight"> Card Type </div>
								</div>
								<div class="col-8">
									<p> {{ $tourist->cardtype }} </p>
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-6">
								<div class="button about_button"><a href="#">Edit Your Profile </a></div>
							</div>
							<div class="col-6">
								<div class="button about_button"><a href="#">Change Password </a></div>
							</div>
						</div>
						

						
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_image"><img src="{{ $tourist->image }}" alt=""></div>
				</div>
			</div>
		</div>
	</div>


@endsection