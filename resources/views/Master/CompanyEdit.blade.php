
@extends('Layout')

    @section('title','Edit Company')

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


<form method="Post" action="{{url('CompanyUpdate',[$Company[0]->CompanyID])}}">
{{csrf_field()}}
<input type="hidden" name="_method" value="PATCH">

<br>

<body>
	
	<div class="form-row">
        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Name</label>
        <div class="col-sm-8">
            <input class="form-control" type="text" id="CompanyName" name="CompanyName" value="<?php echo $Company[0]->CompanyName; ?>" required>
            <br>
        </div>
    </div>

        

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Address</label>
            <div class="col-sm-5">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->Address; ?>" id="example-text-input" id="Address" name="Address" required>
                <br>
            </div>
		</div>


		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Email Address</label>
            <div class="col-sm-5">
                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php echo $Company[0]->Email; ?>" id="Email" name="Email" required>
              <br>                 
            </div>
		</div>

       
		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Phone</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text"  id="example-text-input" id="Phone" name="Phone" value="<?php echo $Company[0]->Phone; ?>"required>
                <br>
                
            </div>
		</div>

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Fax</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->Fax; ?>" id="example-text-input" id="Fax" name="Fax" required>
                <br>
                
            </div>
		</div>
          	
		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">VAT No</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->VatNo; ?>" id="example-text-input" id="VatNo" name="VatNo" required>
                <br>
                	
            </div>
		</div>
       
		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">SVAT No</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->SvatNo; ?>" id="example-text-input" id="SvatNo" name="SvatNo" required>
                <br>
                	
            </div>
		</div>
        
        <div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bank Name</label>
            <div class="col-sm-4">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->BankName; ?>" id="example-text-input" id="BankName" name="BankName" required >
                <br>
                	
            </div>
		</div>

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bank Code</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->BankCode; ?>" id="example-text-input" id="BankCode" name="BankCode" required>
                <br>
                
            </div>
		</div>

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Branch Name</label>
            <div class="col-sm-4">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->BranchName; ?>" id="example-text-input" id="BranchName" name="BranchName" required>
                <br>
                	
            </div>
		</div>

		<div class="form-row">
			<label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Branch Code</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->BranchCode; ?>" id="example-text-input" id="BranchCode" name="BranchCode" required>
                <br>
                
            </div>
		</div>

        <div class="form-row">
            <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bank Account No</label>
            <div class="col-sm-2">
                <input class="form-control" type="Text" value="<?php echo $Company[0]->CompanyAccNo; ?>" id="example-text-input" id="AcNo" name="AcNo">
                <br>
                
            </div>
        </div>



        <div class="form-row">
            <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Select Company Logo</label>
            <div class="col-sm-4">
                 
                <input type="file" class="form-control-file"  id="LogoPath" name="LogoPath" value="<?php echo $Company[0]->LogoImagePath; ?>">     
                <br>
                 <button type="submit" class="btn btn-success">Submit</button>  
            </div>
        </div>

        
        <div class="form-row">
            
                <div class="checkbox checkbox-success">
                    <input id="Inactive" type="checkbox" name="Inactive" >
                    <label for="Inactive">Inactive</label>
                </div>
                <br>
        </div>
            
       
               
        
</form>

</body>

@endsection