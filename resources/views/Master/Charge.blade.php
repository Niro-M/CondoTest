@extends('Layout')
@section('title','Create New Charge')



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

	
			
			<form method="Post" action="{{url('StoreCharge')}}">
			@csrf
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Charge Description</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="ChargeName" name="ChargeName" value="{{ old('ChargeName') }}" required>
			            <br>
			        </div>
    			</div>

    			<div class="form-row">
            	<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bill Group Name</label>
					<div class="col-md-6">
				<select name="BillGroupID" id="BillGroupID" class="form-control" onclick="console.log($(this).val())" onchange="console.log('change is firing')" required>
					                    
					                    <!--placeholder-->
					                   			                    
					                    @foreach($BillGroup as $row)
						               			<option  selected="selected" value="{{ $row->BillGroupID }}"> {{ $row->BillGroupName }}</option>
						               @endforeach

					</select>
					<br>
	            	</div>
        		</div>    			

        		<div class="form-row">
	            	<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bill Process Method</label>
						<div class="col-md-6">
						<select name="ProcessTypeID" id="ProcessTypeID" class="form-control" onclick="console.log($(this).val())" onchange="console.log('change is firing')" required>
						                    
						                    <!--placeholder-->
						                   			                    
						                    @foreach($ProcessType as $row)
							               			<option  selected="selected" value="{{ $row->ProcessTypeID }}"> {{ $row->ProcessTypeName}}</option>
							               @endforeach

						</select>
						<br>
		            	</div>
        		</div>   
        		<div class="form-row">
        			
        			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600"></label>
        				
		        		<div class="custom-control custom-radio custom-control-inline">
		                    <input type="radio" id="Periodically" name="option1" class="custom-control-input form-control" value="Periodically">
		                    <label class="custom-control-label" for="Periodically">Process Periodically</label>
		                </div>
		                <div class="custom-control custom-radio custom-control-inline">
		                    <input type="radio" id="Quarterly" name="option1" class="custom-control-input form-control" value="Quarterly">
		                    <label  class="custom-control-label" for="Quarterly">Process Quarterly</label>
		                </div>
		        		<div class="custom-control custom-radio custom-control-inline">
		                    <input type="radio" id="Yearly" name="option1" class="custom-control-input form-control" value="Yearly">
		                    <label class="custom-control-label" for="Yearly">Process Yearly</label>
		                </div>	
	            		<br>
	            		<br>
	            </div>
        		
        		<div class="form-row">
			        <label for="example-number-input" class="col-sm-3 col-form-label font-weight-600">Rate per Unit </label>
			        <div class="col-sm-2">
			            <input class="form-control" type="number"  step="0.01" id="RatePerUnit" name="RatePerUnit" value="" required>
			            <br>
			        </div>
			         
			    </div>
    			<div class="form-row">
			       		        
                   <label for="example-date-input" class="col-sm-3 col-form-label font-weight-600">Rate Appilicable From</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="date" value="2021-02-06" id="fromDate" name="fromDate">
                    </div>  

                 </div>
                 <br>
                 <div class="form-row">
			       		        
                   <label for="example-date-input" class="col-sm-3 col-form-label font-weight-600">Rate Appilicable To</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="date" value="2021-02-06" id="toDate" name="toDate">
                        <br>
	                	<button type="submit" class="btn btn-success">Submit</button> 
                    </div>  

                 </div>
    			

    	</form>
</BODY>

@endsection