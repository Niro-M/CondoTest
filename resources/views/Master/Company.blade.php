
@extends('Layout')
@section('title','Create New Company')



@section('body')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="Post" action="{{url('StoreCompany')}}">
@csrf
<br>

<body>
	

	<div class="form-group row">
        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Name</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" id="CompanyName" name="CompanyName" value="{{ old('CompanyName') }}" required>
            
        </div>
    </div>

        

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Address</label>
            <div class="col-sm-5">
                <input class="form-control" type="Text" value="{{ old('Address') }}" id="example-text-input" id="Address" name="Address" required>
                <br>
            </div>
		</div>


		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Email Address</label>
            <div class="col-sm-5">
                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{ old('Email') }}" id="Email" name="Email" required>
              <br>                 
            </div>
		</div>

       
		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Phone</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="{{ old('Phone') }}" id="example-text-input" id="Phone" name="Phone" value="{{ old('Phone') }}"required>
                <br>
                
            </div>
		</div>

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Fax</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="{{ old('Fax') }}" id="example-text-input" id="Fax" name="Fax" required>
                <br>
                
            </div>
		</div>
          	
		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">VAT No</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="{{ old('VatNo') }}" id="example-text-input" id="VatNo" name="VatNo" required>
                <br>
                	
            </div>
		</div>
       
		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">SVAT No</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="{{ old('SvatNo') }}" id="example-text-input" id="SvatNo" name="SvatNo" required>
                <br>
                	
            </div>
		</div>
        
        <div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bank Name</label>
            <div class="col-sm-4">
                <input class="form-control" type="Text" value="{{ old('BankName') }}" id="example-text-input" id="BankName" name="BankName" required >
                <br>
                	
            </div>
		</div>

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bank Code</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="{{ old('BankCode') }}" id="example-text-input" id="BankCode" name="BankCode" required>
                <br>
                
            </div>
		</div>

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Branch Name</label>
            <div class="col-sm-4">
                <input class="form-control" type="Text" value="{{ old('BranchName') }}" id="example-text-input" id="BranchName" name="BranchName" required>
                <br>
                	
            </div>
		</div>

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Branch Code</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="{{ old('BranchCode') }}" id="example-text-input" id="BranchCode" name="BranchCode" required>
                <br>
                
            </div>
		</div>

        <div class="form-row">
            <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bank Account No</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="{{ old('AcNo') }}" id="example-text-input" id="AcNo" name="AcNo">
                <br>
                
            </div>
        </div>



        <div class="form-row">
            <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Select Company Logo</label>
            <div class="col-sm-4">
                 
                <input type="file" class="form-control-file" id="exampleFormcontrolFile1" id="LogoPath" name="LogoPath" value="{{ old('LogoPath') }}">     
                
                <br>
                  <button type="submit" class="btn btn-success">Submit</button>  
           
            </div>
        </div>

        
           
        
</form>

</body>

@endsection

