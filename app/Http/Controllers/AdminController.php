<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{ 
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function CustomerPage()
    {
       return view(NameController::$ADMIN_CUSTOMER);
    }

    public function AdminControllerPage()
    {
        return view(NameController::$ADMIN_CONTROLLERS_ADMIN_HOME_PAGE);
    }


    public function showAdminProfile(){
        $admins = DB::select(NameController::$SP_SELECT_ALL_MANAGERS);

        return view(NameController::$ADMIN_CONTROLLERS_ADD_PROFILE, ['admins'=>$admins]);
    }
    
    public function postAdminProfile(Request $request){
     $fullname = $request->fullname;
     $gendder = $request->gender;
     $birthday = $request->birthday;
     $position = $request->position;
     $depament = $request->depament;
     $emailaddress = $request->email;
     $phonenumber = $request->phonenumber;
     $address = $request->address;
    }

}