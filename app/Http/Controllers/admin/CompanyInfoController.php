<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyInfo;


class CompanyInfoController extends Controller
{
    public function index()
    {
        return view('admin.company_info');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'company_name' => 'required|string|max:255',
            'logo_path' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
  $image = $request->file('logo_path'); 
    $imageName = time() . '_' . $image->getClientOriginalName(); 
    $destinationPath = public_path('images'); 
  $image->move($destinationPath, $imageName);
    CompanyInfo::create([
        'company_name' => $request->input('company_name'),
        'logo_path' => 'images/' . $imageName,
    ]);
        return redirect()->back()->with('success', 'Company information added successfully!');
    } 
    }

