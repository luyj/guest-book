<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
function getip(){ return $_SERVER["REMOTE_ADDR"]; }
function getLocation($ip){
$url='http://ip.taobao.com/service/getIpInfo.php?ip='.$ip;
$res = json_decode(file_get_contents($url));
if($res->code==1)
return false;
$data=$res->data;
return $data->country.$data->area.$data->region.$data->city;}

class MessageController extends Controller
{
    public function index(){
return view('message')->with('messages',\App\Message::all());
 
}
public function store(Request $request){
      $message = new \App\Message;
       $ip = new \App\Ip;
      $message->body = $request->get('body');
      $message->user_id = 1;
      $message->location = getLocation(getip());
      $message->save();
      $ip->ip =getip();
      $ip->location = getLocation(getip());
      $ip->save();
         return redirect('message');
         return redirect('ip');
 
     /*$sql="select*from ips where ip='$ip'";
     $result=mysql_query($sql);
     $row = mysql_fetch_array($result,MYSQL_ASSOC);
     if(!mysql_num_rows($result))
      {
     
      
     
     }*/
    

 

}}
