<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

<?php if (session()->getFlashdata('msgErr')) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
<?php endif; ?>
<div class="row">
    <div class="col-md-8 col-12">
        <form action="<?php echo base_url() ?>/manage/discount/save" method="post" enctype='multipart/form-data'>

            <div class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label for="title" class="form-label">Tiêu đề</label>
                    <input type="text" id="title" class="form-control" name="title" placeholder="tiêu đề chính">
                </div>

                <div class="mb-3 col-12 col-md-6">
                    <label for="title" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="URL">
                </div>
            </div>


            <div class="row">
                <div class="mb-3  col-12 col-md-6">
                    <label for="title" class="form-label">Tỉ lệ giảm (%)</label>
                    <input type="number" id="title" class="form-control" name="ratio" placeholder="Tỉ lệ giảm (%)">
                </div>

                <div class="mb-3  col-12 col-md-6">
                    <label for="title" class="form-label">Số tiền</label>
                    <input type="number" id="title" class="form-control" name="money" placeholder="Số tiền">
                </div>
            </div>


            <div class="form-group">
                <label>Chương trình chạy từ:</label>

                <div class="input-group">
                    <input type="text" name="date" class="form-control float-right" id="reservation">
                </div>
                <!-- /.input group -->
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Nội dung</label>
                <textarea class="form-control" name="description" style="min-heigh: 400px" placeholder="Nội dung" id="editor" rows="3"></textarea>
            </div>

            <div class="input-group mb-3">
                <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Chọn ảnh</label>
                    <input type="file" name="img" id="imgus" class="custom-file-input form-control">
                </div>
            </div>

            <div id="preview" class="pb-3"></div>

            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" onclick="history.back()" class="btn border btn-light">Hủy</button>
        </form>
    </div>
</div>