<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\ChargeMasterModel;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\RedirectResponse;
use DataTables;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use validator;


class ChargeMaster extends Controller
{
    
    public function index()
    {
        $Charge =DB::table('charge_master')->get();
        return view("Master.ChargeIndex",['Charge' => $Charge]);
    }

    
    
    public function create()
    {

        $BillGroup =DB::table('BillGroups')->get();
        $ProcessType =DB::table('ProcessTypes')->get();
        return view("Master.Charge",['BillGroup' => $BillGroup, 'ProcessType' => $ProcessType ]);

    }

    
    public function store(Request $request)

    {
       $validatedData = $request->validate([
            'ChargeName'=>['bail','required'],
            'BillGroupID'=>['bail','required'],
            'ProcessTypeID'=>['bail','required'],
            'RatePerUnit'=>['bail','required'],
            'option1'=>['bail','required'],
            'fromDate'=>['bail','required'],
            'toDate'=>['bail','required']
            ]); 
            //dump($request->all());
            
           $isPeriod = 0; 
           $isQuart =0;
           $isYear =0;

           if ($request->option1 == "Periodically") {
              $isPeriod =1;
              } elseif ($request->option1 == "Quarterly") {
              $isQuart =1;
            } else {
              $isYear = 1;
            };

          //dump($intval);
            $Charge =array(
                    'ChargeName' =>$request->input('ChargeName'), 
                    'BillGroupID' =>$request->input('BillGroupID'),
                    'ProcessTypeID' =>$request->input('ProcessTypeID'),
                    'IsPeriod' => $isPeriod,
                    'IsQuater' => $isQuart,
                    'IsYear' => $isYear,
                    'UnitRate' =>$request->input('RatePerUnit'),
                    'ApplicableFrom' =>$request->input('fromDate'),
                    'ApplicableTo' =>$request->input('toDate')

            );

          $Response = DB::table('charge_master')->insert($Charge);
            

            if($Response)
            {
                return redirect()->action([ChargeMaster::class, 'index']); 
                
            }
      
    }

            
     public function show($id)
    {  
        
        
        $Charge = DB::table('charge_master')
            ->join('BillGroups', 'charge_master.BillGroupID', '=', 'BillGroups.BillGroupID')
            ->join('Processtypes', 'charge_master.ProcessTypeID', '=', 'Processtypes.ProcessTypeID')
            ->select('charge_master.*', 'BillGroups.BillGroupName', 'Processtypes.ProcessTypeName')
            ->where('ChargeID', '=', $id)
            ->get();

        $Tax  = DB::table('charge_master_tax')
            ->join('tax', 'charge_master_tax.TaxID', '=', 'tax.TaxID')
            ->where('ChargeID', '=', $id)
            ->get();
        
        $TaxDrop=DB::table('tax')->get();                 
        
        //dump($Charge);
      $BillGroup =DB::table('BillGroups')->get();
      $ProcessType =DB::table('ProcessTypes')->get();
        return view("Master.ChargeEdit",['BillGroup' => $BillGroup, 'ProcessType' => $ProcessType, 'Charge' => $Charge, 'Tax' => $Tax, 'TaxDrop' => $TaxDrop  ] ); 
      
    }    

    public function update(Request $request)
       {

           
                   
           $Charge =DB::table('charge_master')->where('ChargeID', $request->input('ChargeID'))->first();

           $isPeriod = 0; 
           $isQuart =0;
           $isYear =0;

           if ($request->option1 == "Periodically")
           {
              $isPeriod =1;
           } elseif ($request->option1 == "Quarterly") {
              $isQuart =1;
           } else {
              $isYear = 1;
           };

           $Charge->ChargeID=request('ChargeID');
           $Charge->ChargeName=request('ChargeName');
           $Charge->BillGroupID=request('BillGroupID');
           $Charge->ProcessTypeID=request('ProcessTypeID');
           $Charge->IsPeriod=$isPeriod;
           $Charge->IsQuater=$isQuart;
           $Charge->IsYear=$isYear;
           $Charge->UnitRate=request('RatePerUnit');
           $Charge->ApplicableFrom=request('fromDate');
           $Charge->ApplicableTo=request('toDate');

           //dump($Charge);
           $IsInactive = request('Inactive');

            if ($IsInactive=='on')
            {
              $IsInactive = 1;
            }
            else
            {
              $IsInactive=0;
            }



           $ChargeData =array(
            'ChargeID' => $Charge->ChargeID,
            'ChargeName' => $Charge->ChargeName,
            'BillGroupID' => $Charge->BillGroupID,
            'ProcessTypeID' => $Charge->ProcessTypeID,
            'IsPeriod' => $Charge->IsPeriod,
            'IsQuater'=>$Charge->IsQuater,
            'IsYear'=>$Charge->IsYear,
            'UnitRate'=>$Charge->UnitRate,
            'ApplicableFrom'=>$Charge->ApplicableFrom,
            'ApplicableTo'=>$Charge->ApplicableTo,
            'Inactive' => $IsInactive
          );

          
          $ChargeTax =  DB::table('charge_master_tax')->where('ChargeID', $request->input('ChargeID'))->first();
          //dump($ChargeTax);

          if ($ChargeTax == null)
          {
           
           if(isset($request->ChargeTax))
           { 
            foreach ($request->ChargeTax as $ChargeTax)
            {
               
               $ChargeTax =array(
                    'ChargeID' => $Charge->ChargeID, 
                    'TaxID' => $ChargeTax);

               $Response = DB::table('charge_master_tax')->insert($ChargeTax);     
                    
             
            }
           }
          } elseif ($ChargeTax != null)

          {

           

              if(isset($request->ChargeTax))
              {
                 DB::table('charge_master_tax')->where('ChargeID', '=', $Charge->ChargeID)->delete();

               foreach ($request->ChargeTax as $ChargeTax)
                {
                   
                   $ChargeTax =array(
                        'ChargeID' => $Charge->ChargeID, 
                        'TaxID' => $ChargeTax);

                   $Response = DB::table('charge_master_tax')->insert($ChargeTax);     
                        
                 
                }
              }
          }

           $Response = DB::table('charge_master')
              ->where('ChargeID', $Charge->ChargeID)
              ->update($ChargeData);
          
              
               return redirect()->action([ChargeMaster::class, 'index']);
          
           

       }     
     
    


    }

   
