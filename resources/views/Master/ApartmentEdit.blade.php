@extends('Layout')
@section('title','Edit Apartment Details')



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

			
			<form method="Post" action="{{url('Apartmentupdate',[$Apartment[0]->ApartmentID])}}">
			{{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="ApartmentID" value="<?php echo $Apartment[0]->ApartmentID; ?>">
			<br>

			<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Apartment Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="ApartmentName" name="ApartmentName" value="<?php echo $Apartment[0]->ApartmentName; ?>" required>
			            
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
                            <input class="form-control" type="number" value="<?php echo $Apartment[0]->FloorNo; ?>" id="FloorNo" name="FloorNo">
                            <br>
                           
                        </div>
                    	

    			</div>
    			<div class="form-row">
			        
                        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Sq:Feet</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" step="0.01" value="<?php echo $Apartment[0]->SqFeet; ?>" id="SqFeet" name="SqFeet">
                            <br>
                            
                        </div>
                    	<br>

    			</div>
    			<div class="form-row">
			        
                        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Share Value</label>
                        <div class="col-sm-2">
                            <input class="form-control" type="number" step="0.01" value="<?php echo $Apartment[0]->ShareValue; ?>" id="ShValue" name="ShValue">
                            <br>
                            
                        </div>
                    	

    			</div>
                <div class="form-row">
                    <label class="col-sm-3 col-form-label font-weight-600">Select Applicable Charges</label>
                    <div class="col-md-4">
                        <select multiple="multiple" name="Charge[]" class="select2">
                           
                        @foreach($ChargeDrop as $ChDrop)
                                <option value="{{$ChDrop->ChargeID}}">{{$ChDrop->ChargeName}}</option>
                        @endforeach 
                        </select>
                        <br>
                        <br>
                        <div class="checkbox checkbox-success">
                            <input id="Inactive" type="checkbox" name="Inactive" >
                                <label for="Inactive">Inactive</label>
                            </div>  
                            <br>
                            <button type="submit" class="btn btn-success">Submit</button>  
                    </div>
                </div>
    			<br>
                <div class="card mb-4">
                   <div class="card-body">

                     <div class="table-responsive">
                                        <table class="table display table-bordered table-striped table-hover basic">
                                            <thead>
                                                <tr>
                                                    <th>ChargeID</th>
                                                    <th>ChargeName</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @foreach($Charge as $row)

                                                  <tr>
                                                    <td><?php echo $row->ChargeID; ?></td>
                                                    <td><?php echo $row->ChargeName; ?></td>
                                                  </tr>
                                              
                                                @endforeach                                           
                                               
                                            </tbody>
                                        </table>
                     </div>
                   </div>
                 </div>  			

    	</form>

        <script>

            function setSelectedIndex(s, v)
             {

                for ( var i = 0; i < s.options.length; i++ ) {

                    if ( s.options[i].text == v ) {

                        s.options[i].selected = true;

                        return;

                    }

                }

             }

            setSelectedIndex(document.getElementById('TowerID'),  "<?php echo $Apartment[0]->TowerName; ?>");
            
            

</script>

</BODY>

@endsection