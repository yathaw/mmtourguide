$(document).ready(function()
{
	var total = 0; var tourguidecount = 0;
	showappointment();

	// Add Guide To localStorage
	$('.checkbtn').on('click', function()
	{
		var guideid = $(this).data('guideid');
		var guidename = $(this).data('guidename');
		var guideprofile = $(this).data('guideprofile');
		var placeid = $(this).data('placeid');
		var placename = $(this).data('placename');
		var hourrate = $(this).data('hourrate');
		var dailyrate = $(this).data('dailyrate');

		// HOUR RATE Data
		var hour_startdate = $('#startdate').val();
		var numberofhours = $('#numberofhours').val();

		// DAILY RATE Data
		var daily_startdate_input = $('#dp1').val();
		var daily_enddate_input = $('#dp2').val();

		if (daily_startdate_input && daily_enddate_input) 
		{
			var stardate = new Date($('#dp1').val());
			var enddate = new Date($('#dp2').val());

			var daily_startdate = stardate.getFullYear()+ '-' + (stardate.getMonth()+1)+ '-' + stardate.getDate();
			var daily_enddate = enddate.getFullYear()+ '-' + (enddate.getMonth()+1)+ '-' + enddate.getDate();
		}
		else
		{
			var daily_startdate = "";
			var daily_enddate ="";
		}


		var arrival_time = $('#arrival_time').val();
		var departure_time = $('#departure_time').val();

		var numberofadult = $('#numberofadult').val();
		var numberofchild = $('#numberofchild').val();

		var requirement = $('#requirement').val();

		var booking = localStorage.getItem('booking');

		if (!booking) 
		{
			var booking = '{"tourguide":[]}';
		}

		booking = JSON.parse(booking);

		var tourguide = booking.tourguide;

		var guidelist = {
			guideid : guideid, guidename : guidename, guideprofile: guideprofile,
			placeid : placeid, placename : placename,
			hourrate : hourrate, dailyrate : dailyrate,
			hour_startdate : hour_startdate, numberofhours : numberofhours,
			daily_startdate : daily_startdate, daily_enddate : daily_enddate,
			arrival_time : arrival_time, departure_time : departure_time,
			numberofadult : numberofadult, numberofchild : numberofchild,
			requirement : requirement


		};	
		
		booking.tourguide.push(guidelist);

		booking = JSON.stringify(booking);
		localStorage.setItem('booking',booking);

		window.location.href = $(this).data('href');


	});

	function showappointment()
	{
		var localstoragedata = localStorage.getItem('booking');

		if (localstoragedata) 
		{
			var localstoragedata = JSON.parse(localstoragedata);

			var tourguide = localstoragedata.tourguide; 
			tourguidecount = tourguide.length;

			var mytable =''; var j=0; var mytitle ='';
			$.each(tourguide,function (i,v) 
			{
				if(v)
				{
					var guideid = v.guideid;
					var guidename = v.guidename;
					var guideprofile = v.guideprofile;
					var placeid = v.placeid;
					var placename = v.placename;
					var hourrate_string = v.hourrate;
					var dailyrate_string = v.dailyrate;

					var hourrate_array = hourrate_string.split(" ");
					var hourrate = hourrate_array[0];
					var hourrate_unit = hourrate_array[1];

					var dailyrate_array = dailyrate_string.split(" ");
					var dailyrate = dailyrate_array[0];
					var dailyrate_unit = dailyrate_array[1];

					// HOUR RATE Data
					var hour_startdate = new Date(v.hour_startdate);
					var custom_hour_startdate = hour_startdate.getDate() + '-' + (hour_startdate.getMonth()+1) + '-' + hour_startdate.getFullYear() ;
					var numberofhours = v.numberofhours;

					// DAILY RATE Data
					var daily_startdate = new Date(v.daily_startdate);
					var custom_daily_startdate = daily_startdate.getDate() + '-' + (daily_startdate.getMonth()+1) + '-' + daily_startdate.getFullYear() ;

					var daily_enddate = new Date(v.daily_enddate);
					var custom_daily_enddate = daily_enddate.getDate() + '-' + (daily_enddate.getMonth()+1) + '-' + daily_enddate.getFullYear() ;

					var arrival_time = v.arrival_time;
					var departure_time = v.departure_time;

					var numberofadult = v.numberofadult;
					var numberofchild = v.numberofchild;

					var requirement = v.requirement;
					j++;

					var datesArray = [];
    				
    				while (daily_startdate <= daily_enddate) 
    				{
        				datesArray.push(new Date(daily_startdate));
        				daily_startdate.setDate(daily_startdate.getDate() + 1);
    				}

    				var daily_totalday = datesArray.length;

    				if (v.daily_startdate == "") 
    				{
    					var subtotal = hourrate * numberofhours;
    					var unit = hourrate_unit;
    				}
    				if(v.hour_startdate =="")
    				{
    					var subtotal = dailyrate * daily_totalday;
    					var unit = dailyrate_unit;
    				}


					mytable +='<div class="card mb-3">';
					mytable += '<div class="row no-gutters">';
					mytable += '<div class="col-md-2">'+
      								'<figure class="figure m-3">  <img src="'+guideprofile+'" class="figure-img img-fluid rounded" style="width:150px; height:150px" >'+
      								'<figcaption class="figure-caption"> <h5 class="text-center">'+guidename+'</h5> </figcaption>'+
      								'</figure>'+
    							'</div>';
    				mytable += '<div class="col-md-10">'+
    								'<div class="card-body">'+
    									'<h5 class="card-title"> Trip Plan for <b class="mr-5"> '+placename+' </b>'+
    									'<span class="badge badge-danger ml-5"> '+subtotal+' '+unit+' </span>'+
    									'<a href="javascript:void(0)" data-id='+i+' class="remove float-right"> <i class="fa fa-times-circle fa-lg" style="color: red"></i> </a>'
    									'</h5>';
    				mytable += '<p class="mt-3"> <table class="table"> ';
    				
    				if (v.daily_startdate =="") 
    				{
    					mytable += '<tr>'+
    								'<td> Tour Date : </td>'+
    								'<td> <span class="text-danger">'+ custom_hour_startdate+'</span> </td>'+
    								'</tr>';

    					mytable += '<tr>'+
    								'<td> No Of Hours : </td>'+
    								'<td> <span class="text-danger">'+ numberofhours+' Hr </span> </td>'+
    								'</tr>';

    				}
    				
    				if(v.hour_startdate =="")
    				{
    					mytable += '<tr>'+
    								'<td> Start Date : </td>'+
    								'<td> <span class="text-danger">'+ custom_daily_startdate+' </span> </td>'+
    								'</tr>';

    					mytable += '<tr>'+
    								'<td> End Date : </td>'+
    								'<td> <span class="text-danger">'+ custom_daily_enddate+' </span> </td>'+
    								'</tr>';


    				}

    				mytable += '<tr>'+
    								'<td> No Of Person : </td>'+
    								'<td> <span class="badge badge-success"> Adult : '+numberofadult+' </span> <span class="badge badge-warning"> Child : '+numberofchild+'</span>  </td>'+
    								'</tr>';

    				mytable += '<tr>'+
    								'<td> Arrival Time : </td>'+
    								'<td> <span>'+ arrival_time+' </span> </td>'+
    								'</tr>';

    				mytable += '<tr>'+
    								'<td> Departure Time : </td>'+
    								'<td> <span>'+ departure_time+' </span> </td>'+
    								'</tr>';


    				mytable += '</table> </p>';
    				mytable += '</div></div>';
    				mytable += '</div>';
    				mytable += '</div>';
					
    				total += subtotal ++;
    				
				}
			});

			$('#appointment_body').html(mytable);
			mytitle += '<div class="row">';
			mytitle += '<div class="col-9">';
			mytitle += '<h4 class="col-6 d-inline"> Tour Guide : '+tourguidecount+' Person  </h4>';
			mytitle += '<h4 class="d-inline float-right text-danger">'+total+' USD </h4>'
			mytitle += '</div>';
			mytitle += '<div class="col-3"> <a href="javascript:void(0)" class="btn btn-outline-success btn-block bookingconfirm"> Booking Confirm </a> </div>';
			mytitle += '</div>';

			$('#appointment_title').html(mytitle);

		}


	}

	// Remove Guide
	$('#appointment_body').on('click','.remove', function()
	{
		var id = $(this).data('id');
		var localstorageitem = localStorage.getItem('booking');

		var localstorageitem = JSON.parse(localstorageitem);
		var tourguide = localstorageitem.tourguide;
		
		$.each(tourguide,function (i,v) 
		{
			if (i == id) 
			{
				tourguide.splice(id,1);
			}
		})
		
		tourguide = JSON.stringify(localstorageitem);
		localStorage.setItem('booking',tourguide);
		showappointment();

	});

	// Booking Confirm Button
	$('.bookingconfirm').on('click', function()
	{
		var localstoragedata = localStorage.getItem('booking');
		var cartobj = JSON.parse(localstoragedata);

		var cartarr = cartobj.tourguide;

		var getTotal = total;
		var getTourguidecount = tourguidecount;

		console.log(getTotal);

		$.ajaxSetup({
          	headers: {
            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          	}
        });

        $.ajax({
            type:'POST',
            url:'bookingconfirm',
            data:{cart:cartarr, total:getTotal, tourguidecount:getTourguidecount},
            success:function(data)
            { 
				localStorage.clear();
				var link = 'bookingsuccess';
				window.location.href=link;

            }
        });
			

	});


})