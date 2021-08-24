@extends('Layout')
@section('title','Create New Complex')



@section('body')
	
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif


	<form method="Post" action="{{url('StoreComplex')}}">
		@csrf
		<br>

		<body>
			
			<div class="form-row">
            	<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Company Name</label>
				<div class="col-md-6">
				<select name="CompanyID" id="CompanyID" class="form-control" onclick="console.log($(this).val())" onchange="console.log('change is firing')" required>
				                    
				                    <!--placeholder-->
				                   			                    
				                    @foreach($Company as $Company)
					               <option  selected="selected" value="{{ $Company->CompanyID }}"> {{ $Company->CompanyName }}</option>
					               @endforeach

				</select>
				<br>
            </div>
        	</div>

			<div class="form-row">
		        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Complex Name</label>
		        <div class="col-sm-8">
		            <input class="form-control" type="text" id="ComplexName" name="ComplexName" value="{{ old('ComplexName') }}" required>
		            <br>
		        </div>
    		</div>
    		
    		<div class="form-row">
				<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Address</label>
	            <div class="col-sm-5">
	                <input class="form-control" type="Text" value="{{ old('Address') }}" id="example-text-input" id="Address" name="Address" required>
	                <br>
	            </div>
			</div>

    		<div class="form-row">
				<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Email Address</label>
	            <div class="col-sm-5">
	                   <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="" value="{{ old('Email') }}" id="Email" name="Email" required>
	              <br>                 
	            </div>
			</div>

			<div class="form-row">
				<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Phone</label>
	            <div class="col-sm-2">
	                <input class="form-control" type="Text" value="{{ old('Phone') }}" id="example-text-input" id="Phone" name="Phone" value="{{ old('Phone') }}"required>
	                <br>
	                <button type="submit" class="btn btn-success">Submit</button>  
	            </div>
			</div>
			
			
    	</form>

@endsection