<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $banner = DB::table('banners')->first();
        $company = DB::table('companies')->first();
        return view('frontend.homepage')->with('banner', $banner)->with('company', $company);
    }
}
