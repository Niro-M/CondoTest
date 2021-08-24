@extends('Layout')
@section('title','Bill Group Details')

@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('CreateBillGroup') }}>Create New Bill Group</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>BillGroupID</th>
                                                <th>BillGroupName</th>
                                                <th>BillGroupDisplayName</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                 @foreach($BillGroup As $row)

                                                  <tr>
                                                    <td><?php echo $row->BillGroupID; ?></td>
                                                    <td><?php echo $row->BillGroupName ?></td>
                                                    <td><?php echo $row->BillGroupDisplayName ?></td>
                                                    <td>
                                                        <a href='BillGroupShow/{{ $row->BillGroupID }}' class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
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
