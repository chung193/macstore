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
use App\Models\frontend\Page_model;
use App\Models\frontend\Seo_model;
use App\Models\frontend\Category_model;
use App\Models\frontend\Menu_model;

class Category extends BaseController
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
            'json_menu' => $jsonmenu_md->getmenu('main'),
            'info' => $info_md->getInfo(),
            'menu' => $shop_category_md->getShopCategory(),
            'slider' => $shop_slider_md->getSlider(),
            // arrivals product in homepage
            'mostsaleslick' => $shop_product_md->getArrivalsProduct(6),
            'arrivals' => $shop_product_md->getArrivalsProduct(3),
            'featured' => $shop_product_md->getFeaturedProduct(3),
            'mostsale' => $shop_product_md->getMostSaleProduct(3),
            'banner' => $banner_md->getbanner(),
           
        );   
    }
    
    public function index($slug)
    {
        $category_md = new Category_model();
        $category = $category_md->getCategorySlug($slug);
        $category_id = $category_md->getCategoryIdSlug($slug);
        //print_r($category_id);die();
        $post = $category_md->getCategoryPostSlug($category_id);
        $recent = $category_md->getCategoryRecentPost();
        $seo = $this->getSeoContent($category->id, 'category');
        //print_r($seo);die();
        $this->base['seo'] = $seo;
        //print_r($post);die();
        $data['test'] = array(
            'subview'   => '/frontend/contents/category/category',
            'title'     => $category->title,
            'category' => $category,
            'post' => $post,
            'recent_post' => $recent,
            'base' => $this->base
        );
        
        echo view('frontend/layout',$data);
    }
}
