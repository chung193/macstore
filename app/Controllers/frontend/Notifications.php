<?php namespace App\Controllers\frontend;
 
use CodeIgniter\Controller;
use App\Models\frontend\Notifications_model;
use App\Models\frontend\NotificationsStatus_model;
use App\Models\frontend\NotificationsShow_model;
use App\Models\frontend\Menu_model;
class Notifications extends BaseController
{
    public function readAll(){
        // khai báo các model
        $noti_md = new Notifications_model();
        $stt_md = new NotificationsStatus_model();
        $show_md = new NotificationsShow_model();

        $now = date("Y-m-d H:i:s");
        $session = session();
        $user_id = $session->get('user_id');

        // lấy các thông báo đã đọc
        $id = $show_md->getId($user_id);
        
        $id = array_values($id);
        $temp = array();
        foreach($id as $key => $val){
            foreach($val as $x){
                array_push($temp, $x);
            }
        };

        if(!count($temp)){
            array_push($temp, 0);
        }
        $data = $noti_md->getNotiUnShow($temp); 
        // print_r($data); die();
        foreach($data as $val){
            $temp = array(
                'id_user' => $user_id,
                'noti_id' => $val['id'],
                'created' => $now
            );
            $show_md->saveNotiShow($temp);
        };
        echo json_encode($data);
    }

    public function readAllStatus(){
        // khai báo các model
        $noti_md = new Notifications_model();
        $stt_md = new NotificationsStatus_model();
        $show_md = new NotificationsShow_model();

        $now = date("Y-m-d H:i:s");
        $session = session();
        $user_id = $session->get('user_id');

        // lấy các thông báo đã đọc
        $id = $stt_md->getId($user_id);
        
        $id = array_values($id);
        $temp = array();
        foreach($id as $key => $val){
            foreach($val as $x){
                array_push($temp, $x);
            }
        };


        if(!count($temp)){
            array_push($temp, 0);
        }

        $data = $noti_md->getNotiUnRead($temp); 
        // print_r($data); die();
        
        echo json_encode($data);
    }

    public function showNoti(){

    }

    public function read(){
        $noti_md = new Notifications_model();
        $stt_md = new NotificationsStatus_model();
        $show_md = new NotificationsShow_model();

        $now = date("Y-m-d H:i:s");
        $session = session();
        $user_id = $session->get('user_id');

        // lấy các thông báo đã đọc
        $id = $stt_md->getId($user_id);
        
        $id = array_values($id);
        $temp = array();
        foreach($id as $key => $val){
            foreach($val as $x){
                array_push($temp, $x);
            }
        };


        if(!count($temp)){
            array_push($temp, 0);
        }

        $data = $noti_md->getNotiUnRead($temp); 
        //print_r($data); die();
        foreach($data as $val){
            $temp = array(
                'id_user' => $user_id,
                'noti_id' => $val['id'],
                'created' => $now
            );
            //print_r($temp); die();
            $stt_md->saveNotiStatus($temp);
        };
        
    }

    public function push(){

    }


}