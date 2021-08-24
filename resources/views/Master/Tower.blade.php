@extends('Layout')
@section('title','Create New Tower')



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

			
			<form method="Post" action="{{url('StoreTower')}}">
			@csrf
			<br>

			<div class="form-row">
            	<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Complex Name</label>
				<div class="col-md-6">
				<select name="ComplexID" id="ComplexID" class="form-control" onclick="console.log($(this).val())" onchange="console.log('change is firing')" required>
				                    
				                    <!--placeholder-->
				                   			                    
				                    @foreach($Complex as $Complex)
					               <option  selected="selected" value="{{ $Complex->ComplexID }}"> {{ $Complex->ComplexName }}</option>
					               @endforeach

				</select>
			</div>

			</div>
				<br>

				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Tower Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="TowerName" name="TowerName" value="{{ old('TowerName') }}" required>
			            
			        </div>
    			</div>

    			<br>

    			<div class="form-row">
			        
                        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">No of Floors</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" value="1" id="NoofFloors" name="NoofFloors">
                        </div>
                    	
    			</div>

    			<br>

    			<div class="form-row">
			         <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">No of Apartments</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" value="1" id="NoofApartments" name="NoofApartments">
                        </div>
    			</div>
    			<br>
    			<div class="form-row">
			        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Sqft per Apartments</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="number"  step="0.01" id="SqftperAprtment" name="SqftperAprtment" value="" required>
			            
			            <br>
	                	<button type="submit" class="btn btn-success">Submit</button>  

			        </div>
			            
			            
			    </div>
    			

    	</form>
</BODY>

@endsection