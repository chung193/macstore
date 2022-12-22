<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

<div class="row">
    <div class="col-12 col-md-6">
        <form action="<?php echo base_url() ?>/manage/popup/update" id="editpopup" method="post" enctype='multipart/form-data'>

            <?php if (session()->getFlashdata('msgErr')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
            <?php endif; ?>

            <select class="form-select mb-3" name="status" aria-label="Default select example">
                <option value="1" <?= ($popup->status)?'selected':'' ?>>Hiển thị</option>
                <option value="0" <?= (!$popup->status)?'selected':'' ?>>Ẩn</option>
            </select>

            <input type="hidden" class="form-control" name="id" value="<?php echo $popup->id ?>">
            <input type="hidden" class="form-control" name="old_img" value="<?php echo $popup->img ?>">

            <div class="mb-3">
                <label for="title" class="form-label">URL</label>
                <input type="text" class="form-control" name="url" placeholder="URL" value="<?php echo $popup->url ?>">
            </div>


            <img src="<?php echo base_url() . '/public/uploads/popup/' . $popup->img ?>" width="200" style="margin-bottom:20px">

            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" name="img" id="imgus" class="custom-file-input form-control">
                </div>
            </div>

            <div id="preview" class="pb-3"></div>

            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" onclick="history.back()" class="btn btn-light border">Hủy</button>
        </form>
    </div>
</div>