<?php

namespace App\Http\Controllers;
use App\Models\Treatments;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TreatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatments::all();
        return view('admin/treatments',['treatments'=>$treatments]);
    }

    public function create()
    {
        return view('admin.createTreatments');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('treatments', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        Treatments::create($requestData);
        Alert::success('Add Treatment Successfully');
        return redirect()->route('dental.treatments');
    }

    public function show($id)
    {
        //
    }

    public function edit($treatment_id)
    {
        $treatments = Treatments::find($treatment_id);
        return view('admin/editTreatments')->with('treatments', $treatments);
    }

    public function update(Request $request, $treatment_id)
    {
        $treatments = Treatments::find($treatment_id);
        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('treatments', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        $treatments->update($requestData);
        Alert::success('Updated Successfully');
        return redirect()->route('dental.treatments');
    }

    public function destroy($treatment_id)
    {
        Treatments::destroy($treatment_id);
        Alert::success('Deleted Successfully');
        return redirect()->route('dental.treatments');
    }
}
