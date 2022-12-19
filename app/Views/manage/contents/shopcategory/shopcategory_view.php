<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

<a href="<?php echo base_url() ?>/manage/shop-category/add/" class="btn btn-1 mb-3">Thêm mới</a>


<table class="display border">
    <thead>
        <tr>
            <th>Tên danh mục</th>
            <th>Slug</th>
            <th style="width: 10%">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        shop_cat_table($shopcategory); ?>
    </tbody>
</table>
