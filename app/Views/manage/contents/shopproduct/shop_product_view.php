<?php
// print_r($producer); die();

$x = ($_GET)?(isset($_GET['catalog'])? $_GET['catalog'] : $_GET['producer']):'';
$y = ($_GET)?(isset($_GET['catalog'])? ' theo danh mục ' : ' theo nhà cung cấp '):'';
$filter = $y.'<b>'.$x.'</b>';
$data = array(
  'title' => $title
);
echo view('manage/components/breadcrumb', $data)

?>


<div class="row">
  <div class="col-12 col-md-4">
    <a href="<?php echo base_url() ?>/manage/shop-product/add/" class="btn btn-1 mb-3">Thêm mới</a>
  </div>
  <div class="col-12 col-md-8">
    <div class="row">
    <div class="col-12 col-md-4">
      <label>Lọc <?= $filter?></label>
    </div>
      <div class="col-12 col-md-4">
        <select class="form-control" id="selectCat">
          <?php 
            foreach($cat as $val){
              echo '<option value="'.base_url().'/manage/shop-product?catalog='.$val['title'].'">'.$val['title'].'</option>';
            }
          ?>
        </select>
      </div>
      <div class="col-12 col-md-4">
        <select class="form-control" id="selectProducer">
          <?php 
            foreach($producer as $item){
              echo '<option value="'.base_url().'/manage/shop-product?producer='.$item['name'].'">'.$item['name'].'</option>';
            }
          ?>
        </select>
      </div>
    </div>
  </div>
</div>



<table class="display border">
  <thead>
    <tr>
      <th>Tên</th>
      <th>slug</th>
      <th>Giá</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // print_r($shopproduct);
    // die();
    foreach ($shopproduct as $val) { ?>
      <tr>
        <td><?php echo $val['name'] ?></td>
        <td><?php echo $val['slug'] ?></td>
        <td><?php echo price_format($val['price']) ?></td>
        <td>
          <a data-toggle="tooltip" data-placement="top" title="sửa" href="<?php echo  base_url() ?>/manage/shop-product/edit/<?php echo  $val['id'] ?>" class="text-info"><i class="fas fa-edit"></i></a>
          <a data-toggle="tooltip" data-placement="top" title="xóa" href="<?php echo  base_url() ?>/manage/shop-product/delete/<?php echo  $val['id'] ?>" class="text-danger"><i class="fas fa-times"></i></a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>