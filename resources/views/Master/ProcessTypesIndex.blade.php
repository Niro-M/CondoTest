@extends('Layout')
@section('title','Process Type Details')



@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('CreateProcessType') }}>Create New Process Type</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>ProcessTypeID</th>
                                                <th>ProcessTypeName</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach($ProcessTypes As $row)

                                              <tr>
                                                <td><?php echo $row->ProcessTypeID; ?></td>
                                                <td><?php echo $row->ProcessTypeName ?></td>
                                                <td>
                                                    <a href='ProcessTypeShow/{{ $row->ProcessTypeID }}' class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
                                                    </a>

                                                </td>
                                                    
                                              </tr>
                                              
                                                @endforeach                                
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection
