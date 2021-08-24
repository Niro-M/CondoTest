<?php

namespace App\Http\Controllers\Master;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companymodel;
use DB;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\HomeController;



class CompanyMaster extends Controller
{
    
    public function index()
    {
        //
        
        $Company =DB::table('Company')->get();
        return view("Master.CompanyIndex",['Company' => $Company]);

 
    }

   
    public function create()
    {
        //
        return view("Master.Company");
    }

  
    public function store(Request $request)
    {       
           
           
           $input = $request->all();
           //dump(request()->all());
            
           $validatedData = $request->validate([
            'CompanyName'=>['bail','required','unique:Company'],
            'Address'=>['bail','required'],
            'Email'=>['bail','required'],
            'Phone'=>['bail','required'],
            'Fax'=>['bail','required'],
            'VatNo'=>['bail','required'],
            'SvatNo'=>['bail','required'],
            'BankName'=>['bail','required'],
            'BankCode'=>['bail','required'],
            'BranchName'=>['bail','required'],
            'BranchCode'=>['bail','required'],
            'AcNo'=>['bail','required'],
            ]);
 
           $p = new Companymodel(); 
           $p->CompanyName =$request->input('CompanyName');   
           $p->Address =$request->input('Address');   
           $p->Email =$request->input('Email');   
           $p->Phone =$request->input('Phone');          
           $p->Fax =$request->input('Fax'); 
           $p->VatNo =$request->input('VatNo');
           $p->SVATNo =$request->input('SvatNo'); 
           $p->BankName =$request->input('BankName'); 
           $p->BankCode =$request->input('BankCode'); 
           $p->BranchName =$request->input('BranchName'); 
           $p->BranchCode =$request->input('BranchCode'); 
           $p->CompanyAccNo =$request->input('AcNo'); 
           $p->LogoImagePath =$request->input('LogoPath'); 
           


           $CompanyData =array(
            'CompanyName' => $p->CompanyName,
            'Address' => $p->Address,
            'Email' => $p->Email,
            'Phone' => $p->Phone,
            'Fax' => $p->Fax,
            'VatNo' => $p->VatNo,
            'SVATNo' => $p->SVATNo,
            'BankName' => $p->BankName,
            'BankCode' => $p->BankCode,
            'BranchName' => $p->BranchName,
            'BranchCode' => $p->BranchCode,
            'CompanyAccNo' => $p->CompanyAccNo,
            'LogoImagePath' => $p->LogoImagePath
            
           );

          $Response = DB::table('Company')->insert($CompanyData);
           
           

           if($Response) {
                // the query succeed
            
           return back()->with('success','Company successfully added.');
           
          
            } 

            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
     
      $Company = DB::select('select * from Company where CompanyID= ?',[$id]);
      //$Company = DB::table('Company')->where('CompanyID', '=', $CompanyID)->get();
      
      //return view("Master.CompanyEdit",['CompanyName' => $Company[0]->CompanyName]);
      
      //return view("Master.test",['Company' => $Company]);
      //  return view("Master.CompanyEdit",['CompanyName']);
     return view("Master.CompanyEdit",['Company'=>$Company]);

    }

    
    public function update($id)
    {
        
        $Company =DB::table('Company')->where('CompanyID', $id)->first();

        //Echo $Company->CompanyName; 
        //echo request('CompanyName');
        $Company->CompanyName = request('CompanyName');
        $Company->Address = request('Address');
        $Company->Email = request('Email');
        $Company->Phone = request('Phone');
        $Company->Fax = request('Fax');
        $Company->VatNo = request('VatNo');
        $Company->SvatNo = request('SvatNo');
        $Company->BankName = request('BankName');
        $Company->BankCode = request('BankCode');
        $Company->BankCode = request('BankCode');
        $Company->BranchName = request('BranchName');
        $Company->BranchCode = request('BranchCode');
        $Company->CompanyAccNo = request('AcNo');
        $Company->LogoImagePath = request('LogoPath');
        $Company->Inactive = request('Inactive');

        $IsInactive = request('Inactive');

        if ($IsInactive=='on')
        {

          $IsInactive = 1;
        }
        else
        {
          $IsInactive=0;

        }
        

        $CompanyData =array(
            'CompanyName' => $Company->CompanyName,
            'Address' => $Company->Address,
            'Email' => $Company->Email,
            'Phone' => $Company->Phone,
            'Fax' => $Company->Fax,
            'VatNo' => $Company->VatNo,
            'SVATNo' => $Company->SvatNo,
            'BankName' => $Company->BankName,
            'BankCode' => $Company->BankCode,
            'BranchName' => $Company->BranchName,
            'BranchCode' => $Company->BranchCode,
            'CompanyAccNo' => $Company->CompanyAccNo,
            'LogoImagePath' => $Company->LogoImagePath,
            'Inactive' => $IsInactive  
           );

                   
        
        $Response = DB::table('Company')
              ->where('CompanyID', $Company->CompanyID)
              ->update($CompanyData);
                        
            
              $Company =DB::table('Company')->get();
              //return view("Master.CompanyIndex",['Company' => $Company]);
              return redirect()->action([CompanyMaster::class, 'index']);
            
        
    }

    
}
