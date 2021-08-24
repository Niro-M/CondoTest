<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Complexmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\HomeController;
use DB;



class ComplexMaster extends Controller
{
   
    public function index()
    {
        
        $Complex =DB::table('Complex')->get();
        return view("Master.ComplexIndex",['Complex' => $Complex]);
        
    }

    
    public function create()
    {
       
        $Company =DB::table('Company')->get();
        return view("Master.Complex",['Company' => $Company]);
       
        
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        //dump(request()->all());

         $validatedData = $request->validate([
            'CompanyID'=>['bail','required'],
            'ComplexName'=>['bail','required'],
            'Address'=>['bail','required'],
            'Email'=>['bail','required'],
            'Phone'=>['bail','required'],
            ]);

             $p = new Complexmodel(); 
             $p->CompanyID =$request->input('CompanyID'); 
             $p->ComplexName =$request->input('ComplexName'); 
             $p->Address =$request->input('Address'); 
             $p->Email =$request->input('Email'); 
             $p->Phone =$request->input('Phone'); 

         $Complex =array(
            'CompanyID' => $p->CompanyID,
            'ComplexName' => $p->ComplexName,
            'Address'=>$p->Address,
            'Email'=>$p->Email,
            'Phone'=>$p->Phone);

            $Response = DB::table('Complex')->insert($Complex);
            

            if($Response)
            {
                $Complex =DB::table('Complex')->get();
                return view("Master.ComplexIndex",['Complex' => $Complex]);
            }
            

    }

    
    public function show($id)
    {   
        $Company =DB::table('Company')->get();
        $Complex = DB::select('select * from Complex where ComplexID= ?',[$id]);
        return view("Master.ComplexEdit",['Complex'=>$Complex,'Company'=>$Company]);

    }

    
    public function update($id)
    {
        
        $Complex =DB::table('Complex')->where('ComplexID', $id)->first();

        $Complex->CompanyID=request('CompanyID');
        $Complex->ComplexName=request('ComplexName');
        $Complex->Address=request('Address');
        $Complex->Email=request('Email');
        $Complex->Phone=request('Phone');
        
        $IsInactive = request('Inactive');

        if ($IsInactive=='on')
        {
          $IsInactive = 1;
        }
        else
        {
          $IsInactive=0;
        }

        $ComplexData =array(
            'CompanyID' => $Complex->CompanyID,
            'ComplexName' => $Complex->ComplexName,
            'Address' => $Complex->Address,
            'Email' => $Complex->Email,
            'Phone' => $Complex->Phone,
            'Inactive'=>$IsInactive
        );

        
         $Response = DB::table('Complex')
              ->where('ComplexID', $Complex->ComplexID)
              ->update($ComplexData);
          
              
               return redirect()->action([ComplexMaster::class, 'index']);
          
      }

}
