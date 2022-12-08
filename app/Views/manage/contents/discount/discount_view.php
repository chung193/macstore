
   <?php
        $data = array(
            'title' => $title
        );
        echo view('manage/components/breadcrumb', $data)
        ?>
   <a href="<?php echo base_url()?>/manage/discount/add/" class="btn btn-1 mb-4">Thêm mới</a>

    <table class="display border">
        <thead>
            <tr>
                <th style="width:20%">Tiêu đề</th>
                <th>Ảnh</th>
                <th>Từ ngày</th>
                <th>Đến ngày</th>
                <th>Tỉ lệ giảm</th>
                <th>Số tiền giảm</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($discount as $row){
            ?>
            <tr>
                <td><?= $row['title']?></td>
                <td><img src="<?= base_url().'/public/uploads/discount/'.$row['banner']?>" width="200"></td>
                <td><?= $row['from_date']?></td>
                <td><?= $row['to_date']?></td>
                <td><?= $row['ratio']?></td>
                <td><?= $row['money']?></td>
                <td>
                    <a class="text-info" href="<?php echo base_url()?>/manage/discount/edit/<?= $row['id'];?>"><i class="fas fa-edit"></i></a>
                    <a class="text-danger" href="<?php echo base_url()?>/manage/discount/delete/<?= $row['id'];?>"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>


