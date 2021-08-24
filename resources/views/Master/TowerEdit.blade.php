@extends('Layout')
@section('title','Edit Tower')



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

			
			<form method="Post" action="{{url('Towerupdate',[$Tower[0]->TowerID])}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
			<br>

			<div class="form-row">
            	<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Complex Name</label>
				<div class="col-md-6">
				<select name="ComplexID" id="ComplexID" class="form-control" onclick="console.log($(this).val())" onchange="console.log('change is firing')" required>
				                    
				                    <!--placeholder-->
				                   			                    
				                    @foreach($Complex as $Complex)
					               <option  selected="selected" value="{{ $Tower[0]->ComplexID }}"> {{ $Complex->ComplexName }}</option>
					               @endforeach

				</select>
			</div>

			</div>
				<br>

				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Tower Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="TowerName" name="TowerName" value="<?php echo $Tower[0]->TowerName; ?>" required>
			            
			        </div>
    			</div>

    			<br>

    			<div class="form-row">
			        
                        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">No of Floors</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" value="<?php echo $Tower[0]->NoofFloors; ?>" id="NoofFloors" name="NoofFloors">
                        </div>
                    	
    			</div>

    			<br>

    			<div class="form-row">
			         <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">No of Apartments</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" value="<?php echo $Tower[0]->NoofAprtments; ?>" id="NoofApartments" name="NoofApartments">
                        </div>
    			</div>
    			<br>
    			<div class="form-row">
			        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Sqft per Apartments</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="number"  step="0.01" id="SqftperAprtment" name="SqftperAprtment" value="<?php echo $Tower[0]->SqftPerAprtment; ?>" required>
			            
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