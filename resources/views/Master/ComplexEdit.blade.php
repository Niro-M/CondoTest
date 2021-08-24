@extends('Layout')
@section('title','Edit Complex')



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


	<form method="Post" action="{{url('ComplexUpdate',[$Complex[0]->ComplexID])}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PATCH">
		<br>

		<body>
			
			<div class="form-row">
            	<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Company Name</label>
				<div class="col-md-6">
				<select name="CompanyID" id="CompanyID" class="form-control" onclick="console.log($(this).val())" onchange="console.log('change is firing')" required>
				                    
				                    <!--placeholder-->
				                   			                    
				                    @foreach($Company as $Company)
					               <option  selected="selected" value="{{ $Complex[0]->ComplexID }}"> {{ $Company->CompanyName }}</option>
					               @endforeach

				</select>
				<br>
            </div>
        	</div>

			<div class="form-row">
		        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Complex Name</label>
		        <div class="col-sm-8">
		            <input class="form-control" type="text" id="ComplexName" name="ComplexName" value="<?php echo $Complex[0]->ComplexName; ?>" required>
		            <br>
		        </div>
    		</div>
    		
    		<div class="form-row">
				<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Address</label>
	            <div class="col-sm-5">
	                <input class="form-control" type="Text" value="<?php echo $Complex[0]->Address; ?>" id="example-text-input" id="Address" name="Address" required>
	                <br>
	            </div>
			</div>

    		<div class="form-row">
				<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Email Address</label>
	            <div class="col-sm-5">
	                   <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="" value="<?php echo $Complex[0]->Email; ?>" id="Email" name="Email" required>
	              <br>                 
	            </div>
			</div>

			<div class="form-row">
				<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Phone</label>
	            <div class="col-sm-2">
	                <input class="form-control" type="Text" value="<?php echo $Complex[0]->Phone; ?>" id="example-text-input" id="Phone" name="Phone" value="{{ old('Phone') }}"required>
	                <br>
	                <button type="submit" class="btn btn-success">Submit</button>  
	            </div>
			</div>
			<div class="form-row">
            
                <div class="checkbox checkbox-success">
                    <input id="Inactive" type="checkbox" name="Inactive" >
                    <label for="Inactive">Inactive</label>
                </div>
                <br>
        </div>

    	</form>

@endsection