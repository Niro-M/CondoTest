@extends('Layout')
@section('title','Create New Tax')



@section('body')
@csrf


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

	
			
			<form method="Post" action="{{url('StoreTax')}}">
			@csrf
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Tax Description</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="TaxName" name="TaxName" value="{{ old('TaxName') }}" required>
			            
			        </div>
    			</div>

    			<br>

    			<div class="form-row">
			        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Tax Percentage</label>
			        <div class="col-sm-2">
			            <input class="form-control" type="number"  step="0.01" id="TaxPercentage" name="TaxPercentage" value="" required>
			            
			            <br>
	                	<button type="submit" class="btn btn-success">Submit</button>  

			        </div>
			            
			            
			    </div>
    			

    	</form>
</BODY>

@endsection