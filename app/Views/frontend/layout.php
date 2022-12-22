<!doctype html>
<html lang="vi">
<?php echo view('frontend/layouts/head', $test); ?>

<body id="astor" class="template-index  ">
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="xloDK4eR"></script>
  <style>
    main,
    .wrapper,
    .shopify-section,
    html {
      background-color: #fbfbfb;
    }

    .single-widget-product,
    .item {
      padding: 10px 10px 0 10px;
      border-radius: 10px;
      background: white
    }

    .item {
      margin: 4px;
    }
  </style>
  </div>

  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="8uWAps4u"></script>

  <div class="wrapper">
    <?php echo view('frontend/layouts/header', $test); ?>
    <?php
    echo view($test['subview'], $test);
    ?>
    <?php echo view('frontend/layouts/footer', $test); ?>
  </div>
  <?php echo view('frontend/layouts/endbody', $test); ?>

  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

  <div class="fb-customerchat" attribution=setup_tool page_id="231744405452433" theme_color="#67b868" logged_in_greeting="Macstore Hải Phòng xin chào quý khách!" logged_out_greeting="Macstore Hải Phòng xin chào quý khách!" greeting_dialog_display="hide">
  </div>

  <?php
  $session = session();
  $temp = $test['base'];
  $temp = $temp['popup'];
  if (count($temp)) {
    $temp = $temp['0'];
    if ($session->get('firstAccess') === null) {
      echo '
      
        <div class="modal fade" id="myModal">
          
        <div class="modal-dialog modal-dialog-centered modal-lg">
            
            <div class="modal-body">
              <a href="' . $temp['url'] . '">
                <img src="' . base_url() . '/public/uploads/popup/' . $temp['img'] . '">
              </a>
            </div>
        </div>
              
        </div>
        
          ';
    }
  }

 
  $access = array('firstAccess' => true);
  $session->set($access);
  ?>
  <script type="text/javascript">
    $(window).on("load", function() {
          var myModal = new bootstrap.Modal(document.getElementById("myModal"))
          myModal.show();
        //   var myButton = document.getElementById("closeModal");
        //   myButton.addEventListener("click", () => {
        //     var myModal = new bootstrap.Modal(document.getElementById("myModal"))
        //     myModal.hide();
        // });
      });
  </script>

</body>

</html>