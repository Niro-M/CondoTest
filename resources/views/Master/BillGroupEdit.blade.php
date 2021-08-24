@extends('Layout')
@section('title','Edit Bill Group')



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

	
			
			<form method="Post" action="{{url('BillGroupUpdate',[$BillGroup[0]->BillGroupID])}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
			<br>
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bill Group Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="BillGroupName" name="BillGroupName" value="<?php echo $BillGroup[0]->BillGroupName; ?>" required>
			            
			        </div>
    			</div>

    			<br>

    			<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Bill Group Display Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="BillGroupDisplayName" name="BillGroupDisplayName" value="<?php echo $BillGroup[0]->BillGroupDisplayName; ?>" required>
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