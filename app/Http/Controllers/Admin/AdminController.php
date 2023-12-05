<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        view()->share('adminTheme','adminTheme.default');
    }
    public function crudMessage($type, $module)
    {
        switch ($type) {
            case 'add':
                return $module . ' Created Successfully!';
                break;
            case 'delete':
                return $module . ' Deleted Successfully!';
                break;
            case 'update':
                return $module . ' Updated Successfully!';
                break;
            case 'login':
                return $module . ' Login Successfully!';
                break;
            case 'mail':
                return $module . ' Mail Send Successfully!';
                break;

            default:
                # code...
                break;
        }
    }
}
