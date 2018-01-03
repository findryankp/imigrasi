<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
use File;

class UserController extends Controller
{
    public function profile(){
    	return view('profile',array('user'=> Auth::user()));
    }

   public function update(Request $request){
   		$usr=User::find(Auth::user()->id);
   		if($request->hasFile('avatar')){
   			$avatar=$request->file('avatar');
   			$filename=time().".".$avatar->getClientOriginalExtension();

   			if($usr->avatar!=="default.jpg"){
   				$file='/uploads/avatar/'.$usr->avatar;
   				if(File::exists($file)){
   					unlink($file);
   				}
   			}
   			Image::make($avatar)->resize(400,400)->save(public_path('/uploads/avatar/'.$filename));

   			$id=Auth::user()->id;
   			User::where('id',$id)->update([
   				'name'=>$request->name,
   				'alamat'=>$request->alamat,
   				'notelp'=>$request->notelp,
   				'avatar'=>$filename,
   			]);
   			return redirect('/home/user/profile');
   		}
   		$id=Auth::user()->id;
   			User::where('id',$id)->update([
   				'name'=>$request->name,
   				'alamat'=>$request->alamat,
   				'notelp'=>$request->notelp,
   				
   			]);
   		return redirect('/home/user/profile');
   }
}