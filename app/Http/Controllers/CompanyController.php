<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Historic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function storeCompany(Request $request){
        $user = Auth::user()->id;
        $name = 'Create company';

        $company = Company::create([
            'name'          => $request->name,
            'activite'      => $request->activite,
            'date_creation' => $request->date_creation,
        ]);

    Historic::create([
        'name'        => $name,
        'company_id'  => $company->id,
        'user_id'     => $user,
    ]);
    return  redirect(view('company.component.create2'));
    }
    //update company
    public function updateCompany(Request $request,Company $company){

        $user = Auth::user()->id;
        $name = 'Update company';

        $company->update([
            'name'     => $request->gerant,
            'adresse'  => $request->adresse,
            'email'    => $request->email,
        ]);

    Historic::create([
        'name'        => $name,
        'company_id'  => $company->id,
        'user_id'     => $user,
    ]);
    return  redirect(view('company.component.create2'));
    }
}
