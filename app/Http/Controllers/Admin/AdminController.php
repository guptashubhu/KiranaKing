<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;  
use File;

class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('admin.auth.adminlogin');
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'email'    =>   'required|exists:admins,email',
            'password' =>   'required|min:8|max:15'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))){
            return redirect('admin/dashboard');
        }
        return back()->withErrors(['email' => 'Login details are not valid']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function adminProfile()
    {
        $data = Admin::first();
        return view('admin.profile.adminProfile',compact('data'));
    }

    public function adminUpdate(Request $request)
    {
        // dd($request->all());
        $store = Admin::find(1);
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        if($store->save()){
            return array('success' => 'Admin detials updates successfully');
        }else{
            return array('failed' => 'Admin detials not updates successfully');
        }

    }

    public function changePass(Request $request)
    {
        $pass = Admin::find(1);
        if(Hash::check($request->current_password, $pass->password))
        {
            $change = Hash::make($request->password);
            DB::table('admins')->where('id', 1)->update(['password' => $change]);
            return redirect()->back()->with('success', 'Password change successfully');
        }else{
            return redirect()->back()->with('success', 'Password not change');
        }
    }

    public function storeImage(Request $request)
    {
        $file = $request->file('image');
        if ($request->file('image')) {

            $originalname = $request->file('image')->getClientOriginalName();
            //dd($originalname);
            $fileextension = $request->file('image')->extension();
            //dd($fileextension);
            $filenewname = 'user_1'.'.'.$fileextension;
            //$path = $request->file('image')->storeAs('profile_img', $originalname);

            //Create directory if not exist
            $path = public_path('/admin-assets/img/profile_img/'.'user_1');
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $destinationPath = public_path().'/admin-assets/img/profile_img' ;
            $path = $request->file('image')->move($path,$filenewname);
        }
        $User = Admin::find(1);
        $User->pro_img = $filenewname;
        $User->save();
        return response()->json($path);
    }


}
