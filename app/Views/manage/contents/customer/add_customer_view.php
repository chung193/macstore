<div class="row">
    <div class="col-md-6 col-12">
        <?php
        $data = array(
            'title' => $title
        );
        echo view('manage/components/breadcrumb', $data)
        ?>
        <?php if (session()->getFlashdata('msgErr')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
        <?php endif; ?>
        <form action="<?php echo base_url() ?>/manage/customer/save" method="post" enctype='multipart/form-data'>
            <div class="mb-3">
                <label  class="form-label">Tên khách hàng</label>
                <input type="text" class="form-control" name="name" placeholder="Tên khách hàng">
            </div>

            <div class="mb-3">
                <label  class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" name="username" placeholder="Tên khách hàng">
            </div>

            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="mb-3">
                <label  class="form-label">Điện thoại</label>
                <input type="text" class="form-control" name="phone" placeholder="Điện thoại">
            </div>

            <div class="mb-3">
                <label  class="form-label">Điạ chỉ</label>
                <input type="text" class="form-control" name="address" placeholder="Số nhà, xã phường">
            </div>

            <div class="mb-3">
                <label  class="form-label">Thành phố</label>
                <select class="form-control  js-example-basic-multiple" name="matp" aria-label="Default select example">
                    <option selected>Chọn một thành phố</option>
                    <?php
                    foreach ($ttp as $item) {
                        echo '<option value="' . $item['matp'] . '">';
                        echo $item['name'];
                        echo '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label  class="form-label">Ngày sinh khách hàng</label>
                <input type="date" class="form-control" name="dob" placeholder="Ngày sinh">
            </div>

            <div class="mb-3">
                <label  class="form-label">Mật khẩu</label>
                <input type="text" class="form-control" name="pw" placeholder="Mật khẩu tùy chọn">
                <p>Nếu trường này bỏ trống, mật khẩu mặt định sẽ là 123123</p>
            </div>
            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" onclick="history.back()" class="btn btn-light border">Hủy</button>
        </form>
    </div>
</div>