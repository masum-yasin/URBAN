<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PersonalInformationController extends Controller
{
    public function index(){
        $myInformation = PersonalInformation::all();
        return view('Biodata.index',compact('myInformation'));

    }

public function create(){
    return view('Biodata.create');
}

public function storePersonalInfo(Request $request)
{
    // Log the received request data
    Log::info('Received request', ['request' => $request->all()]);


    // Validate the request
    $validate = $request->validate([
        'first_name' => 'required|min:3|max:20',
        'email' => 'required|email',
        'company_name' => 'required|array',
        'company_name.*' => 'required|string',
        'mobile' => 'required|array',
        'mobile.*' => 'required|string|max:11',
        'project_name' => 'required|array',
        'project_name.*' => 'required|array',
        'project_name.*.*' => 'required|string',
        'project_role' => 'required|array',
        'project_role.*' => 'required|array',
        'project_role.*.*' => 'required|string',
    ]);

    Log::info('Request validated successfully', ['validate' => $validate]);

    DB::beginTransaction();
    try {
        // Check if the email already exists
        $personalInfo = PersonalInformation::where('email', $request->email)->first();
 // Insert personal information if it does not exist
        if (!$personalInfo) {
           
            $personalInfoData = [
                'first_name' => $request->first_name,
                'email' => $request->email,
            ];

            $personalInfo = PersonalInformation::create($personalInfoData);
        }

        $infoID = $personalInfo->id;

        // Prepare company data for insertion
        $insertData = [];
        foreach ($request->company_name as $index => $companyName) {
            foreach ($request->project_name[$index] as $projectIndex => $projectName) {
                $insertData[] = [
                    'personal_informations_id' => $infoID,
                    'company_name' => $companyName,
                    'mobile' => $request->mobile[$index],
                    'project_name' => $projectName,
                    'project_role' => $request->project_role[$index][$projectIndex],
                ];
            }
        }

        // Insert the  data into company table
        Company::insert($insertData);
        DB::commit();

        Log::info('Data stored successfully');
     } 
    
    catch (\Exception $e) {
        DB::rollBack();
        
        Log::error('Error storing data: ' . $e->getMessage());
        
    }
    return redirect()->route('biodata.index');
   

}

public function edit($id){
    $myInformation = PersonalInformation::find($id);
    return view('Biodata.edit',compact('myInformation'));

}
    
public function update(Request $request, $id)

{
   
    $request->validate([
        'company_name.*' => 'required|string|max:255',
        'mobile.*' => 'required|string|max:11',
        'project_name.*' => 'required|string|max:255',
        'project_role.*' => 'required|string|max:255',
    ]);

    // $com = Company::find($request->personal_informations_id);

     // Retrieve the PersonalInformation record
    $personalInformation = PersonalInformation::findOrFail($id);

  
    $personalInformation->companies()->delete();

    // Add new company and project records
    foreach ($request->company_name as $index => $companyName) {
        $personalInformation->companies()->create([
            'personal_informations_id' => $request->personal_informations_id,
            'company_name' => $companyName,
            'mobile' => $request->mobile[$index],
            'project_name' => $request->project_name[$index],
            'project_role' => $request->project_role[$index],
        ]);
    }
     
    //  $com->update($insertData);

    // Company::insert($insertData);

    return redirect()->route('biodata.index')->with('success', 'Information updated successfully.');
}


}



