<?php namespace App\Controllers\frontend;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Customer_model;
use App\Models\manage\Tinhthanhpho_model;
use App\Models\manage\Info_model;
use App\Models\manage\Option_model;
use App\Models\frontend\Menu_model;
class Customer_dob extends BaseController
{
    public $site;
    function __construct()
    {

        $info_md = new Info_model();
        $this->site = array(
            'info' => $info_md->getInfo()
        );
    }

    public function sendemail($to, $name){
        try {
            $email = \Config\Services::email();
            $optionModel = new Option_model();

            $option = array_column($optionModel->getOption(), null, "name");
            //print_r($option);die();
            // config sendmail
            $config['protocol'] = $option['mail_protocol']['value'];
            $config['SMTPHost'] = $option['mail_SMTPHost']['value'];
            $config['SMTPUser']  = $option['mail_user']['value'];
            $config['SMTPPass'] = $option['mail_password']['value'];
            $config['SMTPPort'] = $option['mail_SMTPPort']['value'];
            $config['SMTPCrypto'] = $option['mail_SMTPCrypto']['value'];

            $email->initialize($config);

            // $date = getServerTimestamp();

            $subject = "Chúc mừng sinh nhật quý khách ". $name;
            $temp = array(
                'name' => $name
            );
            $message = view('frontend/contents/mail_message/birthday',$temp);
            
            
            $email->setTo($to);
            $email->setFrom($option['site_mail']['value'], 'Chúc mừng sinh nhật từ Macstore');
            $email->setNewLine("\r\n");
            $email->setMailType('html');
            $email->setSubject($subject);
            $email->setMessage($message);

            

            if ($email->send()) 
            {
                
            } 
            else 
            {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }
        } catch (Exception $e) {
            $error = $email->ErrorInfo;
            $session = session();
            $session->setFlashdata('msg', $error);
        }
    }


    public function index()
    {
        $model = new Shop_Customer_model();
        $data['customer'] = $model->getcustomer();
        foreach($data['customer'] as $val){
            if(is_birthday($val['dob'])){
                $this->sendemail($val['email'], $val['name']);
            }
        }
    }
}