@extends('Layout')
@section('title','Charge Details')



@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('CreateCharge') }}>Create New Charge</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>ChargeID</th>
                                                <th>ChargeName</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                       
                                            @foreach($Charge as $row)

                                              <tr>
                                                <td><?php echo $row->ChargeID; ?></td>
                                                <td><?php echo $row->ChargeName; ?></td>
                                                <td>
                                                    <a href='Chargeshow/{{ $row->ChargeID }}' class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
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
