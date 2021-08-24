@extends('Layout')
@section('title','Company Details')



@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('CreateCompany') }}>Create New Company</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>CompanyID</th>
                                                <th>Company Name</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Fax</th>
                                                <th>Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                                                       
                                            @foreach($Company as $row)

                                              <tr>
                                                <td><?php echo $row->CompanyID; ?></td>
                                                <td><?php echo $row->CompanyName; ?></td>
                                                <td><?php echo $row->Address; ?></td>
                                                <td><?php echo $row->Email; ?></td>
                                                <td><?php echo $row->Phone; ?></td>
                                                <td><?php echo $row->Fax; ?></td>
                                                <td>
                                                    <a href="show/{{ $row->CompanyID }}" class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
                                                    </a>

                                                </td>
                                                <!--<td>
                                                    <a href='Test' class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
                                                    </a>
                                                -->
                                                </td>    
                                              </tr>
                                              
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection
