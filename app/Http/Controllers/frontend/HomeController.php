<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyInfo;


class HomeController extends Controller
{
   public function index()
    {
        $companyInfo = CompanyInfo::latest()->first();
        return view('frontend.home', compact('companyInfo'));
    }
   public function about()
   {
    return view('frontend.about');

   }
    public function product()
   {
    return view('frontend.product');

   }
    public function service()
   {
    return view('frontend.service');

   }
    public function gallery()
   {
    return view('frontend.gallery');

   }
    public function contact()
   {
    return view('frontend.contact');

   }
}
