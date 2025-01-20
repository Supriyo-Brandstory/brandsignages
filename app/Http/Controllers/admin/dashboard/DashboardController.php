<?php

namespace App\Http\Controllers\admin\dashboard;

use App\core\bookingregister\BookingRegisterInterface;
use App\core\member\MemberInterface;
use App\Http\Controllers\Controller;
use App\Models\SEO;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   
    public function dashboard(Request $request)

    {
        $seo = SEO::get()->count();
       
        return view('admin.dashboard.dashboard', compact('seo'));
    }
}
