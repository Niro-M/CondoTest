<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\TowerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use DB;

class TowerMaster extends Controller
{
    
    public function index()
    {
        //
         $Tower =DB::table('Tower')->get();
         return view("Master.TowerIndex",['Tower' => $Tower]);
    }

    
    public function create()
    {
        
        $Complex =DB::table('Complex')->get();
        return view("Master.Tower",['Complex' => $Complex]);

    }

    
    public function store(Request $request)
    {
        
        //dump($request->all());
       $validatedData = $request->validate([
            'ComplexID'=>['bail','required'],
            'TowerName'=>['bail','required'],
            'NoofFloors'=>['bail','required'],
            'NoofApartments'=>['bail','required'],
            'SqftperAprtment'=>['bail','required'],
            ]);

            $p = new TowerModel();
            $p->ComplexID =$request->input('ComplexID'); 
            $p->TowerName =$request->input('TowerName'); 
            $p->NoofFloors =$request->input('NoofFloors'); 
            $p->NoofApartments =$request->input('NoofApartments'); 
            $p->SqftperAprtment =$request->input('SqftperAprtment');

            $Tower =array(
            'ComplexID' => $p->ComplexID,
            'TowerName' => $p->TowerName,
            'NoofFloors'=>$p->NoofFloors,
            'NoofAprtments'=>$p->NoofApartments,
            'SqftperAprtment'=>$p->SqftperAprtment);

            $Response = DB::table('Tower')->insert($Tower);
            //dd();

            if($Response)
            {
                $Tower =DB::table('Tower')->get();
                return view("Master.TowerIndex",['Tower' => $Tower]);
                //return view("Master.TowerIndex");
            }

    }

    
    public function show($id)
    {
        

        $Complex =DB::table('Complex')->get();
        $Tower = DB::select('select * from Tower where TowerID= ?',[$id]);
        return view("Master.TowerEdit",['Complex'=>$Complex,'Tower'=>$Tower]);
    }

  
    public function update($id)
    {
        
        $Tower = DB::table('Tower')->where('TowerID', $id)->first();
        $Tower->ComplexID = request('ComplexID');
        $Tower->TowerName = request('TowerName');
        $Tower->NoofFloors = request('NoofFloors');
        $Tower->NoofAprtments = request('NoofApartments');
        $Tower->SqftperAprtment = request('SqftperAprtment');
        
        $IsInactive = request('Inactive');

       
        

        if ($IsInactive=='on')
        {
          $IsInactive = 1;
        }
        else
        {
          $IsInactive=0;
        }

        $TowerData =array(
            'TowerID' => $Tower->TowerID,
            'ComplexID' => $Tower->ComplexID,
            'TowerName' => $Tower->TowerName,
            'NoofFloors' => $Tower->NoofFloors,
            'NoofAprtments' => $Tower->NoofAprtments,
            'SqftperAprtment' => $Tower->SqftperAprtment,
            'Inactive'=>$IsInactive
        );

        
         $Response = DB::table('Tower')
              ->where('TowerID', $Tower->TowerID)
              ->update($TowerData);
          
              
               return redirect()->action([TowerMaster::class, 'index']); 

    }

   
}
