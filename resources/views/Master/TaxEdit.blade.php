@extends('Layout')
@section('title','Edit Tax')



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

	
			
			<form method="Post" action="{{url('Taxupdate',[$Tax[0]->TaxID])}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
			<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Tax Description</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="TaxName" name="TaxName" value="<?php echo $Tax[0]->TaxTypeName; ?>" required>
			            
			        </div>
    			</div>

    			<br>

    			<div class="form-row">
			        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Tax Percentage</label>
			        <div class="col-sm-2">
			            <input class="form-control" type="number"  step="0.01" id="TaxPercentage" name="TaxPercentage" value="<?php echo $Tax[0]->TaxPercentage; ?>" required>
			            
			            <br>
	                	<button type="submit" class="btn btn-success">Submit</button>  

			        </div>
			            
			            
			    </div>
    			<div class="checkbox checkbox-success">
                    <input id="Inactive" type="checkbox" name="Inactive" >
                    <label for="Inactive">Inactive</label>
                </div>

    	</form>
</BODY>

@endsection