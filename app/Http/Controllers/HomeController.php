<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallary;
use App\Models\Contact;
use Notification;
use App\Notifications\MyFirstNotification;

class HomeController extends Controller
{
    //
    public function room_details($id){
        $room=Room::find($id);
        return view('home.room_details',compact('room'));
    }
    public function add_booking(Request $req,$id){

      $req->validate([
        'name'=>'required',
        'phone'=>'required |max:10 ',
        'email'=>'required',
        'startdate'=>'required | date',
        'enddate'=>'required |after: startdate',
      ]);
        $book=new Booking();
        $book->room_id=$id;//here we paas to the id of the room to room_id
        $book->name=$req->name;
        $book->email=$req->email;
        $book->phone=$req->phone;
       //below code is use for to avoide double booking
        $startdate=$req->startdate;//takin data from to the req i.e booking form
        $enddate=$req->enddate;
        $isBooked=Booking::where('room_id',$id)//This query checks if any existing booking of the room (room_id = $id) overlaps with the desired booking period.
        ->where('startdate','<=',$enddate)//existing startdate is before or equal to requested enddate
        ->where('endtdate','>=',$startdate)//existing endtdate is after or equal to requested startdate
        ->exists();//this return true
        if($isBooked){
          return redirect()->back()->with('message','Sorry Room is alrady booked');
        }else{
          $book->startdate=$req->startdate;
          $book->endtdate=$req->enddate;
          $book->save();
          return redirect()->back()->with('message','Room is Booked');
        }
      }
        public function bookings(){
          $data=Booking::all();
        return view('admin.bookings',compact('data'));
        }
        public function delete_booking($id){
        $data=Booking::destroy($id);
        return redirect()->back()->with('msg','Room is deleted');
        }
        public function view_gallary(){
          $data=Gallary::all();
          return view('admin.view_gallary',compact('data'));
        }
        public function upload_gallary(Request $req){
          $data=new Gallary;
          $image=$req->image;
          if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $req->image->move('gallary',$imagename);//the images are store at gallary folder
            $data->image=$imagename;
          }
         $data->save();
         return redirect()->back();
        }
        public function delete_gallary($id){
          $data=Gallary::destroy($id);
          return redirect()->back();
        }
        public function all_message(){
          $data=Contact::all();
          return view('admin.all_message',compact('data'));
        }
        public function send_mail($id){
          $data=Contact::find($id);
          
          return view('admin.send_mail',compact('data'));
        }
        public function mail(Request $req,$id){
          $data=Contact::find($id);
          $details=[
            'greeting'=>$req->greeting,
            'body'=>$req->body,
            'action_text'=>$req->action_text,
            'action_url'=>$req->action_url,
            'endline'=>$req->endline,
          ];
          Notification::send($data,new MyFirstNotification($details));
         return redirect()->back();  
        }
        public function approve_book($id){
          $data=Booking::find($id);
          $data->status='approve';//1 is for approved
          $data->save();
          return redirect()->back();
        }
        public function reject_book($id){
          $data=Booking::find($id);
          $data->status='reject';//0 is for rejected
          $data->save();
          return redirect()->back();
        }
}

