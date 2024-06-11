<?php

use Orm\User;

class Tes extends CI_Controller  {
    public function user($nama, $password){
        $user = new user();
        $user->username = $nama;
        $user->password = $password;
        if($user->save()){
        echo "isi data berhasil : " . $nama . " berhasil mendaftar ";
    }else{
        echo "isi data gagal";
    }
}
}
