<?php
//http://localhost:8080/phpmyadmin/index.php?route=/server/databases

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallary;
use App\Models\Contact;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function user(){
    if(Auth::id()){
        $user=Auth()->user()->usertype;
        if($user=='user') {
          $room=Room::all();
          $data=Gallary::all();
            return view('home.index',compact('room','data'));
        }
        //when the usertype is user then it will render to the home.index file to user otherwise admin.index
        if($user=='admin'){
         
            return view('admin.index');
        }
        else{
            return redirect()->back();
        }
    }
  }
   public function home(){
    $room=Room::all();
    $data=Gallary::all();
    
    return view('home.index',compact('room','data'));
   }



  public function create_room(){
    return view('admin.create_room');
  }
  public function add_room(Request $req){
    $room=new Room;
    $room->room_title=$req->title;
    $room->description=$req->description;
    $room->price=$req->price;
    $room->room_type=$req->type;
    $room->wifi=$req->wifi;
    $image=$req->image;
    if($image){
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $req->image->move('room',$imagename);
      $room->image=$imagename;
    }
   $room->save();
   return redirect()->back();

  }

  public function view_room(){
    $data=Room::all();
    return view('admin.view_room',['data'=>$data]);
  }
  public function delete_room($id){
    $room=Room::destroy($id);
    return redirect()->back();
  }
  public function update_room($id){
     $data=Room::find($id);    
    return view('admin.update_room',["data"=>$data]);
  }
  public function edit_room(Request $req,$id){
    $data=Room::find($id);
    $data->room_title=$req->title;
    $data->description=$req->description;
    $data->price=$req->price;
    $data->room_type=$req->type;
    $data->wifi=$req->wifi;
    $image=$req->image;
    if($image){
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $req->image->move('room',$imagename);
      $data->image=$imagename;
    }
    $data->save();
    return redirect()->back();

}

public function contact(Request $req){
  $data=new Contact();
  $data->name=$req->name;
  $data->email=$req->email;
  $data->phone=$req->phone;
  $data->messages=$req->messages;
  $data->save();
  return redirect()->back();

  
}
}
