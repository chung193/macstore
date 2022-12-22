<?php namespace App\Controllers\manage;
 
use CodeIgniter\Controller;
use App\Models\manage\Popup_model;
use App\Models\manage\Info_model;

class Popup extends BaseController
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
        $model = new Popup_model();
        $data['popup'] = $model->getpopup();

        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'table',
            'subview'   => '/manage/contents/popup/popup_view',
            'title'     => "popup",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }

    public function add()
    {
        $session = session();
        $data['data'] = array(
            'site' => $this->site,
            'type' => 'form',
            'subview'   => '/manage/contents/popup/add_popup_view',
            'title'     => "Thêm popup",
            'name'      => $session->get('user_name')
        );
        echo view('manage/layout',$data);
    }
 
    public function save()
    {
        $rules = [
            'url'      => ['label'=>'Đường dẫn','rules'=>'required|min_length[3]|max_length[600]'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];
         
        if($this->validate($rules)){
           

            if($this->request->getFile('img') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/popup/');
                    $basename = $img->getName();
                }
            }else{
                $basename = '';
            }

            $model = new Popup_model();

            $session = session();

            $data = array(
                'status' => $this->request->getPost('status'),
                'url' => $this->request->getPost('url'),
                'img' => $basename,
            );
            $model->savepopup($data);
            $session = session();
            $session->setFlashdata('msg','Thông tin đã được lưu lại');
            return redirect()->to('/manage/popup');
        }else{
            $session = session();
            $session->setFlashdata('msgErr', $this->validator->listErrors());
            return redirect()->to('/manage/popup/add/');
        }
    }

    public function edit($id)
    {
        
            $model = new Popup_model();
            $data['popup'] = $model->getpopup($id)->getRow();
            $session = session();
            $data['data'] = array(
                'site' => $this->site,
                'type' => 'form',
                'subview'   => '/manage/contents/popup/edit_popup_view',
                'title'     => "Sửa popup",
                'name'      => $session->get('user_name')
            );
            echo view('manage/layout',$data);
    }
 
    public function update()
    {
        $rules = [
            'url'   => ['label'=>'URL','rules'=>'min_length[3]|max_length[2000]'],
            'img' => [
                'label' => 'Image File',
                'rules' => 'is_image[img]'
                    . '|mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[img,102400]'
                    . '|max_dims[img,204800, 204800]',
            ],
        ];

        $id = $this->request->getPost('id');
        if($this->validate($rules)){

            $model = new Popup_model();

            if($this->request->getFile('image') !== ""){
                $img = $this->request->getFile('img');
                $basename = '';
                if ($img->isValid() && !$img->hasMoved()) {
                    $img->move(ROOTPATH.'/public/uploads/popup/');
                    $basename = $img->getName();
                }
            }else{
                $basename = $this->request->getPost('old_img');
            }
            

            if ($basename  == ''){
                $basename = $this->request->getPost('old_img');
            }
            
            $data = array(
                'status' => $this->request->getPost('status'),
                'url' => $this->request->getPost('url'),
                'img' => $basename,
            );


            $model->updatepopup($data, $id);
            $session = session();
            $session->setFlashdata('msg', 'Thông tin đã được lưu lại');
            return redirect()->to('/manage/popup');
        }else{
            $session = session();
            $session->setFlashdata('msgErr', $this->validator->listErrors());
            return redirect()->to('/manage/popup/edit/'.$id);
        }
    }

    public function delete($id)
    {
        $model = new Popup_model();
        $model->deletepopup($id);
        $session = session();
        $session->setFlashdata('msg', 'Thông tin đã được lưu lại');
        return redirect()->to('/manage/popup');
    }

}