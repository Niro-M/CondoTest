@extends('Layout')
@section('title','Client Details')



@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('CreateClient') }}>Create New Owner/Tanent</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>ClientID</th>
                                                <th>ClientName</th>
                                            
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                       
                                            @foreach($Client as $row)

                                              <tr>
                                                <td><?php echo $row->ClientID; ?></td>
                                                <td><?php echo $row->ClientName; ?></td>
                                                <td>
                                                    <a href='Clientshow/{{ $row->ClientID }}' class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
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
