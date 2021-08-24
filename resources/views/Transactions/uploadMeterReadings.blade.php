@extends('Layout')
@section('title','Upload Meter Readings')



@section('body')
@csrf


<BODY>
	
    <form action="{{route('upload.cv')}}" method="Post" enctype="multipart/form-data">
        {{csrf_field()}}
        <br>
    
	

    <div class="form-row">
            <label for="example-text-input" class="col-sm-3 col-form-label font-weight-600">Select Meter Reading .Csv File</label>
            <div class="col-sm-4">
                <input type="file" name="csv" id="">
                <br>
                <br>
            <button type="submit" class="btn btn-success" value="Upload">Upload</button>
            <br>
            <br>
      </div>      

      
      
    </form>

    
</BODY>

@endsection