<?php

namespace App\Controllers\frontend;
use App\Models\frontend\Home_model;
use App\Models\frontend\Ui_model;
use App\Models\frontend\Info_model;
use App\Models\frontend\Shop_Category_model;
use App\Models\frontend\Shop_Slider_model;
use App\Models\frontend\Shop_Product_model;
use App\Models\frontend\Banner_model;
use App\Models\frontend\Option_model;
use App\Models\frontend\Shop_Customer_model;
use App\Models\frontend\Menu_model;
class Customer extends BaseController
{
    public $base; // for some data common
    function __construct()
    {
        $ui_md = new Ui_model();
        $info_md = new Info_model();
        $shop_category_md = new Shop_Category_model();
        $shop_slider_md = new Shop_Slider_model();
        $shop_product_md = new Shop_Product_model();
        $banner_md = new Banner_model();
        $option_md = new Option_model();
        $jsonmenu_md = new Menu_model();
        $this->base = array(
            'ui' => $ui_md->getUi(),
            'info' => $info_md->getInfo(),
            'menu' => $shop_category_md->getShopCategory(),
            'slider' => $shop_slider_md->getSlider(),
            'json_menu' => $jsonmenu_md->getmenu('main'),
            // arrivals product in homepage
            'mostsaleslick' => $shop_product_md->getArrivalsProduct(6),
            'arrivals' => $shop_product_md->getArrivalsProduct(3),
            'featured' => $shop_product_md->getFeaturedProduct(3),
            'mostsale' => $shop_product_md->getMostSaleProduct(3),
            'banner' => $banner_md->getbanner(),
            'seo' => array_column($option_md->getOptions(), null, "name") 
        );    
        //print_r($this->base['option']); die();
    }
    
    public function index()
    {
        $data['test'] = array(
            'subview'   => '/frontend/contents/home/index',
            'title'     => "Home",
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }

    public function register()
    {
        $data['test'] = array(
            'subview'   => '/frontend/contents/shop_customer/register',
            'title'     => "????ng k?? th??nh vi??n",
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }

    public function login()
    {
        $data['test'] = array(
            'subview'   => '/frontend/contents/shop_customer/login',
            'title'     => "????ng nh???p",
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        $url = base_url();
        return redirect()->to($url); 
    }

    public function auth(){
        $session = session();
        $customer_md = new Shop_Customer_model();
        $user = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $customer_md->where('username', $user)->first();
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'customer_id' => $data['id'],
                    'customer_name' => $data['name'],
                    'customer_email' => $data['email'],
                    'customer_phone' => $data['phone'],
                    'customer_address' => $data['address'],
                    'customer_city' => $data['matp'],
                    'customer_isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                $session->setFlashdata('msg', '????ng nh???p th??nh c??ng');
                return redirect()->to('');
            
            }else{
                $session->setFlashdata('msgErr', 'M???t kh???u b???n nh???p ch??a ????ng.');
                return redirect()->to('/khach-hang/dang-nhap');
            }
        }else{
            $session->setFlashdata('msgErr', 'T??n ng?????i d??ng kh??ng t???n t???i.');
            return redirect()->to('/khach-hang/dang-nhap');
        }
    }

    public function save(){
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'username'          => 'required|min_length[2]|max_length[50]|is_unique[shop_customer.username]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[shop_customer.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $customer_md = new Shop_Customer_model();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'phone'     => $this->request->getVar('phone'),
                'username'    => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $customer_md->saveCustomer($data);
            $session = session();
            $session->setFlashdata('msg', 'B???n ???? ????ng k?? th??nh c??ng');
            return redirect()->to('/khach-hang/dang-nhap');
        }else{
            $session = session();
            $session->setFlashdata('msgErr', $this->validator->listErrors());
            return redirect()->to('/khach-hang/dang-ky');
        }
    }
}
