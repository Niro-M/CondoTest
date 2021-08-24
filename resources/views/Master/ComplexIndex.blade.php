@extends('Layout')
@section('title','Complex Details')



@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('CreateComplex') }}>Create New Complex</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>ComplexID</th>
                                                <th>ComplexName</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                       
                                            @foreach($Complex as $row)

                                              <tr>
                                                <td><?php echo $row->ComplexID; ?></td>
                                                <td><?php echo $row->ComplexName; ?></td>
                                                <td><?php echo $row->Address; ?></td>
                                                <td><?php echo $row->Email; ?></td>
                                                <td><?php echo $row->Phone; ?></td>
                                                <td>
                                                    <a href='ComplexShow/{{ $row->ComplexID }}' class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
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
