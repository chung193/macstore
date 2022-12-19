<?php
$data = array(
  'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

<a href="<?php echo base_url() ?>/manage/shop-product/add/" class="btn btn-1 mb-3">Thêm mới</a>



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