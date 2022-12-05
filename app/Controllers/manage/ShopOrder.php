<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Seo_model;
use App\Models\manage\Shop_Order_model;
use App\Models\manage\Info_model;
use App\Models\manage\Shop_Customer_model;
use App\Models\manage\Shop_Product_model;

class ShopOrder extends BaseController
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
        $model = new Shop_Order_model();
        
        $data['shoporder'] = $model->getShoporder();
        
        $session = session();
        if($session->get('user_role') == 'editor'){
            $subview = '/manage/contents/shoporder/shoporder_view_editor';
        }else{
            $subview = '/manage/contents/shoporder/shoporder_view';
        }
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => $subview,
            'title'     => "Đơn hàng",
            'name'      => $session->get('user_name')
        );
        
        echo view('manage/layout',$data);
    }
    public function add()
    {
        $session = session();
        $cus_md = new Shop_Customer_model();
        $pro_md = new Shop_Product_model();
        $model = new Shop_Order_model();
        $data['customer'] = $cus_md->getcustomer();
        $data['product'] = $pro_md->getshopproduct();
        //print_r($data['customer']); die();
        $data['shopOrder'] = $model->getshopOrder();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/shopOrder/add_shopOrder_view',
            'title'     => "Thêm mới đơn hàng",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'name'      => ['label' => 'Tên danh mục','rules' =>'required|max_length[600]'],
            'description'       => ['label' => 'Mô tả','rules' =>'required'],
            'parent_id'       => ['label' => 'Danh mục cha','rules' =>'required'],
        ];
         
        

        if($this->validate($rules)){
            $model = new Shop_Order_model();
            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('name'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }
            
            $count = $model->countWhere($slug);
            if($count){
                $slug=$slug.'-'.$count;
            }
            // check default shopOrder
            if($this->request->getPost('is_default')){
                $model->defaultcat();
                $default=1;
            }else{
                $default=0;
            }

            $data = array(
                'name'     => $this->request->getPost('name'),
                'slug' => $slug,
                'is_default' => $default,
                'description' => $this->request->getPost('description'),
                'parent_id' => $this->request->getPost('parent_id'),
            );
            
            $model->saveshopOrder($data);
            // thêm mới data seo
            $id_inserted = $model->insertID();
            $seo = array(
                'meta_title' => $this->request->getPost('meta_title'),
                'meta_description' => $this->request->getPost('meta_description'),
                'content_type' => 'shopOrder',
                'content_id' => $id_inserted
            );
            $this->setSeoContent($seo);
            return redirect()->to('/manage/shop-Order');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-Order/add/');
        }
    }

    public function edit($id=false)
    {
        $model = new Shop_Order_model();
        $data['shopOrder_list'] = $model->getShopOrder();
        // print_r($data['shopOrder_list']); die();
        $data['shopOrder'] = $model->getShopOrder($id)->getRow();
        $seo = $this->getSeoContent($id, 'shopOrder')->getRow();
        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/shopOrder/edit_shopOrder_view',
            'title'     => "Chỉnh sửa thông tin danh mục sản phẩm",
            'seo' => $seo,
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function update()
    {
        
        $rules = [
            'name'      => ['label' => 'Tên danh mục','rules' =>'required|max_length[600]'],
            'description'       => ['label' => 'Mô tả','rules' =>'required'],
            'parent_id'       => ['label' => 'Danh mục cha','rules' =>'required'],
        ];

        $id = $this->request->getPost('id');
         
        if($this->validate($rules)){
            $model = new Shop_Order_model();
            
            // check default shopOrder
            if($this->request->getPost('is_default')){
                $model->defaultcat();
                $default = 1;
            }else{
                $default = 0;
            }

            if($this->request->getPost('slug') == ""){
                $slug = create_slug($this->request->getPost('name'));
            }else{
                $slug = create_slug($this->request->getPost('slug'));
            }
            
            $count = $model->countWhere($slug);
            if($count){
                $slug=$slug.'-'.$count;
            }

            $data = array(
                'name'  => $this->request->getPost('name'),
                'slug' => $slug,
                'description' => $this->request->getPost('description'),
                'is_default' => $default,
                'parent_id' => $this->request->getPost('parent_id'),
            );
            $model->updateshopOrder($data, $id);

            $seo_model = new Seo_model();
             $seo_item = $seo_model->getseo($id, 'shopOrder')->getRow();
             $seo = array(
                 'meta_title' => $this->request->getPost('meta_title'),
                 'meta_description' => $this->request->getPost('meta_description'),
                 'content_type' => 'shopOrder',
                 'content_id' => $id
             );
             // print_r($seo);die();
             $this->updateSeoContent($seo, $seo_item->id);

            return redirect()->to('/manage/shop-Order');
        }else{
            $session = session();
            $session->setFlashdata('msg', $this->validator->listErrors());
            return redirect()->to('/manage/shop-Order/edit/'.$id);
        }
    }

    
    public function detail($id=false)
    {
        $model = new Shop_Order_model();
        $order = $model->getShoporder($id);
        $detail = $model->getShopOrderDetail($id);
        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => '/manage/contents/shoporder/detail_shoporder_view',
            'title'     => "Chi tiết đơn hàng",
            'name' => $session->get('user_name'),
            'order' => $order,
            'detail' => $detail
        );
        echo view('manage/layout',$data);
    }

}