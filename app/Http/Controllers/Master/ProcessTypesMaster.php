<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\ProcessTypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use DB;


class ProcessTypesMaster extends Controller
{
    
    public function index()
    {
       $ProcessTypes =DB::table('processtypes')->get();
       return view("Master.ProcessTypesIndex",['ProcessTypes' => $ProcessTypes]);

        
    }

   
    public function create()
    {
        
        return view("Master.ProcessTypes");
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ProcessTypeName'=>['bail','required'],
            ]);

            $p = new ProcessTypeModel();
            $p->ProcessTypeName =$request->input('ProcessTypeName'); 
            
            
            $BillGroup =array(
            'ProcessTypeName' => $p->ProcessTypeName
            
            );

            $Response = DB::table('processtypes')->insert($BillGroup);
            

            if($Response)
            {
                $ProcessTypes =DB::table('processtypes')->get();
                return view("Master.ProcessTypesIndex",['ProcessTypes' => $ProcessTypes]);
                
            }
    }

    
    public function show($id)
    {
        
        $ProcessType = DB::select('select * from processtypes where ProcessTypeID= ?',[$id]);
        return view("Master.ProcessTypesEdit",['ProcessType'=>$ProcessType]);

    }

    
    public function update($id)
    {
        
        $ProcessType = DB::table('processtypes')->where('ProcessTypeID', $id)->first();
        $ProcessType ->ProcessTypeName = request('ProcessTypeName');
        

        $ProcessTypeData =array(
            'ProcessTypeID' => $ProcessType->ProcessTypeID,
            'ProcessTypeName' => $ProcessType->ProcessTypeName
            
        );

        
         $Response = DB::table('processtypes')
              ->where('ProcessTypeID', $ProcessType->ProcessTypeID)
              ->update($ProcessTypeData);
          
              
               return redirect()->action([ProcessTypesMaster::class, 'index']); 
    }

    
}
