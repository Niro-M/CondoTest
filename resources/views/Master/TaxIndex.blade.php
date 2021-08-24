@extends('Layout')
@section('title','Tax Details')



@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('CreateTax') }}>Create New Tax</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>TaxID</th>
                                                <th>TaxTypeName</th>
                                                <th>TaxPercentage</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                       
                                            @foreach($Tax as $row)

                                              <tr>
                                                <td><?php echo $row->TaxID; ?></td>
                                                <td><?php echo $row->TaxTypeName; ?></td>
                                                 <td><?php echo $row->TaxPercentage; ?></td>
                                                <td>
                                                    <a href='Taxshow/{{ $row->TaxID }}' class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
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
