@extends('Layout')
@section('title','Apartment Details')



@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('CreateApartment') }}>Create New Apartment</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>ApartmentID</th>
                                                <th>ApartmentName</th>
                                            
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                       
                                            @foreach($Apartment as $row)

                                              <tr>
                                                <td><?php echo $row->ApartmentID; ?></td>
                                                <td><?php echo $row->ApartmentName; ?></td>
                                                <td>
                                                    <a href='Apartmentshow/{{ $row->ApartmentID }}' class="btn btn-success-soft btn-sm mr-1"><i class="far fa-eye"></i>
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
