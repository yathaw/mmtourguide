@extends('backend')

@section('content')

	<div class="breadcrumbs">
	    <div class="col-sm-12">
	        <div class="page-header float-left">
	            <div class="page-title">
	                <h1> Guide </h1>
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
	                        <strong class="card-title"> New Guide List </strong>
	                    </div>
	                    <div class="card-body">
	                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
	                            <thead>
	                                <tr>
	                                    <th> No </th>
	                                    <th> Register Date </th>
	                                    <th> Name  </th>
	                                    <th> License </th>
	                                    <th> Action </th>
	                                </tr>
	                            </thead>
	                            <tbody>
									
									@php $i=1; @endphp

									@foreach($news as $new)
									
									<tr>
										<td> {{ $i }} </td>
										<td> {{ $new->user->registerdate }} </td>
										<td> {{ $new->user->name }} </td>
										<td> {{ $new->license }} </td>
										<td>
											<a href="{{ asset('guide/confirm/'.$new->id) }}" class="btn btn-outline-success"> 
												<i class="fa fa-mail-reply"></i>	Confirm 
											</a>
											<a href="{{ route('admin.guide.show',$new->id) }}" class="btn btn-outline-primary"> 
												<i class="fa fa-exclamation-circle"></i>	Detail 
											</a>
											<a href="{{ route('admin.guide.destroy',$new->id) }}" class="btn btn-outline-danger"> 
												<i class="fa fa-times"></i>	Reject 
											</a>
										</td>
									</tr>

									@php $i++; @endphp
									@endforeach

	                                
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>


	        </div>
	    </div><!-- .animated -->
	</div><!-- .content -->

@endsection