<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\TaxMasterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use DB;

class TaxMaster extends Controller
{
    
    public function index()
    {
        
         $Tax =DB::table('tax')->get();
         return view("Master.TaxIndex",['Tax' => $Tax]);
        
    }

    
    public function create()
    {
        return view("Master.Tax");
    }

   
    public function store(Request $request)
    {
        
       $validatedData = $request->validate([
            'TaxName'=>['bail','required'],
            'TaxPercentage'=>['bail','required'],
            ]);

            

            $Tax =array(
                    'TaxTypeName' =>$request->input('TaxName'), 
                    'TaxPercentage' =>$request->input('TaxPercentage') 
            );
            
            
            $Response = DB::table('tax')->insert($Tax);
            

            if($Response)
            {
                $Tax =DB::table('tax')->get();
                return view("Master.TaxIndex",['Tax' => $Tax]);
                
            }
    }

    
    public function show($id)
    {
        $Tax = DB::select('select * from tax where TaxID= ?',[$id]);
        return view("Master.TaxEdit",['Tax'=>$Tax]);
    }

    
        
    public function update($id)
    {
        
        $Tax = DB::table('tax')->where('TaxID', $id)->first();

        $Tax->TaxTypeName = request('TaxName');
        $Tax->TaxPercentage = request('TaxPercentage');
        $IsInactive = request('Inactive');

        if ($IsInactive=='on')
        {
          $IsInactive = 1;
        }
        else
        {
          $IsInactive=0;
        }

        $TaxData =array(
            'TaxID' => $Tax->TaxID,
            'TaxTypeName' => $Tax->TaxTypeName,
            'TaxPercentage' => $Tax->TaxPercentage,
            'Inactive'=>$IsInactive
        );

        
         $Response = DB::table('tax')
              ->where('TaxID', $Tax->TaxID)
              ->update($TaxData);
          
              
               return redirect()->action([TaxMaster::class, 'index']); 

    }

    
   
}
