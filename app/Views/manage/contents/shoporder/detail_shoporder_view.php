<?php
$data = array(
  'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>
<table class="display border">
  <thead>
    <tr>
      <th>Mã đơn hàng</th>
      <th>Tên khách hàng</th>
      <th>Ngày đặt</th>
      <th style="width: 10%">Trạng thái</th>
      <th>Tổng tiền</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $order->id ?></td>
      <td><?= $order->cus_name ?></td>
      <td><?= $order->created_at ?></td>
      <td><?php
          if ($order->status) {
            echo '<i class="fas fa-check"></i>';
          } else {
            echo '<i class="fas fa-times"></i>';
          }

          ?></td>
      <td><?= price_format($order->total) ?></td>
    </tr>
  </tbody>
</table>

<div class="row mb-2 mt-2">
  <div class="col-sm-6">
    <h3>Chi tiết cho đơn hàng này </h3>
  </div>
</div>
<div class="row border m-0 p-3">
  <table class="display border">
    <thead>
      <tr>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Khuyến mại áp dụng</th>
        <th>Giá sau khuyến mại</th>
        <th>Tổng tiền</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($detail as $val) {
      ?>
        <tr>
          <td><?= $val['pro_name'] ?></td>
          <td><?= $val['qty'] ?></td>
          <td><?= price_format($val['price']) ?></td>
          <td><?php
              if ($val['dis_id'] != 1) {
                echo $val['title'];
              }

              ?></td>
          <td><?php
              if ($val['dis_id'] == 1) {
                $sub_total = $val['price'];
                echo  price_format($val['price']);
              } else {
                $now = date('Y-m-d');
                $sub_total = 0;
                if ($now > $val['from_date'] && $now < $val['to_date']) {
                  if ($val['ratio'] != 0) {
                    $sub_total = $val['price'] - (($val['price'] / 100) * $val['ratio']);
                    echo price_format($sub_total);
                  } elseif ($val['money'] != 0) {
                    $sub_total = $val['price'] - $val['money'];
                    echo price_format($sub_total);
                  }
                } else {
                  $sub_total = $val['price'];
                  echo price_format($sub_total);
                }
              }
              ?></td>
          <td><?= price_format($sub_total * $val['qty']) ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>