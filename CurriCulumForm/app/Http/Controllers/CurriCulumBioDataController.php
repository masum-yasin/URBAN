<?php

namespace App\Http\Controllers;

use App\Models\CurriCulumBioData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CurriCulumBioDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info('Received request', ['request' => $request->all()]);

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
            $insertData = [];
            foreach ($request->company_name as $index => $companyName) {
                foreach ($request->project_name[$index] as $projectIndex => $projectName) {
                    $insertData[] = [
                        'first_name' => $request->first_name,
                        'email' => $request->email,
                        'company_name' => $companyName,
                        'mobile' => $request->mobile[$index],
                        'project_name' => $projectName,
                        'project_role' => $request->project_role[$index][$projectIndex],
                        // 'created_at' => now(),
                        // 'updated_at' => now()
                    ];
                }
            }

            // dd($insertData);

            // Insert the collected data into the database
            CurriCulumBioData::insert($insertData);

            DB::commit();
            return response()->json(['success' => 'Data stored successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error storing data: ' . $e->getMessage());
            return response()->json(['error' => 'Data could not be stored', 'message' => $e->getMessage()], 500);
        }
    }







    // {
    //     Log::info('Received request', ['request' => $request->all()]);
    //     // dd($request->all());
    //     $validate = $request->validate([
    //         'first_name' => 'required|min:3|max:20',
    //         'email' => 'required|email',
    //         'company_name' => 'required|array',
    //         'company_name.*' => 'required|string',
    //         'mobile' => 'required|array',
    //         'mobile.*' => 'required|string|max:11',
    //         'project_name' => 'required|array',
    //         'project_name.*' => 'required|array',
    //         'project_name.*.*' => 'required|string',
    //         'project_role' => 'required|array',
    //         'project_role.*' => 'required|array',
    //         'project_role.*.*' => 'required|string',
    //     ]);
    
    //     Log::info('Request validated successfully', ['validate' => $validate]);
      
    
    //     foreach ($request->company_name as $index => $companyName) {
    //         foreach ($request->project_name[$index] as $projectIndex => $projectName) {
    //             $data = [
    //                 'first_name' => $request->first_name,
    //                 'email' => $request->email,
    //                 'company_name' => $companyName,
    //                 'mobile' => $request->mobile[$index],
    //                 'project_name' => $projectName,
    //                 'project_role' => $request->project_role[$index][$projectIndex],
    //             ];
    
    //             Log::info('Storing data', ['data' => $data]);
    //             // dd($data); 
    
    //             CurriCulumBioData::insert($data);
    //         }
    //     }
    // }

    /**
     * Display the specified resource.
     */
    public function show(CurriCulumBioData $curriCulumBioData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CurriCulumBioData $curriCulumBioData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CurriCulumBioData $curriCulumBioData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CurriCulumBioData $curriCulumBioData)
    {
        //
    }
}
