<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\elders;

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
      $update = DB::select('select * from users where user_id = :id', ['id' => $id]);
      return view('layout.update',compact('update'));
   }
         
   public function updateData(Request $request, $id)
   {   
      $is_accepted=$request->input('is_accepted');
      $is_deleted=$request->input('is_deleted');
      DB::update('update users set is_accepted = ? , is_deleted=? where user_id = ?', [$is_accepted,$is_deleted,$id]);
      return redirect('utable')->with('message','The data has been updated successfully');

   }

   #################################### Elder ################################################

   public function viewElderData()
   {
      $ud = elders::all();
      return view('layout.ElderTable', compact('ud'));
   }

   public function viewaddd()
   {
      return view('layout.createElder');
   }

   public function createElderData(Request $request){
         $create=new elders();
         $create->name=$request->input('name');
         $create->age=$request->input('age');
         $create->phone_num=$request->input('phone_num');
         $create->needed_services=$request->input('needed_services');
         $create->time_needed=$request->input('time_needed');
         $create->gender=$request->input('gender');
         $create->location=$request->input('location');
         $create->guardian_name=$request->input('guardian_name');
         $create->guardian_number=$request->input('guardian_number');
         $create->guardian_relation=$request->input('guardian_relation');
         $create->guardian_id_pic=$request->input('guardian_id_pic');
         $create->save();
         return redirect('etable')->with('message','The data has been added successfully');
       }

      public function deleteElderData($id){
         $usersInfo = DB::delete('delete from elders where elder_id = ?',[$id]);         
         return redirect('etable')->with('message','The data has been Deleted successfully');
      }

      public function editElderData($id){
         $update = DB::select('select * from elders where elder_id = :id', ['id' => $id]);
         return view('layout.updateElder',compact('update'));
      }
            
      public function updateElderData(Request $request, $id)
      {   
         $is_accepted=$request->input('is_accepted');
         $is_deleted=$request->input('is_deleted');
         DB::update('update elders set is_accepted = ? , is_deleted=? where elder_id = ?', [$is_accepted,$is_deleted,$id]);
         return redirect('etable')->with('message','The data has been updated successfully');
   
      }
}
