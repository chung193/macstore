<div class="row">
  <div class="col-md-4 col-12">
    <?php
    $session = session();
    $post = $session->get('post');
    $data = array(
      'title' => $title
    );
    echo view('manage/components/breadcrumb', $data)
    ?>
    <form action="<?= base_url() ?>/manage/crawl" method="post">

      <div class="mb-3">
        <label for="title" class="form-label">Chọn nhà cung cấp</label>
        <select name="producer_id" class="form-control  js-example-basic-multiple">
          <?php
          foreach ($shop_producer as $val) {
          ?>
            <option value="<?= $val['id'] ?>"><?= $val['name'] ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Chọn danh mục</label>
        <select name="category_id" class="form-control js-example-basic-multiple">
          <?php
          foreach ($shop_category as $val) {
          ?>
            <option value="<?= $val['id'] ?>"><?= $val['title'] ?></option>
          <?php } ?>
        </select>
      </div>


      <div class="mb-3">
        <label for="title" class="form-label">URL</label>
        <input type="text" class="form-control" value='<?= $url ?>' name="url" placeholder="url">
      </div>


      <button type="submit" class="btn btn-1">Thêm</button>
      <button type="button" onclick="history.back()" class="btn btn-light border">Hủy</button>

    </form>
  </div>
</div>