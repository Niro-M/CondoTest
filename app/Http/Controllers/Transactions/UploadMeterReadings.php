<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use DB;

class UploadMeterReadings extends Controller
{
    
    public function index()
    {
        return view('Transactions.uploadMeterReadings');
    }

    public function uploadCsv(Request $request)
    {

    	
        $validator = Validator::make($request->all(), [
            'csv' => 'required',

        ]);
        if ($request->hasFile('csv')) {
            $csvName = time() . '.' . $request->csv->getClientOriginalExtension();
            $request->csv->move(public_path('uploads/csv'), $csvName);
            $datas = $this->importCsv($csvName);
            //dd($datas);
        }
           

           
            foreach ($datas  as $item)
            {

                 $clientID  = DB::table('clients')
                    ->select('clientID')
                    ->where('MappingNo', '=', $item['MappingNo'])
                    ->pluck('clientID')->first(); 

                 $ApartmentID = DB::table('apartments')
                    ->select('apartmentID')
                    ->where('ApartmentName', '=', $item['ApartmentName'])
                    ->pluck('apartmentID')->first(); 

                $chargeID = DB::table('charge_master')
                    ->select('chargeID')
                    ->where('ChargeName', '=', $item['ChargeCode'])
                    ->pluck('chargeID')->first(); 
                
                $time = strtotime($item['ReadingDate']);
                $ReadDate = date('Y-m-d',$time);                    

                

                $data_array[] = array(
                            'clientID' => $clientID,
                            'ApartmentID' => $ApartmentID,
                            'ReadingDate' => $ReadDate,
                            'ChargeID' => $chargeID,
                            'StartMeter' => 0,
                            'EndMeter' =>  $item['Ending Meter'],
                            'Consumption' => 0,

                );

                
            }

             
             //dd($data_array);
            $Response = DB::table('MeterReadings')->insert($data_array);  
            
            $BillData = DB::table('meterreadings')
            ->join('clients', 'meterreadings.clientID', '=', 'clients.clientID')
            ->join('client_aprtments', 'meterreadings.ApartmentID', '=', 'client_aprtments.ApartmentID')
            ->join('Apartments', 'client_aprtments.ApartmentID', '=', 'Apartments.ApartmentID')
            ->join('apartment_charges','meterreadings.chargeID', '=', 'apartment_charges.chargeid')
            ->join('charge_master','apartment_charges.chargeid', '=', 'charge_master.chargeid')
            ->select('MeterReadings.MeterReadingID', 'MeterReadings.ReadingDate' , 'MeterReadings.clientID', 'clients.clientName','meterreadings.ApartmentID','Apartments.ApartmentName','MeterReadings.ChargeID','charge_master.chargeName','MeterReadings.StartMeter','MeterReadings.EndMeter','MeterReadings.consumption')
            ->where('apartment_charges.ApartmentID', '=', 2)
            ->get();
            //dd($BillData);

            return view("Transactions.ReadUploadedData",['BillData' => $BillData]);
                    
    
        }
    

    public function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = [];

        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    public function importCsv($uploadFileName)
    {

        $file = public_path('uploads/csv/' . $uploadFileName);
        return $this->csvToArray($file);

    }

}
