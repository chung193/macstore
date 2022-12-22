<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

<div class="row">
    <div class="col-12 col-md-6">
        <p>Website sẽ hiển thị popup mới nhất có trạng thái là hiển thị. Nếu không có popup nào trạng thái hiển thị, website sẽ không hiển thị 1 popup nào</p>
        <form action="<?php echo base_url() ?>/manage/popup/save" method="post" id="addPopup" enctype='multipart/form-data'>
            <?php if (session()->getFlashdata('msgErr')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
            <?php endif; ?>

            <select class="form-select mb-3" name="status" aria-label="Default select example">
                <option value="1" selected>Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>

            <div class="mb-3">
                <label for="title" class="form-label">URL</label>
                <input type="text" class="form-control" name="url" placeholder="URL">
            </div>

            <div class="input-group mb-3">
                <div class="custom-file  ">
                    <input type="file" name="img" id="imgus" class=" form-control custom-file-input">
                </div>
            </div>

            <div id="preview" class="pb-3"></div>

            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" onclick="history.back()" class="btn btn-light border">Hủy</button>
        </form>
    </div>
</div>