<form action="<?php echo base_url(); ?>/manage/import/importFile" method="post" class="p-3 mb-3 mt-3 border rounded" enctype="multipart/form-data">
    <h3><strong>Thêm danh mục sản phẩm bằng file csv</strong></h3>
    <p>Bạn có thể thêm danh mục sản phẩm bằng file csv với mẫu có sẵn</p>
    Upload excel file :
    <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input form-control" value="" />
            <?= session()->getFlashdata('msgErr') ?>
        </div>
    </div>
    <input type="hidden" name="type" value="shopcategory" />
    <input type="submit" name="submit" class="btn btn-1" value="Upload" />
</form>