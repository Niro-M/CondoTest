@extends('Layout')
@section('title','Edit Process Type')



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

	
			
			<form method="Post" action="{{url('ProcessTypesupdate',[$ProcessType[0]->ProcessTypeID])}}">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">
			<br>
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Process Type Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="ProcessTypeName" name="ProcessTypeName" value="<?php echo $ProcessType[0]->ProcessTypeName; ?>" required>
			             <br>
	                	<button type="submit" class="btn btn-success">Submit</button>  
			        </div>
    			</div>

    			

    	</form>
</BODY>

@endsection