<?php

namespace App\Http\Controllers\admin\dashboard;

use App\core\bookingregister\BookingRegisterInterface;
use App\core\member\MemberInterface;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\SEO;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard(Request $request)

    {
        $seo = SEO::count();
        $blog = Blog::count();
        $enquery  = Contact::count();

        return view('admin.dashboard.dashboard', compact('seo', 'blog', 'enquery'));
    }
}
