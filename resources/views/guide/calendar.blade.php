@extends('backend')
@section('style')

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('bookingcalendar.css') }}">
	
@endsection

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-12">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Calendar </h1>
	            </div>
	        </div>
	    </div>

	</div>

	<div class="content mt-3">
	    <div class="animated fadeIn">
	        <div class="row">

	            <div class="col-md-12">
	                <div class="card">
	                    <div class="card-header">
	                        <strong class="card-title"> Trip Calendar </strong>
	                    </div>
	                    <div class="card-body">
    						<div id='calendar'></div>
	                    </div>
	                </div>
	            </div>


	        </div>
	    </div><!-- .animated -->
	</div><!-- .content -->

@endsection

@section('script')
	
	<!-- Full Calendar -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
	
	<script type="text/javascript">
		
    	$(document).ready(function () 
    	{
    		var SITEURL = "{{url('/')}}";

	        $.ajaxSetup({
	          headers: {
	              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	          }
	        });

		    var calendar = $('#calendar').fullCalendar({
		        editable: true,
		        header: {
					left: 'month,agendaWeek,agendaDay',
					center: 'title',
					right: 'today prev,next'
				},
		        events: [
	                @foreach($datas as $data)
	                {
	                	@if($data->hourstartdate == '0000-00-00')
	                	id : '{{ $data->id }}',
	                    title : '{{ $data->name }}',
	                    start : '{{ $data->startdate }}',
	                    end: '{{ $data->enddate }}',
	                    "textEscape": false,   // new option to disable the auto escape
					    "color": "blue",   // an option!
					    "textColor": "white", // an option!
					    "textAlign": "center",
					    description : ' {{ $data->arrival_time }} - {{ $data->departure_time }} '
	                    @endif


	                    @if($data->startdate == '0000-00-00')
	                	id : '{{ $data->id }}',
	                    title : '{{ $data->name }}',
	                    start : '{{ $data->hourstartdate }}',
	                    end: '{{ $data->hourstartdate }}',
	                    "textEscape": false,   // new option to disable the auto escape
					    "color": "green",   // an option!
					    "textColor": "white", // an option!
					    description : ' {{ $data->arrival_time }} - {{ $data->departure_time }} '
	                    @endif
	                },
	                @endforeach
	            ],
	            
		        displayEventTime: true,
		        eventRender: function (event, element, view) 
		        {
		            if (event.allDay === 'true') {
		                event.allDay = true;
		            } else {
		                event.allDay = false;
		                element.find('.fc-title').append("<br/>" + event.description); 
		            }

		        },
		        selectable: true,
		        selectHelper: true,
		        eventClick: function (event) 
		        {
	                id = event.id;

	                var routeURL = "{{ URL::to('tourguide/bookingdetail/:id') }}";
	                routeURL = routeURL.replace(':id', id);

	                window.location.href = routeURL;
	            }

		    });
		});

	</script>


@endsection
