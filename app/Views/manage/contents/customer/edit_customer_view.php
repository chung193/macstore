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
        <form action="<?php echo base_url() ?>/manage/customer/update" method="post" enctype='multipart/form-data'>
            <div class="mb-3">
                <label  class="form-label">Tên khách hàng</label>
                <input type="text"  class="form-control" name="name" value="<?= $customer->name ?>" placeholder="tiêu đề chính">
            </div>

            <div class="mb-3">
                <label  class="form-label">Tên đăng nhập</label>
                <input type="text"  class="form-control" name="username" value="<?= $customer->username ?>">
            </div>

            <div class="mb-3">
                <label  class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?= $customer->email ?>" placeholder="Tiêu đề phụ">
            </div>

            <div class="mb-3">
                <label  class="form-label">Điện thoại</label>
                <input type="text" class="form-control" name="phone" value="<?= $customer->phone ?>" placeholder="Điện thoại">
            </div>

            <div class="mb-3">
                <label  class="form-label">Điạ chỉ</label>
                <input type="text" class="form-control" name="address" value="<?= $customer->address ?>" placeholder="Số nhà, xã phường">
            </div>

            <div class="mb-3">
                <label  class="form-label">Thành phố</label>
                <select class="form-control  js-example-basic-multiple" name="matp" aria-label="Default select example">
                    <option selected>Chọn một thành phố</option>
                    <?php
                    foreach ($ttp as $item) {
                        // Nếu là chuyên mục con thì hiển thị
                        if ($item['matp'] == $customer->matp) {
                            echo '<option value="' . $item['matp'] . '" selected>';
                            echo $item['name'];
                            echo '</option>';
                        } else {
                            echo '<option value="' . $item['matp'] . '">';
                            echo $item['name'];
                            echo '</option>';
                        }
                    }
                    ?>
                </select>
            </div>



            <div class="mb-3">
                <label  class="form-label">Ngày sinh khách hàng</label>
                <input type="date" class="form-control" name="dob" value="<?= $customer->dob ?>" placeholder="Ngày sinh">
            </div>

            <div class="mb-3">
                <label  class="form-label">Đổi mật khẩu</label>
                <input type="text" class="form-control" name="password" value="" placeholder="Mật khẩu tùy chọn">
            </div>

            <input type="hidden" class="form-control" name="id" value="<?= $customer->id ?>">
            <input type="hidden" class="form-control" name="old_pw" value="<?= $customer->password ?>">


            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" onclick="history.back()" class="btn btn-light border">Hủy</button>

        </form>
    </div>
</div>