@extends('Layout')
@section('title','Edit Charge Details')



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

	
			
			<form method="Post" action="{{url('Chargeupdate',[$Charge[0]->ChargeID])}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
			<input type="hidden" name="ChargeID" value="<?php echo $Charge[0]->ChargeID; ?>">
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Charge Description</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="ChargeName" name="ChargeName" value="<?php echo $Charge[0]->ChargeName; ?>" required>
			            <br>
			        </div>
    			</div>

    			<div class="form-row">
            	<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bill Group Name</label>
					<div class="col-md-6">
				<select name="BillGroupID" id="BillGroupID" class="form-control" onclick="console.log($(this).val())" onchange="console.log('change is firing')" required>
					                    
					                    <!--placeholder-->
					                   			                    
					                    @foreach($BillGroup as $row)
						               			<option  selected="selected" value="{{ $row->BillGroupID }}">{{ $row->BillGroupName }}</option>
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
			            <input class="form-control" type="number"  step="0.01" id="RatePerUnit" name="RatePerUnit" value="<?php echo $Charge[0]->UnitRate; ?>" required>
			            <br>
			        </div>
			         
			    </div>
    			<div class="form-row">
			       		        
                   <label for="example-date-input" class="col-sm-3 col-form-label font-weight-600">Rate Appilicable From</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="date" value="<?php echo $Charge[0]->ApplicableFrom; ?>" id="fromDate" name="fromDate">
                    </div>  

                 </div>
                 <br>
                 <div class="form-row">
			       		        
                   <label for="example-date-input" class="col-sm-3 col-form-label font-weight-600">Rate Appilicable To</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="date" value="<?php echo $Charge[0]->ApplicableTo; ?>" id="toDate" name="toDate">
                        <br>
	                	
                    </div>  

                 </div>

                  <div class="form-row">
                    <label class="col-sm-3 col-form-label font-weight-600">Select Applicable Taxes</label>
                    <div class="col-md-4">
                        <select multiple="multiple" name="ChargeTax[]" class="select2">
                            <!--<option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option disabled="disabled" value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                            <option value="bmw">BMW</option>
                            <option disabled="disabled" value="porsche">Porche</option>
                            <option selected="selected" value="ferrari">Ferrari</option>
                            <option  value="hyundai">Hyundai</option>
                            <option value="mitsubishi">Mitsubishi</option>
                        -->
                        @foreach($TaxDrop as $TaxDrop)
                                <option value="{{$TaxDrop->TaxID}}">{{$TaxDrop->TaxTypeName}}</option>
                        @endforeach	

                        </select>
                        <br>
                        <br>
                         <div class="checkbox checkbox-success">
		                    <input id="Inactive" type="checkbox" name="Inactive" >
		                    <label for="Inactive">Inactive</label>
		                </div>  
                         <br>
                         <br>
                    	<button type="submit" class="btn btn-success">Submit</button> 
                    </div>
                    
                </div>

    			<div class="card mb-4">
                   <div class="card-body">

	    			 <div class="table-responsive">
	                                    <table class="table display table-bordered table-striped table-hover basic">
	                                        <thead>
	                                            <tr>
	                                                <th>TaxID</th>
	                                                <th>TaxTypeName</th>
	                                               
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                             @foreach($Tax as $row)

                                              <tr>
                                                <td><?php echo $row->TaxID; ?></td>
                                                <td><?php echo $row->TaxTypeName; ?></td>
                                                <!--<td>
                                                    <a href='Remove/{{ $row->TaxID }}' class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i>
                                                    </a>
												-->
                                                </td>
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

			setSelectedIndex(document.getElementById('BillGroupID'),  "<?php echo $Charge[0]->BillGroupName; ?>");
			setSelectedIndex(document.getElementById('ProcessTypeID'),  "<?php echo $Charge[0]->ProcessTypeName; ?>");

			let Periodically = document.querySelector('#Periodically');
			let Quarterly = document.querySelector('#Quarterly');
			let Yearly = document.querySelector('#Yearly');

			if (<?php echo $Charge[0]->IsPeriod; ?> == 1)
			{
				Periodically.setAttribute('checked', 'true');

			} else if (<?php echo $Charge[0]->IsQuater; ?> == 1) {
              Quarterly.setAttribute('checked', 'true');
            } else {
              Yearly.setAttribute('checked', 'true');
            };
			

</script>
</BODY>

@endsection