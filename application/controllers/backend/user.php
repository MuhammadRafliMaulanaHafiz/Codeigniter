<?php

class user extends  MY_Controller{
   public function profile(){

    $notif = null;
    $user = \Orm\user::first();
     if($this->input->post()){
       $username = $this->input->post('username');
       $password = $this->input->post('password');

       if($username == '' || $password == ''){
        $notif = "username/password tidak boleh kosong";
       }else{
        $user->username = $username;
       $user->password = $password;
       $user->save();

       $notif = "username/password berhasil diganti";
       }

    
     }

     view('backend.user.profile', ['user' =>$user, 'notif' =>$notif]);
   }
}