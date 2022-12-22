<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>/manage/dashboard">
            <?php
            $arr = $site['info'];
            if ($arr->logo) {
                echo '<img class="logo" src="' . base_url() . '/public/uploads/logo/' . $arr->logo . '">';
            } else {
                if ($arr->name) {
                    echo $arr->name;
                } else {
                    echo 'Logo';
                }
            } ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() . '/manage/menu' ?>">Menu</a></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() . '/manage/page' ?>">Trang</a></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bài viết
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/post' ?>">Bài viết</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/category' ?>">Danh mục</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sản phẩm
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/shop-product' ?>">Sản phẩm</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/shop-category' ?>">Danh mục</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/shop-producer' ?>">Nhà cung cấp</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bán hàng
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/customer' ?>">Khách hàng</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/order' ?>">Đơn hàng</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/discount' ?>">Khuyến mại</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() . '/manage/seo' ?>">SEO</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        UI
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/slider' ?>">Slider</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/popup' ?>">popup</a></li>
                    </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Crawl
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/crawl' ?>">Sản phẩm</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/crawl/post' ?>">Bài viết</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-plus"></i> &nbsp;Thêm
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/slider/add' ?>">Slider</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/category/add' ?>">Danh mục</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/post/add' ?>">Bài viết</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/page/add' ?>">Trang</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/shop-product/add' ?>">Sản phẩm</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/order/add' ?>">Đơn hàng</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/user/add' ?>">Người dùng</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/user-group/add' ?>">Nhóm người dùng</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="navbar-nav navbar-right">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Import
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/import/product' ?>">Sản phẩm</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/import/catalog' ?>">danh mục sản phẩm</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/import/producer' ?>">Nhà cung cấp</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cài đặt
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() ?>" target="_blank">Xem trang</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/options' ?>">Cài đặt</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/info' ?>">Thông tin</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $name ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/profile' ?>">Cá nhân</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/user' ?>">Người dùng</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/manage/user-group' ?>">Nhóm người dùng</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item" href="<?= base_url() . '/auth/logout' ?>">Đăng xuất</a></li>
                    </ul>
                </li>
                <li class="nav-item pr-3" id="noti-menu">
                    <a class="nav-link position-relative" data-bs-toggle="modal"  href="#exampleModalToggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span id="noti" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <span class="visually-hidden">Thông báo chưa đọc</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

