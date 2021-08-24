@extends('Layout')
@section('title','Edit Owner/Tanent Details')



@section('body')



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

	
			
			<form method="Post" action="{{url('Clientupdate',[$client[0]->ClientID])}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
			<input type="hidden" name="clientID" value="<?php echo $client[0]->ClientID; ?>">
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Client Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="ClientName" name="ClientName" value="<?php echo $client[0]->ClientName; ?>" required>
			            <br>
			        </div>
    			</div>

    			<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Billing Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="BillingName" name="BillingName" value="<?php echo $client[0]->BillingName; ?>" required>
			            <br>
			        </div>
    			</div>  			

        		 
        		<div class="form-row">
        			
        			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600"></label>
        				
		        		<div class="custom-control custom-radio custom-control-inline">
		                    <input type="radio" id="Owner" name="option1" class="custom-control-input form-control" value="IsOwner">
		                    <label class="custom-control-label" for="Owner">Owner</label>
		                </div>
		                <div class="custom-control custom-radio custom-control-inline">
		                    <input type="radio" id="Tanent" name="option1" class="custom-control-input form-control" value="IsTanent">
		                    <label  class="custom-control-label" for="Tanent">Tanent</label>
		                </div>
		        			
	            		<br>
	            		<br>
	            </div>
        		
        		<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Phone</label>
			        <div class="col-sm-3">
			            <input class="form-control" type="text" id="Phone" name="Phone" value="<?php echo $client[0]->Phone; ?>" required>
			            <br>
			        </div>
			         
			    </div>
			    <div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Fax</label>
			        <div class="col-sm-3">
			            <input class="form-control" type="text" id="Fax" name="Fax" value="<?php echo $client[0]->Fax; ?>" required>
			            <br>
			        </div>
			         
			    </div>
			    <div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Email</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="Email" name="Email" value="<?php echo $client[0]->Email; ?>" required>
			            <br>
			        </div>
			         
			    </div>
			    <div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Web login user name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="UserName" name="UserName" value="<?php echo $client[0]->WebLoginUserName; ?>" required>
			            <br>
			        </div>
			         
			    </div>

			    <div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Web login Password</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="password" id="Password" name="Password" value="<?php echo $client[0]->WebLoginPassword; ?>" required>
			            <br>
			        </div>
			         
			    </div>


    			
                 <div class="form-row">
			       		        
                   <label for="example-date-input" class="col-sm-3 col-form-label font-weight-600">Billing Starting From</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="date" value="<?php echo $client[0]->BillStartingFrom; ?>" id="toDate" name="toDate">
                        <br>
	                	
                    </div>  

                 </div>
    			<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">File Upload Mapping No</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="MapNo" name="MapNo" value="<?php echo $client[0]->MappingNo; ?>" required>
			            <br>
			        </div>
			         
			    </div>
                 <div class="form-row">
		            <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Select Image</label>
		            <div class="col-sm-4">
		                 
		                <input type="file" class="form-control-file" id="exampleFormcontrolFile1" id="ImagePath" name="ImagePath" value="{{ old('ImagePath') }}">     
		                
		                <br>
		                  
		           
		            </div>
		        </div>

		        <div class="form-row">
                    <label class="col-sm-3 col-form-label font-weight-600">Select Owned Apartments</label>
                    <div class="col-md-4">
                        <select multiple="multiple" name="ClientAp[]" class="select2">
                            
                        	 @foreach($Apartments as $Apartments)
                                <option value="{{$Apartments->ApartmentID}}">{{$Apartments->ApartmentName}}</option>
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

		        <div class="card mb-4">
                   <div class="card-body">

	    			 <div class="table-responsive">
	                                    <table class="table display table-bordered table-striped table-hover basic">
	                                        <thead>
	                                            <tr>
	                                                <th>ApartmentID</th>
	                                                <th>ApartmentName</th>
	                                               
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                            @foreach($ClientAp as $row)

                                              <tr>
                                                <td><?php echo $row->ApartmentID; ?></td>
                                                <td><?php echo $row->ApartmentName; ?></td>
                                                
                                                </td>
                                              </tr>
                                              
                                                @endforeach	                                         
	                                           
	                                        </tbody>
	                                    </table>
	                 </div>
	               </div>
	             </div>

    	</form>
    	<script type="text/javascript">
    		
    		if (<?php echo $client[0]->IsTanent; ?> == 0)
			{
				Owner.setAttribute('checked', 'true');

			} else {
              Tanent.setAttribute('checked', 'true');
            };


    		

    	</script>
</BODY>

@endsection