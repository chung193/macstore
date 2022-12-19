<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>
    <a href="<?php echo base_url()?>/manage/shop-producer/add/" class="btn btn-1">Thêm mới</a>

    <table class="display border">
        <thead>
            <tr>
                <th>Tên</th>
                <th>url</th>
                <th>Hinh anh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // print_r($producer);
            // die();
            foreach($producer as $val){?>
            <tr>
                <td><?php echo $val['name']?></td>
                <td><?php echo $val['url']?></td>
                <td><?php echo $val['img']?></td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="sửa" href="<?php echo  base_url()?>/manage/shop-producer/edit/<?php echo  $val['id']?>" class="text-info"><i class="fas fa-edit"></i></a>
                    <a data-toggle="tooltip" data-placement="top" title="xóa" href="<?php echo  base_url()?>/manage/shop-producer/delete/<?php echo  $val['id']?>" class="text-danger"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>


