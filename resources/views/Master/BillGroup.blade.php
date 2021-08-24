@extends('Layout')
@section('title','Create New Bill Group')



@section('body')
@csrf
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
	
</head>



<BODY>
	
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

	
			
			<form method="Post" action="{{url('StoreBillGroup')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bill Group Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="BillGroupName" name="BillGroupName" value="{{ old('BillGroupName') }}" required>
			            
			        </div>
    			</div>

    			<br>

    			<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bill Group Display Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="BillGroupDisplayName" name="BillGroupDisplayName" value="{{ old('BillGroupDisplayName') }}" required>
			            <br>
	                	<button type="submit" class="btn btn-success">Submit</button>  
	                	

			        </div>
    			</div>
    			

    	</form>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
 		<script>
 			
 			@if(Session::has('message'))
 			
 				toastr.success("success");
 				
 			@endif

 		</script>
    
    
</BODY>

@endsection