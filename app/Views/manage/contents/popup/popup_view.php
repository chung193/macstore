<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

    <a class="btn btn-1 mb-3"  href="<?php echo base_url()?>/manage/popup/add/" >Thêm mới</a>
    <table class="display border">
        <thead>
            <tr>
                <th>Trạng thái</th>
                <th>URL</th>
                <th>Ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($popup as $row){
                    ?>
                    <tr>
                        <td><?php echo (($row['status']?'hiển thị':'ẩn')); ?></td>
                        <td><?php echo $row['url'] ?></td>
                        <td><img src="<?php echo base_url().'/public/uploads/Popup/'.$row['img'] ?>" width="200"></td>
                        <td>
                            <a data-toggle="tooltip" data-placement="top" title="sửa" href="<?php echo base_url() ?>/manage/popup/edit/<?php echo $row['id']?>" class="text-info"><i class="fas fa-edit"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="xóa" href="<?php echo base_url() ?>/manage/popup/delete/<?php echo $row['id']?>" class="text-danger"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>



