<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\ApartmentModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\HomeController;
use DB;


class ApartmentMaster extends Controller
{
   
    public function index()
    {
        $Apartment =DB::table('Apartments')->get();
        return view("Master.ApartmentIndex",['Apartment' => $Apartment]);
    }

    
    public function create()
    {
        $Tower =DB::table('tower')->get();
        return view("Master.Apartment",['Tower' => $Tower]);
    }

    
    public function store(Request $request)
    {
         $input = $request->all();
         //dump($input);

          $validatedData = $request->validate([
            'ApartmentName'=>['bail','required'],
            'TowerID'=>['bail','required'],
            'FloorNo'=>['bail','required'],
            'SqFeet'=>['bail','required'],
            'ShValue'=>['bail','required'],
            ]);

          $p = new ApartmentModel(); 
             $p->ApartmentName =$request->input('ApartmentName'); 
             $p->TowerID =$request->input('TowerID'); 
             $p->FloorNo =$request->input('FloorNo'); 
             $p->SqFeet =$request->input('SqFeet'); 
             $p->ShareValue =$request->input('ShValue'); 
             $p->Inactive =0;

            $ApartmentData =array(
            'ApartmentName' => $p->ApartmentName,
            'TowerID' => $p->TowerID,
            'FloorNo'=>$p->FloorNo,
            'SqFeet'=>$p->SqFeet,
            'ShareValue'=>$p->ShareValue,
            'Inactive'=>$p->Inactive,
            );

            $Response = DB::table('Apartments')->insert($ApartmentData);
            

            if($Response)
            {
                 $Apartment =DB::table('Apartments')->get();
                 return view("Master.ApartmentIndex",['Apartment' => $Apartment]);
            }

    }

    
    public function show($id)
    {
        $Apartment = DB::table('Apartments')
            ->join('tower', 'Apartments.TowerID', '=', 'tower.TowerID')
            ->select('Apartments.*', 'tower.TowerName')
            ->where('ApartmentID', '=', $id)
            ->get();
        
        $Tower =DB::table('tower')->get();

        $Charge  = DB::table('Apartment_Charges')
            ->join('charge_master', 'Apartment_Charges.ChargeID', '=', 'charge_master.Chargeid')
            ->where('ApartmentID', '=', $id)
            ->get();

        $ChargeDrop =DB::table('Charge_Master')->get();   

        return view("Master.ApartmentEdit",['Apartment' => $Apartment, 'Tower' => $Tower, 'Charge' => $Charge, 'ChargeDrop' => $ChargeDrop ]);

    }


    
    public function update(Request $request)
    {
         $Apartment =DB::table('Apartments')->where('ApartmentID', $request->input('ApartmentID'))->first();
         
           $Apartment->ApartmentID=request('ApartmentID');
           $Apartment->ApartmentName=request('ApartmentName');
           $Apartment->TowerID=request('TowerID');
           $Apartment->FloorNo=request('FloorNo');
           $Apartment->SqFeet=request('SqFeet');
           $Apartment->ShareValue=request('ShValue');
          
            $IsInactive = request('Inactive');

            if ($IsInactive=='on')
            {
              $IsInactive = 1;
            }
            else
            {
              $IsInactive=0;
            } 


           $ApartmentData =array(
            'ApartmentID' => $Apartment->ApartmentID,
            'ApartmentName' => $Apartment->ApartmentName,
            'TowerID' => $Apartment->TowerID,
            'FloorNo' => $Apartment->FloorNo,
            'SqFeet' => $Apartment->SqFeet,
            'ShareValue'=>$Apartment->ShareValue,
            'Inactive' => $IsInactive
          );

          $ApartmentCharge =  DB::table('Apartment_charges')->where('ApartmentID', $request->input('ApartmentID'))->first();  



          if ($ApartmentCharge == null)
          {
           
          
           if(isset($request->Charge))
           { 
            foreach ($request->Charge as $Ch)
            {
               
               $ApCharge =array(
                    'ApartmentID' => $Apartment->ApartmentID, 
                    'ChargeID' => $Ch);

               $Response = DB::table('apartment_charges')->insert($ApCharge);     
                    
             
            }
          }
          } elseif ($ApartmentCharge != null)
            {


              if(isset($request->Charge))
              {
                 DB::table('apartment_charges')->where('ApartmentID', '=', $Apartment->ApartmentID)->delete();

               foreach ($request->Charge as $Ch)
                {
                   
                   $ApCharge =array(
                        'ApartmentID' => $Apartment->ApartmentID, 
                        'ChargeID' => $Ch);

                   $Response = DB::table('apartment_charges')->insert($ApCharge);     
                        
                 
                }
              }


            }
          
          

          $Response = DB::table('Apartments')
              ->where('ApartmentID', $Apartment->ApartmentID)
              ->update($ApartmentData);
          
              
               return redirect()->action([ApartmentMaster::class, 'index']);
          

    }

    
    public function destroy(Apartment $apartment)
    {
        //
    }
}
