<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function displayHome(){
        return view('layout.Home');
     }

     public function displayUTables(){
      return view('layout.userTable');
   }
   
   public function displaySTables(){
      return view('layout.ServiceTable');
   }

   public function displayETables(){
      return view('layout.ElderTable');
   }

   public function viewadd()
   {
      return view('layout.create');
   }

   public function createData(Request $request){
       $create=new User();
       $create->name=$request->input('name');
       $create->email=$request->input('email');
       $create->password=$request->input('password');
       $create->gender=$request->input('gender');
       $create->age=$request->input('age');
       $create->front_id_pic=$request->input('front_id_pic');
       $create->back_id_pic=$request->input('back_id_pic');
       $create->needed_services=$request->input('needed_services');
       $create->time=$request->input('time');
       $create->car=$request->input('car');
       $create->save();
       return redirect('utable')->with('message','The data has been added successfully');
    }

   public function viewData()
   {
      $ud = User::all();
      return view('layout.UserTable', compact('ud'));
   }

   public function deleteData($id){

      $usersInfo = DB::delete('delete from users where user_id = ?',[$id]);         
      return redirect('\utable')->with('message','The data has been Deleted successfully');

   }
   
   public function editData($id){
      $update = User::find($id);
      return view('layout.update',compact('update'));
   }
         
   public function updateData(Request $request, $id)
   {
      $update = User::find($id); //Post is the model name
      $update->name=$request->input('name');
      $update->email=$request->input('email');
      $update->password=$request->input('password');
      $update->gender=$request->input('gender');
      $update->age=$request->input('age');
      $update->front_id_pic=$request->input('front_id_pic');
      $update->back_id_pic=$request->input('back_id_pic');
      $update->needed_services=$request->input('needed_services');
      $update->time=$request->input('time');
      $update->car=$request->input('car');
      $update->update();
      return redirect('utable')->with('message','The data has been updated successfully');
   }
}
