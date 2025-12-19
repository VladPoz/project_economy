<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {   
        try{
            Company::create([
                'login'=>'ee',
                'password'=>Hash::make('123456'),
                'company_name'=>'Original_name2',
                'company_tupe'=>'TOO',
                'company_IIN'=>'wadwadwad2'
            ]);

            return response()->json(['succes?'=>"yes :)"], 201);
        }catch(QueryException $e){
            return response()->json(["succes?" => "no :("], 500);
        }
        // $company_info = Company::find(1);
        // return response()->json($company_info);
    }
}