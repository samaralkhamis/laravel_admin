<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\elders;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
     public function displaydash(){
      return view('layout.dashbord');
   }
   public function displaylogin(){
      return view('layout.login');
   }

     public function displayUTables(){
      return view('layout.userTable');
   }

   public function displayPenUsers(){
      return view('layout.penusers');
   }
   public function displayPenReq(){
      return view('layout.penreq');
   }
   public function displayETables(){
      return view('layout.ElderTable');
   }
   public function displayUsers(){
      return view('layout.Users');
   }
   public function displayRequests(){
      return view('layout.Request');
   }

   public function viewadd()
   {
      return view('layout.create');
   }

   public function viewData()
   {
      $ud = User::where('is_deleted',0)->where('is_accepted',1)->where('is_admin',0)->get();
      return view('layout.UserTable', compact('ud'));
   }

   public function viewlogindata()
   {
         $email= request('email');
         $pass= request('password');
         $users = DB::select('select * from users where is_admin=1');
         foreach ($users as $user) {
             if($user->email == $email){
                 if(($user->password == $pass)){
                     return redirect('/')->with('id',$user->id);
                 }else{
                     if($users[count($users)-1]->id == $user->id){
                     return redirect('/login')->with('message','Email or password is wrong');
                     }else{
                         continue;
                     }
                 }
             }else{
                 if($users[count($users)-1]->id == $user->id){
                     return redirect('/')->with('message','Email or password is wrong');
                 }else{
                     continue;
                 }
             }
         }
     }
         

   public function viewdashData()
   {
      $ud = User::where('is_deleted',0)->where('is_accepted',0)->where('is_admin',0)->get();
      return view('layout.penusers', compact('ud'));
   }

   public function viewdashreqData()
   {
      $rd = elders::where('is_deleted',0)->where('is_accepted',0)->get();
      return view('layout.penreq', compact('rd'));
   }

   public function deleteData($id){
      $usersInfo = DB::update('update users set is_deleted = ? where id = ?',[1,$id]);         
      return redirect('utable')->with('message','The data has been Deleted successfully');
   }

   public function denyData($id){
      $usersInfo = DB::update('update users set is_deleted = ? where id = ?',[1,$id]);         
      return redirect('PendingUsers')->with('message','The data has been Deleted successfully');
   }
   
   

   public function Acceptuser($id){
      DB::update('update users set is_accepted =? where id = ?', [1, $id]);
      return redirect('PendingUsers')->with('message','The user has been Accepted Successfully');
   }

   public function Acceptreq($id){
      DB::update('update elders set is_accepted =? where elder_id = ?', [1, $id]);
      return redirect('PendingRequests')->with('message','The request has been deleted Successfully');
   }

   public function editData($id){
      $update = DB::select('select * from users where id = :id', ['id' => $id]);
      return view('layout.updateus',compact('update'));
   }

   public function updateData(Request $request, $id)
   {   
      $name=$request->input('name');
      $lname=$request->input('lname');
      $img=$request->input('img');
      $phone=$request->input('phone');
      $email=$request->input('email');
      $age=$request->input('age');
      $needed_services=$request->input('needed_services');
      $time=$request->input('time');
      $timeTo=$request->input('timeTo');
      $gender=$request->input('gender');
      $front_id_pic=$request->input('front_id_pic');
      $back_id_pic=$request->input('back_id_pic');
      $is_accepted=$request->input('is_accepted');
      DB::update('update users set name = ? ,lname = ? , img = ?, phone = ? ,email = ? , age = ? ,needed_services=?,time = ? ,timeTo= ?, gender=?, front_id_pic=?, back_id_pic=?, is_accepted=? where id = ?', [$name,$lname,$img,$phone,$email,$age,$needed_services,$time,$timeTo,$gender,$front_id_pic,$back_id_pic,$is_accepted,$id]);
      return redirect('utable')->with('message','The data has been updated successfully');


   }
   public function denyreq($id){
      $usersInfo = DB::update('update elders set is_deleted = ? where elder_id = ?',[1,$id]);         
      return redirect('PendingRequests')->with('message','The data has been Deleted successfully');
   }
   #################################### Elder ################################################

   public function viewElderData()
   {  $ud = elders::where('is_deleted',0)->where('is_accepted',1)->get();
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
         $usersInfo = DB::update('update elders set is_deleted = ? where elder_id = ?',[1,$id]);         
         return redirect('etable')->with('message','The data has been Deleted successfully');
      }

      public function editElderData($id){
         $update = DB::select('select * from elders where elder_id = :id', ['id' => $id]);
         return view('layout.updateElder',compact('update'));
      }
            
      public function updateElderData(Request $request, $id)
      {   
         $phone_num=$request->input('phone_num');
         $needed_services=$request->input('needed_services');
         $time_needed=$request->input('time_needed');
         $gender=$request->input('gender');
         $location=$request->input('location');
         $guardian_name=$request->input('guardian_name');
         $guardian_relation=$request->input('guardian_relation');
         $guardian_id_pic=$request->input('guardian_id_pic');
         $is_accepted=$request->input('is_accepted');

         DB::update('update elders set phone_num = ? , needed_services=?,time_needed = ? , gender=?,location = ? , guardian_name=?, guardian_relation=?, guardian_id_pic=?, is_accepted=? where id = ?', [$phone_num,$needed_services,$time_needed,$gender,$location,$guardian_name,$guardian_relation,$guardian_id_pic,$is_accepted,$id]);
         return redirect('etable')->with('message','The data has been updated successfully');
   
      }
         public function insert_user(Request $request){

                $request->validate([
                  'name'=>'required|alpha',
                  'lname'=>'required|alpha',
                  'email'=>'required|email',
                  'password'=>'required|min:8',
                  'phone'=>'numeric|digits_between:9,11',
                  'age'=>'required',
                  'password_confirmation' => 'required_with:password|same:password|min:8',
              ]);
                $create=new User();
                $create->name=$request->input('name');
                $create->lname=$request->input('lname');
                $create->phone=$request->input('phone');
                $create->email=$request->input('email');
                $create->password=$request->input('password');
                $create->gender=$request->input('gender');
                $create->age=$request->input('age');
                $create->front_id_pic=$request->input('front_id_pic');
                $create->back_id_pic=$request->input('back_id_pic');
                $create->needed_services=$request->input('needed_services');
                $create->time=$request->input('time');
                $create->timeTo=$request->input('timeTo');
                $create->car=$request->input('car');
                $create->save();
                return redirect('/')->with('messageRej','The data has been add user successfully');
                }


                
                public function showdynamicdata ()
                {
                  $users = DB::table('users')->where('is_accepted', '=', 1)->get();
                  $users_count = $users->count();

                  $elders = DB::table('elders')->where('is_accepted', '=', 1)
                  ->get();
                  $elders_count = $elders->count();
                   /////////////
                   $events = DB::table('events')->get();
                   $events_count = $events->count();
                   /////////////////
                   DB::update('update auns_numbers set users_number = ? , elders_number = ? , events_number = ?  where id = 1 ', [$users_count,$elders_count,$events_count]);
            
                   $numbers = DB::table('auns_numbers')
                ->where('id',1)
                ->get();
                return view('layout.dashbord',compact('numbers'));
                } 

               //  public function createElderData(Request $request){
               //    $request->validate([
               //       'name'=>'required|alpha',
               //       'phone_num'=>'numeric|digits_between:9,11',
               //       'age'=>'required','before:13 years ago',
               //       'needed_services'=>'required',
               //       'guardian_name'=>'required|alpha',
               //       'guardian_number'=>'required|numeric',
               //       'guardian_relation'=>'required|alpha',
               //       'password'=>'required|min:8',
               //       'password_confirmation' => 'required_with:password|same:password|min:8',
               //   ]);

               //    $create=new elders();
               //    $create->name=$request->input('name');
               //    $create->age=$request->input('age');
               //    $create->phone_num=$request->input('phone_num');
               //    $create->needed_services=$request->input('needed_services');
               //    $create->time_needed=$request->input('time_needed');
               //    $create->gender=$request->input('gender');
               //    $create->location=$request->input('location');
               //    $create->guardian_name=$request->input('guardian_name');
               //    $create->guardian_number=$request->input('guardian_number');
               //    $create->guardian_relation=$request->input('guardian_relation');
               //    $create->guardian_id_pic=$request->input('guardian_id_pic');
               //    $create->save();

               //    return view('etable')->with('message','The request has been added successfully');
               //  }
            
}
