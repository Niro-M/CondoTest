<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\ClientMasterModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\HomeController;
use DB;


class ClientMaster extends Controller
{
    
    public function index()
    {
       $Client =DB::table('clients')->get();
       return view("Master.ClientIndex",['Client' => $Client]);
      

    }

    
    public function create()
    {
        return view("Master.Client");
    }

    public function store(Request $request)
    {
        $input = $request->all();

         $validatedData = $request->validate([
            'ClientName'=>['bail','required'],
            'BillingName'=>['bail','required'],
            'Phone'=>['bail','required'],
            'Fax'=>['bail','required'],
            'UserName'=>['bail','required'],
            'Password'=>['bail','required'],
            'toDate'=>['bail','required'],
            'MapNo' => ['bail','required'],
            ]);


           $isTanant = 0; 
          

           if ($request->option1 == "IsOwner") {
              $isTanant =0;
              } elseif ($request->option1 == "IsTanent") {
              $isTanant =1;
            }; 


          $p = new ClientMasterModel(); 
             $p->ClientName =$request->input('ClientName'); 
             $p->BillingName =$request->input('BillingName'); 
             $p->Phone =$request->input('Phone'); 
             $p->Fax =$request->input('Fax'); 
             $p->Email =$request->input('Email'); 
             $p->WebLoginUserName =$request->input('UserName');
             $p->WebLoginPassword =$request->input('Password');
             $p->ImagePath =$request->input('ImagePath');
             $p->MapNo =$request->input('MapNo'); 
             $p->BillStartingFrom =$request->input('toDate');
             
             

            $ClientData =array(
            'ClientName' => $p->ClientName,
            'BillingName' => $p->BillingName,
            'IsTanent'=> $isTanant,
            'Phone'=>$p->Phone,
            'Fax'=>$p->Fax,
            'Email'=>$p->Email,
            'WebLoginUserName'=>$p->WebLoginUserName,
            'WebLoginPassword'=>$p->WebLoginPassword,
            'ImagePath'=>$p->ImagePath,
            'MappingNo' =>$p->MapNo,
            'BillStartingFrom'=>$p->BillStartingFrom,
            'Inactive'=> 0,
            );

            $Response = DB::table('Clients')->insert($ClientData);
            

            if($Response)
            {
                  return redirect()->action([ClientMaster::class, 'index']); 
            }


    }

    
    public function show($id)
    {
         $Client  = DB::table('clients')
               ->where('ClientID', '=', $id)
                ->get();

        
       /* $Apartments  = DB::table('apartments')
            ->where('apartments.inactive', '=', 0)
            ->get();*/
         $ClientAp =  $Tax  = DB::table('client_aprtments')
            ->join('Apartments', 'client_aprtments.ApartmentID', '=', 'Apartments.ApartmentID')
            ->where('ClientID', '=', $id)
            ->get();


           $Apartments= DB::table('apartments')
            ->whereNotIn('apartmentID', function($query)
            {
                $query->select(DB::raw(100))
                      ->from('client_aprtments')
                      ->whereRaw('apartments.apartmentID = client_aprtments.apartmentID');
                      
            })
            ->get();


        

        return view("Master.ClientEdit",['client' => $Client, 'Apartments' => $Apartments,'ClientAp' => $ClientAp ]);
    }

    
    public function edit(ClientMaster $clientMaster)
    {
        //
    }

    
    public function update(Request $request)
    {
        
        

           $Client =DB::table('clients')->where('ClientID', $request->input('clientID'))->first();

           $IsOwner = 0; 
           
           

          if ($request->option1 == "IsOwner") {
              $isTanant =0;
          } elseif ($request->option1 == "IsTanent") {
              $isTanant =1;
            }; 

          
           $Client->clientID=request('clientID');
           $Client->ClientName=request('ClientName');
           $Client->BillingName=request('BillingName');
           $Client->IsTanent=$isTanant;
           $Client->Phone=request('Phone');
           $Client->Fax=request('Fax');
           $Client->Email=request('Email');
           $Client->WebLoginUserName=request('UserName');
           $Client->WebLoginPassword=request('Password');
           $Client->ImagePath=request('ImagePath');
           $Client->BillStartingFrom=request('toDate');
           $Client->MapNo=request('MapNo');


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

            $FileuploadMapNo ='S001';

           $ClientData =array(
            'ClientID' => $Client->ClientID,
            'ClientName' => $Client->ClientName,
            'BillingName' => $Client->BillingName,
            'IsTanent' => $isTanant,
            'Phone' => $Client->Phone,
            'Fax'=>$Client->Fax,
            'Email'=>$Client->Email,
            'WebLoginUserName'=>$Client->WebLoginUserName,
            'WebLoginPassword'=>$Client->WebLoginPassword,
            'ImagePath'=>$Client->ImagePath,
            'MappingNo' =>$Client->MapNo,
            'BillStartingFrom'=>$Client->BillStartingFrom,
            'Inactive' => $IsInactive
          );


         $ClientApartments =  DB::table('client_aprtments')->where('ClientID', $request->input('clientID'))->first();
         

          if ($ClientApartments == null)
          {
           
           if(isset($request->ClientAp))
           { 
            foreach ($request->ClientAp as $ClientAp)
            {
               
               $ClientAp =array(
                    'ClientID' => $Client->clientID, 
                    'ApartmentID' => $ClientAp,
                    'FileuploadMappingNo' => $FileuploadMapNo,
                    'Inactive' =>0 );

               $Response = DB::table('client_aprtments')->insert($ClientAp);     
                    
             
            }
           }
          } elseif ($ClientApartments != null)

          {

           

              if(isset($request->ClientAp))
              {
                 DB::table('client_aprtments')->where('ClientID', '=', $Client->clientID)->delete();

               foreach ($request->ClientAp as $ClientAp)
                {
                   
                  $ClientAp =array(
                    'ClientID' => $Client->clientID, 
                    'ApartmentID' => $ClientAp,
                    'FileuploadMappingNo' => $FileuploadMapNo,
                    'Inactive' => 0);

                   $Response = DB::table('client_aprtments')->insert($ClientAp);    
                        
                 
                }
              }
          }

           $Response = DB::table('clients')
              ->where('ClientID', $Client->clientID)
              ->update($ClientData);
          
              
               return redirect()->action([ClientMaster::class, 'index']);
          
           

       }     

  
}
