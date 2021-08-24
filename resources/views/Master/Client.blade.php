@extends('Layout')
@section('title','Create New Owner/Tanent')



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

	
			
			<form method="Post" action="{{url('StoreClient')}}">
			@csrf
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Client Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="ClientName" name="ClientName" value="{{ old('ClientName') }}" required>
			            <br>
			        </div>
    			</div>

    			<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Billing Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="BillingName" name="BillingName" value="{{ old('BillingName') }}" required>
			            <br>
			        </div>
    			</div>  			

        		 
        		<div class="form-row">
        			
        			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600"></label>
        				
		        		<div class="custom-control custom-radio custom-control-inline">
		                    <input type="radio" id="Owner" name="option1" class="custom-control-input form-control" value="Owner">
		                    <label class="custom-control-label" for="Owner">Owner</label>
		                </div>
		                <div class="custom-control custom-radio custom-control-inline">
		                    <input type="radio" id="Tanent" name="option1" class="custom-control-input form-control" value="Tanent">
		                    <label  class="custom-control-label" for="Tanent">Tanent</label>
		                </div>
		        			
	            		<br>
	            		<br>
	            </div>
        		
        		<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Phone</label>
			        <div class="col-sm-3">
			            <input class="form-control" type="text" id="Phone" name="Phone" value="{{ old('Phone') }}" required>
			            <br>
			        </div>
			         
			    </div>
			    <div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Fax</label>
			        <div class="col-sm-3">
			            <input class="form-control" type="text" id="Fax" name="Fax" value="{{ old('BillingFaxName') }}" required>
			            <br>
			        </div>
			         
			    </div>
			    <div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Email</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="Email" name="Email" value="{{ old('Email') }}" required>
			            <br>
			        </div>
			         
			    </div>
			    <div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Web login user name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="UserName" name="UserName" value="{{ old('UserName') }}" required>
			            <br>
			        </div>
			         
			    </div>

			    <div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Web login Password</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="password" id="Password" name="Password" value="{{ old('Password') }}" required>
			            <br>
			        </div>
			         
			    </div>


    			
                 <div class="form-row">
			       		        
                   <label for="example-date-input" class="col-sm-3 col-form-label font-weight-600">Billing Starting From</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="date" value="2021-02-06" id="toDate" name="toDate">
                        <br>
	                	
                    </div>  

                 </div>
    			
    			<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">File Upload Mapping No</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="MapNo" name="MapNo" value="{{ old('MapNo') }}" required>
			            <br>
			        </div>
			         
			    </div>

                 <div class="form-row">
		            <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Select Image</label>
		            <div class="col-sm-4">
		                 
		                <input type="file" class="form-control-file" id="exampleFormcontrolFile1" id="ImagePath" name="ImagePath" value="{{ old('ImagePath') }}">     
		                
		                <br>
		                  <button type="submit" class="btn btn-success">Submit</button>  
		           
		            </div>
		        </div>

    	</form>
</BODY>

@endsection