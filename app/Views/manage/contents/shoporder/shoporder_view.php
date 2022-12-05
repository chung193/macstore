<?php
$data = array(
  'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

<a href="<?php echo base_url() ?>/manage/order/add/" class="btn btn-1">Lên đơn mới</a>

<div class="mt-3">
  <table class="display border ">
    <thead>
      <tr>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Ngày đặt</th>
        <th style="width: 10%">Trạng thái</th>
        <th>Tổng tiền</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($shoporder as $val) {
      ?>
        <tr>
          <td><?= $val['id'] ?></td>
          <td><?= $val['cus_name'] ?></td>
          <td><?= $val['created_at'] ?></td>
          <td><?php
              if ($val['status']) {
                echo '<i class="fas fa-check"></i>';
              } else {
                echo '<i class="fas fa-times"></i>';
              }

              ?></td>
          <td><?= $val['total'] ?></td>
          <td>
            <a href="<?= base_url() . '/manage/order/detail/' . $val['id'] ?>">Xem chi tiết đơn hàng</a>&nbsp;&nbsp;&nbsp;
            <!-- <a class="text-danger" href="<?= $val['total'] ?>">Đã xử lý/ ẩn</a> -->
          </td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
</div>