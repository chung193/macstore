<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

    <div class="row">
    <div class="col-md-12">

    <?php if(session()->getFlashdata('msgErr')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
    <?php endif;?>
    <form action="<?php echo base_url()?>/manage/shop-ui/update" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Text trên top header</label>
            <input type="text" id="title" class="form-control" name="text_top_header" placeholder="Text trên top header" value="<?php echo $shopui->text_top_header?>">
        </div>
        

        <input type="hidden" class="form-control" name="id" placeholder="meta title" value="<?php echo $shopui->id?>">

        <button type="submit" class="btn btn-1">Lưu lại</button>
        <button type="button" onclick="history.back()" class="btn btn-light border">Hủy</button>
    </form>
</div>
</div>



