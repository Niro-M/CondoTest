@extends('Layout')
@section('title','Uploaded Meter Reading Data')



@section('body')
@csrf

<div class="card mb-4">
                            <div class="card-body">
                                <!--<p class="mb-4">Create New Company</code>.</p>-->
                                
                                <a href={{ url('UploadData') }}>Upload meter reading data from .csv.file</a>

                                    <br>
                                    <br>
                                    <br>

                                <div class="table-responsive">
                                    <table class="table display table-bordered table-striped table-hover basic">
                                        <thead>
                                            <tr>
                                                <th>MeterReadingID</th>
                                                <th>ReadingDate</th>
                                                <th>ClientID</th>
                                                <th>ClientName</th>
                                                <th>ApartmentID</th>
                                                <th>ApartmentName</th>
                                                <th>ChargeID</th>
                                                <th>chargeName</th>
                                                <th>StartMeter</th>
                                                <th>EndMeter</th>
                                                <th>consumption</th>

                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                               @foreach($BillData as $row)

                                              <tr>
                                                <td><?php echo $row->MeterReadingID; ?></td>
                                                <td><?php echo $row->ReadingDate; ?></td>
                                                <td><?php echo $row->clientID; ?></td>
                                                <td><?php echo $row->clientName; ?></td>
                                                <td><?php echo $row->ApartmentID; ?></td>
                                                <td><?php echo $row->ApartmentName; ?></td>
                                                <td><?php echo $row->ChargeID; ?></td>
                                                <td><?php echo $row->chargeName; ?></td>
                                                <td><?php echo $row->StartMeter; ?></td>
                                                <td><?php echo $row->EndMeter; ?></td>
                                                <td><?php echo $row->consumption; ?></td>

                                                    
                                              </tr>
                                              
                                                @endforeach                                        
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection
