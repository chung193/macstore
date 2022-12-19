<div class="row">
    <div class="col-12 col-md-6">

        <?php
        $data = array(
            'title' => $title
        );
        echo view('manage/components/breadcrumb', $data)
        ?>
        <?php if (session()->getFlashdata('msgErr')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
        <?php endif; ?>
        <form action="<?php echo base_url() ?>/manage/discount/update" method="post" enctype='multipart/form-data'>
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" id="title" class="form-control" name="title" value="<?= $discount->title ?>" placeholder="tiêu đề chính">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Nội dung</label>
                <textarea class="form-control" name="description" style="min-heigh: 400px" placeholder="Nội dung" id="editor" rows="3">
            <?= $discount->description ?></textarea>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Slug</label>
                <input type="text" class="form-control" name="slug" value="<?= $discount->slug ?>" placeholder="URL">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Tỉ lệ giảm (%)</label>
                <input type="number" id="title" class="form-control" value="<?= $discount->ratio ?>" name="ratio" placeholder="Tỉ lệ giảm (%)">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Số tiền</label>
                <input type="number" id="title" class="form-control" value="<?= $discount->money ?>" name="money" placeholder="Số tiền">
            </div>

            <input type="hidden" value="<?= $discount->id ?>" name="id">
            <input type="hidden" value="<?= $discount->banner ?>" name="old_banner">

            <div class="form-group mb-3 ">
                <label>Chương trình chạy từ:</label>

                <div class="input-group">
                    <input type="text" name="date" class="form-control float-right" id="reservation" value="<?= date("m-d-Y", strtotime($discount->from_date)) . ' - ' . date("m-d-Y", strtotime($discount->to_date)) ?>">
                </div>
                <!-- /.input group -->
            </div>


            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" name="img" id="imgus" class="custom-file-input form-control">
                    <label class="custom-file-label" for="customFile">Chọn ảnh</label>
                </div>
            </div>

            <img src="<?= base_url() . '/public/uploads/discount/' . $discount->banner ?>" width="200">
            <div id="preview" class="mt-3 pb-3"></div>

            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" onclick="history.back()" class="btn border btn-light">Hủy</button>
            
        </form>
    </div>
</div>