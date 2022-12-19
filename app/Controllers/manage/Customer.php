<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Shop_Customer_model;
use App\Models\manage\Tinhthanhpho_model;
use App\Models\manage\Info_model;

class Customer extends BaseController
{
    public $site;
    function __construct()
    {

        $info_md = new Info_model();
        $this->site = array(
            'info' => $info_md->getInfo()
        );
    }


    public function index()
    {
        $model = new Shop_Customer_model();
        $data['customer'] = $model->getcustomer();
        //print_r($data['customer'] ); die();
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/customer/customer_view_editor';
        }else{
            $subview = '/manage/contents/customer/customer_view';
        }
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => $subview,
            'title'     => "Khách hàng",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $ttp = new Tinhthanhpho_model();
        $model = new Shop_Customer_model();
        $data['customer'] = $model->getcustomer();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'ttp' => $ttp->gettinhthanhpho(),
            'subview'   => '/manage/contents/customer/add_customer_view',
            'title'     => "Thêm thông tin khách hàng",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'name'      => 'required|max_length[600]',
            'username'      => 'required|max_length[600]',
            'phone'      => 'required|max_length[600]',
            'email'  => 'min_length[3]|max_length[2000]',
            'address'  => 'min_length[3]|max_length[2000]',
        ];
         
        if($this->validate($rules)){
            $model = new Shop_Customer_model();
            $pw = '';
            if($this->request->getVar('password')){
                $pw = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            }else{
                $pw = password_hash('123123', PASSWORD_DEFAULT);
            }
           
            $data = array(
                'name'     => $this->request->getPost('name'),
                'username'     => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'matp' => $this->request->getPost('matp'),
                'dob' => $this->request->getPost('dob'),
                'password' => $pw
            );

            $model->savecustomer($data);
            $session = session();
            $session->setFlashdata('msg', 'Thông tin đã được lưu lại');
            return redirect()->to('/manage/customer');
        }else{
            $session = session();
            $session->setFlashdata('msgErr', $this->validator->listErrors());
            return redirect()->to('/manage/customer/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Shop_Customer_model();
        $ttp = new Tinhthanhpho_model();
        $data['customer_list'] = $model->getcustomer();
        $data['customer'] = $model->getcustomer($id)->getRow();

        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/customer/edit_customer_view',
            'title'     => "Sửa thông tin khách hàng",
            'ttp' => $ttp->gettinhthanhpho(),
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'name'      => 'required|max_length[600]',
            'username'      => 'required|max_length[600]',
            'phone'      => 'required|max_length[600]',
            'email'  => 'min_length[3]|max_length[2000]',
            'address'  => 'min_length[3]|max_length[2000]',
        ];
        $id = $this->request->getPost('id');
        if($this->validate($rules)){
            $model = new Shop_Customer_model();
            $pw = '';
            if($this->request->getVar('password')){
                $pw = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
            }else{
                $pw = $this->request->getVar('old_pw');
            }

            $data = array(
                'name'     => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'matp' => $this->request->getPost('matp'),
                'dob' => $this->request->getPost('dob'),
                'password' => $pw
            );
            $model->updatecustomer($data, $id);
            $session = session();
            $session->setFlashdata('msg', 'Thông tin đã được lưu lại');
            return redirect()->to('/manage/customer');
        }else{
            $session = session();
            $session->setFlashdata('msgErr', $this->validator->listErrors());
            return redirect()->to('/manage/customer/edit/'. $id);
        }
    }

    public function delete($id)
    {
        $model = new Shop_Customer_model();
        $model->deletecustomer($id);
        $session = session();
        $session->setFlashdata('msg', 'Thông tin đã được lưu lại');
        return redirect()->to('/manage/customer');
    }

}