<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\upload;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class admincontroller extends Controller
{

    public function getdata()
    {

        try {
            $user = admin::where('email', 'kumkum@gmail.co')->firstOrFail();
            return ($user);
        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            return view('usernot');
        }
    }
    public function upload_display()
    {
        return view('upload');
    }

    public function add_profile(Request $request)
    {

        $this->validate($request, ['name' => 'required']);
        $this->validate($request, ['image' => 'required']);
        $this->validate($request, ['title' => 'required']);
        $add = new upload;
        if ($request->isMethod('post')) {
            $add->name = $request->get('name');
            $add->title = $request->get('title');
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $current = uniqid(Carbon::now()->format('YmdHs'));
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $fullfilename = $current . "." . $file->getClientOriginalExtension();
                // print_r($fullfilename);
                // $destinationPath = public_path('image_folder');
                // $file->storeAs($destinationPath, $fullfilename);
                $file->storeAs('public/', $fullfilename);
                $add->image = $fullfilename;
            }
            $add->save();
        }
        return redirect("display");
    }
    public function display()
    {
        $data = upload::all();
        return view('display', compact('data'));
        // return view('display');
    }
}




















// public function add_product(Request $request)
//     {

//         $this->validate($request, ['name' => 'required']);
//         $this->validate($request, ['image' => 'required']);
//         $this->validate($request, ['title' => 'required']);
//         $add = new upload;
//         if ($request->isMethod('post')) {
//             $add->name = $request->get('name');
//             $add->title = $request->get('title');
//             if (!empty($request->file('image'))) {
//                 $file = $request->file('image');
//                 $current = uniqid(Carbon::now()->format('YmdHs'));
//                 $file->getClientOriginalName();
//                 $file->getClientOriginalExtension();
//                 $fullfilename = $current . "." . $file->getClientOriginalExtension();
//                 // print_r($fullfilename);
//                 $destinationPath = public_path('upload_image');
//                 $file->move($destinationPath, $fullfilename);
//                 $add->proimage = $fullfilename;
//             }
//             $add->save();
//         }
//         return redirect("upload");
//     }

// public function add_profile(Request $request)
// {

//     $this->validate($request, ['name' => 'required']);
//     $this->validate($request, ['image' => 'required']);
//     $this->validate($request, ['title' => 'required']);
//     $add = new upload;
//     if ($request->isMethod('post')) {
//         $add->name = $request->get('name');
//         $add->title = $request->get('title');
//         if ($request->hasFile('image')) {
//             $file = $request->file('image');
//             $filename = $file->getClientOriginalName();
//             $file->storeAs('public/', $filename);
//             // return redirect('/uploadfile');
//             $add->image = $filename;
//         }
//         $add->save();
//     }
//     return redirect("upload");
// }
