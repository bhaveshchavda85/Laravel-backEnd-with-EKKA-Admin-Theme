<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Dutyslip;
use App\Models\Invoice;
use Illuminate\Http\Request;

class DashboardController extends AdminController
{
    public function index(){
        return view('admin.dashboard');
    }
}
