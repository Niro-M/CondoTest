@extends('Layout')
@section('title','Create New Process Type')



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

	
			
			<form method="Post" action="{{url('StoreProcessType')}}">
			@csrf
			
				<br>
				
				<div class="form-row">
			        <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Process Type Name</label>
			        <div class="col-sm-6">
			            <input class="form-control" type="text" id="ProcessTypeName" name="ProcessTypeName" value="{{ old('ProcessTypeName') }}" required>
			             <br>
	                	<button type="submit" class="btn btn-success">Submit</button>  
			        </div>
    			</div>

    			

    	</form>
</BODY>

@endsection