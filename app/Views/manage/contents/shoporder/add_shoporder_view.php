
<div class="row">
    <div class="col-12 col-md-6">
        <?php
        $data = array(
            'title' => $title
        );
        echo view('manage/components/breadcrumb', $data)
        ?>

        <p>Nhân viên nhập <strong><?= $name ?></strong></p>
        <p>Bạn cần nhập thông tin của khách hàng trước, sau đó lên đơn cho khách</p>
        <p>Nhấn vào nút thêm để thêm sản phẩm cho khách hàng</p>

        <?php if (session()->getFlashdata('msgErr')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
        <?php endif; ?>

        <form action="<?php echo base_url() ?>/manage/order/save" method="post" enctype='multipart/form-data'> 
        <!-- <form action="" method="post" enctype='multipart/form-data'> -->
            <div class="mb-3">
                <select class="js-example-basic-multiple" name="user_id" style="width: 75%">
                    <?php
                    foreach ($customer as $val) {
                    ?>
                        <option value="<?= $val['id'] ?>"><?= $val['name'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <select class="js-example-basic-multiple" name="discount_id" style="width: 75%">
                            <?php
                            foreach ($discount as $val) {
                            ?>
                                <option value="<?= $val['id'] ?>"  data-desc="<?= $val['description'] ?>" data-ratio="<?= $val['ratio'] ?>" data-money="<?= $val['money'] ?>c"><?= $val['title'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <span id="discount"></span>
                </div>
            </div>

            <input type="hidden" name="total" id="form_total">

            <div class="row">
                <div class="col-12 col-md-6">
                    <p><strong>Tổng tiền</strong></p>
                    <span id="totalAll">0</span>
                </div>
            </div>

            <hr>
            <div class="mb-3">
                <button type="button" class="btn btn-1" id="addPro"> Thêm </button>
            </div>

            <div id="order"></div>
            



            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" class="btn btn-light border" onclick="history.back()">Hủy</button>
        </form>
    </div>
</div>