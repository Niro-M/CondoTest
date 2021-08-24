@extends('Layout')
@section('title','Create New Apartment')



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

			
			<form method="Post" action="{{url('StoreApartment')}}">
			@csrf
			<br>

			<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Apartment Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="ApartmentName" name="ApartmentName" value="{{ old('ApartmentName') }}" required>
			            
			        </div>
    			</div>

    			<br>

			<div class="form-row">
            	<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Tower Name</label>
				<div class="col-md-6">
				<select name="TowerID" id="TowerID" class="form-control" onclick="console.log($(this).val())" onchange="console.log('change is firing')" required>
				                    
				                    <!--placeholder-->
				                   			                    
				                    @foreach($Tower as $tower)
					               <option  selected="selected" value="{{ $tower->TowerID }}"> {{ $tower->TowerName }}</option>
					               @endforeach

				</select>
			</div>

			</div>
				<br>

				

    			<div class="form-row">
			        
                        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Floor No</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" value="1" id="FloorNo" name="FloorNo">
                            <br>
                           
                        </div>
                    	

    			</div>
    			<div class="form-row">
			        
                        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Sq:Feet</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" step="0.01" value="1" id="SqFeet" name="SqFeet">
                            <br>
                            
                        </div>
                    	<br>

    			</div>
    			<div class="form-row">
			        
                        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Share Value</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" step="0.01" value="1" id="ShValue" name="ShValue">
                            <br>
                            
                            <button type="submit" class="btn btn-success">Submit</button>  
                        </div>
                    	

    			</div>
    			  			

    	</form>
</BODY>

@endsection