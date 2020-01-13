<?php 
	$name = $data['name'];
	$email = $data['email'];
	
	$bookingid = $data['bookingid'];
	$voucherno = $data['voucherno'];

	$bookingdate = $data['bookingdate'];
	$confirmdate = $data['confirmdate'];
	$finishdate = $data['finishdate'];

	$total = $data['total'];
	$totalguide = $data['totalguide'];

	$status = $data['status'];

	$bookingdetails = $data['bookingdetails'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		#invoice
		{
	    	padding: 30px;
		}

		.invoice
		{
		    position: relative;
		    background-color: #FFF;
		    min-height: 680px;
		    padding: 15px
		}
		
		.invoice header 
		{
		    padding: 10px 0;
		    margin-bottom: 20px;
		    border-bottom: 1px solid #3989c6
		}

		.invoice .company-details 
		{
	    	text-align: right
		}

		.invoice .company-detail 
		{
	    	text-align: left
		}

		.invoice .company-details .name
		{
		    margin-top: 0;
		    margin-bottom: 0
		}

		.invoice .contacts 
		{
		    margin-bottom: 20px
		}

		.invoice .invoice-to 
		{
		    text-align: left
		}

		.invoice .invoice-to .to {
		    margin-top: 0;
		    margin-bottom: 0
		}

		.invoice .invoice-details 
		{
		    text-align: right
		}

		.invoice .invoice-details .invoice-id 
		{
		    margin-top: 0;
		    color: #3989c6
		}

		.invoice main 
		{
		    padding-bottom: 50px
		}

		.invoice main .thanks 
		{
		    margin-top: -100px;
		    font-size: 2em;
		    margin-bottom: 50px
		}

		.invoice main .notices 
		{
		    padding-left: 6px;
		    border-left: 6px solid #3989c6
		}

		.invoice main .notices .notice 
		{
		    font-size: 1.2em
		}

		.invoice table 
		{
		    width: 100%;
		    border-collapse: collapse;
		    border-spacing: 0;
		    margin-bottom: 20px
		}

		.invoice table td,.invoice table th 
		{
		    padding: 15px;
		    background: #eee;
		    border-bottom: 1px solid #fff
		}

		.invoice table th 
		{
		    white-space: nowrap;
		    font-weight: 400;
		    font-size: 16px
		}

		.invoice table td h3 
		{
		    margin: 0;
		    font-weight: 400;
		    color: #3989c6;
		    font-size: 1.2em
		}

		.invoice table .qty,.invoice table .total,.invoice table .unit 
		{
		    text-align: right;
		    font-size: 1.2em
		}



		.invoice table .unit 
		{
		    background: #ddd
		}

		.invoice table .total 
		{
		    background: #3989c6;
		    color: #fff
		}

		.invoice table tbody tr:last-child td 
		{
		    border: none
		}

		.invoice table tfoot td 
		{
		    background: 0 0;
		    border-bottom: none;
		    white-space: nowrap;
		    text-align: right;
		    padding: 10px 20px;
		    font-size: 1.2em;
		    border-top: 1px solid #aaa
		}

		.invoice table tfoot tr:first-child td 
		{
		    border-top: none
		}

		.invoice table tfoot tr:last-child td 
		{
		    color: #3989c6;
		    font-size: 1.4em;
		    border-top: 1px solid #3989c6
		}

		.invoice table tfoot tr td:first-child 
		{
		    border: none
		}

		.invoice footer 
		{
		    width: 100%;
		    text-align: center;
		    color: #777;
		    border-top: 1px solid #aaa;
		    padding: 8px 0
		}

		@media print 
		{
		    .invoice {
		        font-size: 11px!important;
		        overflow: hidden!important
		    }

		    .invoice footer {
		        position: absolute;
		        bottom: 10px;
		        page-break-after: always
		    }

		    .invoice>div:last-child {
		        page-break-before: always
		    }
		}
		table.one,.head1
		{
			float: left;
			width: 48%;
		}
		table.two,.head2
		{
			float: right;
			width: 48%;
		}

	</style>
	
</head>

<body>
	<h4> Dear {{ $name }}, </h4>
	<p> The date of booking {{  Carbon\Carbon::parse($bookingdate)->format('d M Y') }} with us is fast approching and the final balance {{ $total }} is now due. We hope you are looking forward to your trip, read on for details of how you can pay.  </p>
	<div class="container">
		<div id="invoice">
			
			<div class="invoice overflow-auto" style="border: 1px solid #000000;">
		        <div style="min-width: 600px">
		            <header>
			            <div class="row">
		                    <div class="col">
		                        <figure class="flight-logo">
		                            <img width="400px" height="100px" src="{{$message->embed(public_path('maillogo.png'))}}" data-holder-rendered="true" />
		                               
		                        </figure>
		                        
		                    </div>
		                </div>
		            </header>
		            <main>
		                <div class="row contacts">
                    		<div class="col invoice-details head2">
                      
		                        <h1 class="invoice-id">INVOICE {{ $voucherno }}</h1>
		                        <div class="date">Date of Invoice: {{  Carbon\Carbon::parse($confirmdate)->format('d M Y') }}
		                        </div>
		                    </div>


		                </div>
		            </main>

		            <table border="0" cellspacing="0" cellpadding="0" style="margin-top: 10px;">
	                    <thead>
	                        <tr>
	                            
	                            <th class="text-right"> Name</th>
	                            <th class="text-right"> Booking Date </th>
	                            <th class="text-right"> Total Guide </th>
	                            
	                            <th class="text-right"> Total </th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td class="text-right">{{ $name }}</td>
	                            <td class="text-right">{{  Carbon\Carbon::parse($bookingdate)->format('d M Y') }} </td>
	                            <td class="text-right"> {{ $totalguide }} </td>
	                            
	                            <td class="text-right">{{ $total }}</td>
	                        </tr>
	          
	                    </tbody> 
	                </table>

	                

	                <?php 
                		foreach($bookingdetails as $bookingdetail):
                		$hour_startdate = $bookingdetail->hour_startdate;
						$numberofhours = $bookingdetail->numberofhours;

						$daily_startdate = $bookingdetail->daily_startdate;
						$daily_enddate = $bookingdetail->daily_enddate;
						$tour_day = $bookingdetail->tour_day;

						$arrival_time = $bookingdetail->arrival_time;
						$departure_time = $bookingdetail->departure_time;

						$numberofadult = $bookingdetail->numberofadult;
						$numberofchild = $bookingdetail->numberofchild;

						$requirement = $bookingdetail->requirement;
						$cost = $bookingdetail->cost;

						$status = $bookingdetail->status;

						$place = $bookingdetail->place->name;

						$hourrate_string = $bookingdetail->guide->hourrate;
						$dailyrate_string = $bookingdetail->guide->dailyrate;

				        $hourrate_array = explode(' ', $hourrate_string);
				        $hourrate = $hourrate_array[0];

				        $dailyrate_array = explode(' ', $dailyrate_string);
				        $dailyrate = $dailyrate_array[0];

				        if ($daily_startdate == "0000-00-00") 
				        {
				            $subtotal = $hourrate * $numberofhours;
				        }

				        else 
				        {
				            $subtotal = $dailyrate * $tour_day;
				        }

				        $guide_image = $bookingdetail->guide->profile;
				        $guide_gender = $bookingdetail->guide->gender;
				        $guide_phone = $bookingdetail->guide->phone;
				        $guide_address = $bookingdetail->guide->address;

				        $guide_name = $bookingdetail->guide->user->name;
				        $guide_email = $bookingdetail->guide->user->email;
                	?>

                	<div class="col company-detail">
                        <h2 class="name">
                            {{ $place }}
                            </a>
                        </h2>
	                </div>

                	<table border="0" cellspacing="0" cellpadding="0">
	                    <tbody>

	                    	<tr>
							
		                        <td colspan="4">
		                        	<p> Tour Guide Info </p>
		                        	<figure class="flight-logo">
			                            <img width="170px" height="170px" src="{{$message->embed(public_path().$guide_image)}}" data-holder-rendered="true" />
			                        </figure>
		                        </td>

		                        <td colspan="4">
		                        	<p> {{ $guide_name }} </p>
		                        	<p> {{ $guide_phone }} </p>
		                        	<p> <a href="mailto:{{$guide_email}}">{{ $guide_email }}</a> 
		                        	</p>
		                        </td>
		                    </tr>

	                        <tr>
	                        	<th colspan="2"> Trip segment </th>
	                        	<th colspan="2"> Date </th>
	                        	<th colspan="2"> No Of Person </th>
	                        	<th colspan="2"> Time </th>
	                        </tr>

	                        <tr>
	                        	<td> From </td>
	                        	<td> To </td>
								
								<?php if ($daily_startdate == '0000-00-00'):?>
								
	                        	<td> Date </td>
	                        	<td> Hours </td>

	                        	<?php endif; ?>
						
								<?php if ($hour_startdate == '0000-00-00'):?>

	                        	<td> Start Date </td>
	                        	<td> End Date </td>

	                        	<?php endif; ?>

								
	                        	<td> Adult </td>
	                        	<td> Child </td>
								
	                        	<td> Departure </td>
	                        	<td> Arrival </td>
								
	                        </tr>

	                        <tr>
	                        	
	                        	<td> Yangon </td>
	                        	<td> {{ $place }} </td>

								<?php if ($daily_startdate == '0000-00-00'):?>
	                			<td> {{ Carbon\Carbon::parse($hour_startdate)->format('d M Y') }} 
	                			</td>

	                			<td> {{ $numberofhours }} Hr </td>

		                		<?php endif; ?>
								
								<?php if ($hour_startdate == '0000-00-00'):?>
								
		                		<td> {{ Carbon\Carbon::parse($daily_startdate)->format('d M Y') }}
		                		</td>

	                			<td> {{ Carbon\Carbon::parse($daily_enddate)->format('d M Y') }}
	                			</td>

		                		<?php endif; ?>

		                		<td> {{ $numberofadult }} </td>
		                		<td> {{ $numberofchild }} </td>

		                		<td> {{ $arrival_time }} </td>
								<td> {{ $departure_time }} </td>

	                        </tr>
	          
	                    </tbody> 
	                </table>

					<?php endforeach; ?>


		        </div>
		    </div>

		</div>
	</div>

</body>
</html>