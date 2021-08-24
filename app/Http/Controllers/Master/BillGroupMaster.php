<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\BillGroupModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use DB;

class BillGroupMaster extends Controller
{
    
    public function index()
    {
        
       $BillGroup =DB::table('billgroups')->get();
       return view("Master.BillGroupIndex",['BillGroup' => $BillGroup]);

    }

    
    public function create()
    {
        return view("Master.BillGroup");
    }

   
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'BillGroupName'=>['bail','required'],
            'BillGroupDisplayName'=>['bail','required'],
            ]);

            $p = new BillGroupModel();
            $p->BillGroupName =$request->input('BillGroupName'); 
            $p->BillGroupDisplayName =$request->input('BillGroupDisplayName'); 
            
            $BillGroup =array(
            'BillGroupName' => $p->BillGroupName,
            'BillGroupDisplayName' => $p->BillGroupDisplayName,
            );
            
            $Response = DB::table('billgroups')->insert($BillGroup);
            
            if ($Response==true)
            {
               //$message ='success';
              
                //echo $message;

                $notification = array(
                    'message' => 'Bill group is created!',
                    'alert-type'=> 'success'
                );
               

               return back()->with($notification);
            }
            
              


    }

   
    public function show($id)
    {
        $BillGroup = DB::select('select * from billgroups where BillGroupID= ?',[$id]);
        return view("Master.BillGroupEdit",['BillGroup'=>$BillGroup ]);
    }

    
    public function update($id)
    {
        
        $BillGroup = DB::table('billgroups')->where('BillGroupID', $id)->first();
        $BillGroup->BillGroupName = request('BillGroupName');
        $BillGroup->BillGroupDisplayName = request('BillGroupDisplayName');
        $IsInactive = request('Inactive');

        if ($IsInactive=='on')
        {
          $IsInactive = 1;
        }
        else
        {
          $IsInactive=0;
        }

        $BillGroupData =array(
            'BillGroupID' => $BillGroup->BillGroupID,
            'BillGroupName' => $BillGroup->BillGroupName,
            'BillGroupDisplayName' => $BillGroup->BillGroupDisplayName,
            'Inactive'=>$IsInactive
        );

        
         $Response = DB::table('billgroups')
              ->where('BillGroupID', $BillGroup->BillGroupID)
              ->update($BillGroupData);
          
              
               return redirect()->action([BillGroupMaster::class, 'index']); 

    }


    
}
