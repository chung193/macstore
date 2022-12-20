<div class="modal fade ajax-popup" id="modalAddToCart" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog white-modal modal-md">
      <div class="modal-content">
         <div class="modal-body">
            <div class="modal-content-text">
               <div class="popup-image">
                  <p class="success-message"><i class="fa fa-check-circle"></i>Product Successfully Added To Your Shoping Cart</p>
                  <div class="cart_img_inner">
                     <div class="popup_img_inner"><img class="popupimage" src=""> </div>
                     <div class="content_inner">
                        <h6 class="productmsg"></h6><!-- <span class="pop_current_price"> </span> -->
                     </div>
                  </div>
               </div>
               <div class="popup-content">
                  <p class="total_item"> There are <span class="cart_count bigcounter">1</span> Items In Your Cart.</p>
                  <p class="cart_total"> <span class="total_price_label">Total Price: </span> <span class="shopping-cart__total"><span class=money>$150.00</span></span></p>
                  <div class="modal-button disabled"><a href="/collections/all" class="aplee-button aplee-button--medium"> Continue Shopping </a><a href="/cart" class="aplee-button aplee-button--medium">View Cart</a><input type="checkbox" id="popup_ageree_term_cond" value="1"><label for="popup_ageree_term_cond">I agree with the terms and conditions</label><a href="/checkout" class="aplee-button aplee-button--medium popup-checkout--btn">Checkout</a></div>
               </div>
            </div>
            <div class="modal-close"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button></div>
         </div>
      </div>
   </div>
</div><!-- modalAddToCart -->
<!-- modalAddToCart Error -->
<div class="modal fade ajax-popup error-ajax-popup" id="modalAddToCartError" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog white-modal modal-md">
      <div class="modal-content ">
         <div class="modal-body">
            <div class="modal-content-text">
               <p class="error_message"></p>
            </div>
            <div class="modal-close"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button></div>
         </div>
      </div>
   </div>
</div>


<style>
   .error {
      color: red !important;
   }

   .hidden-label {
      display: block !important
   }

   .search-results {
      z-index: 8889;
      list-style-type: none;
      width: 300px;
      margin: 0;
      padding: 0;
      background: #ffffff;
      border: 1px solid #cccccc;
      border-radius: 0px;
      -webkit-box-shadow: 0px 4px 7px 0px rgba(0, 0, 0, 0.1);
      box-shadow: 0px 4px 7px 0px rgba(0, 0, 0, 0.1);
      overflow: hidden;
   }

   .search-results li {
      display: block;
      width: 100%;
      height: 38px;
      margin: 0;
      padding: 0;
      border-top: 1px solid #cccccc;
      line-height: 38px;
      overflow: hidden;
   }

   .search-results li:first-child {
      border-top: none
   }

   .search-results .title {
      float: left;

      width: {}

      ;
   }

   .search-results .thumbnail {
      float: left;
      display: block;
      width: 32px;
      height: 32px;
      margin: 3px 0 3px 3px;
      padding: 0;
      text-align: center;
      overflow: hidden;
      border-radius: 0
   }
</style>








<div class="loading-modal compare_modal">translation missing: en.general.search.loading</div>
<div class="ajax-success-compare-modal compare_modal" id="moda-compare" tabindex="-1" role="dialog" style="display:none">
   <div class="overlay"> </div>
   <div class="modal-dialog modal-lg">
      <div class="modal-content content" id="compare-modal">
         <div class="modal-header">
            <div class="modal-close"> <span class="compare-modal-close"><i class="fa fa-times-circle"></i></span></div>
            <h4 class="modal-title">Compare Product</h4>
         </div>
         <div class="modal-body">
            <div class="table-wrapper table-responsive">
               <table class="table table-hover">
                  <thead>
                     <tr class="th-compare">
                        <th></th>
                     </tr>
                  </thead>
                  <tbody id="table-compare"></tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div><!-- scroll to top  -->
<a href="#" class="scroll-top"></a>

<script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-9f517843f664ad329c689020fb1e45d03cac979f64b9eb1651ea32858b0ff452.js" defer="defer"></script><script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/cart.api.js?v=125344961445282960871643859741" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/lazysizes.min.js?v=89644803952926230611643859776" async></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/bootstrap.min.js?v=94033863239863277801643859739" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/owl.carousel.min.js?v=39625633880638491061643859784" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/tippy.min.js?v=157736563639682071161643859810" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/perfect-scrollbar.js?v=72721406015941749981643859791" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/ajax-mailchimp.js?v=28280222459219268381643859736" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/jquery.dlmenu.js?v=84071848359167876331643859772" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/jquery.zoom.min.js?v=127655014540499679121643859776" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/fancyApps.min.js?v=116292848392535759031643859748" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/theme.min.js?v=104990965764202793601643859852" defer="defer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.0/jquery-migrate.min.js" integrity="sha512-QDsjSX1mStBIAnNXx31dyvw4wVdHjonOwrkaIhpiIlzqGUCdsI62MwQtHpJF+Npy2SmSlGSROoNWQCOFpqbsOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
   $(function() {
      var t = null;
      $('form[action="/search"]').css("position", "relative").each(function() {
         var s = $(this).find('input[name="q"]'),
            a = s.position().top + s.innerHeight();
         $('<ul class="search-results home-two"></ul>').css({
            position: "absolute",
            left: "0px",
            top: a
         }).appendTo($(this)).hide(), s.attr("autocomplete", "off").bind("keyup change", function() {
            var s = $(this).val(),
               a = $(this).closest("form"),
               e = "/search?type=product&q=" + s,
               n = a.find(".search-results");
            s.length > 3 && s != $(this).attr("data-old-term") && ($(this).attr("data-old-term", s), null != t && t.abort(), t = $.getJSON(e + "&view=json", function(t) {
               n.empty(), 0 == t.results_count ? n.hide() : ($.each(t.results, function(t, s) {
                  var a = $("<a></a>").attr("href", s.url);
                  a.append('<span class="thumbnail"><img src="' + s.thumbnail + '" /></span>'), a.append('<span class="title">' + s.title + "</span>"), a.wrap("<li></li>"), n.append(a.parent())
               }), t.results_count > 10 && n.append('<li><span class="title"><a href="' + e + '">See all results (' + t.results_count + ")</a></span></li>"), n.fadeIn(100))
            }))
         })
      });
      $("body").bind("click", function() {
         $(".search-results").hide()
      })
   });
</script>

<script>


   $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      asNavFor: '.slider-nav'
   });
   $('.slider-nav').slick({
      // slidesToShow: 3,
      // slidesToScroll: 1,
      asNavFor: '.slider-for',
      slidesToShow: 3,
      // dots: true,
      centerMode: true,
      focusOnSelect: true
   });
</script>

<script>
   function output(inp) {
      $(inp).appendTo("#cart-product");
   }

   function removeAllChildNodes(parent) {
      while (parent.firstChild) {
         parent.removeChild(parent.firstChild);
      }
   }

   function getDataCart() {
      var strurl = "<?php echo base_url(); ?>" + '/gio-hang/lay-gio-hang';
      jQuery.ajax({
         url: strurl,
         type: 'GET',
         success: function(data) {
            var str = data;

            str.replace(/\\n/g, "\\n")
               .replace(/\\'/g, "\\'")
               .replace(/\\"/g, '\\"')
               .replace(/\\&/g, "\\&")
               .replace(/\\r/g, "\\r")
               .replace(/\\t/g, "\\t")
               .replace(/\\b/g, "\\b")
               .replace(/\\f/g, "\\f");
            // remove non-printable and other non-valid JSON chars
            str = str.replace(/[\u0000-\u0019]+/g, "");
            str = JSON.parse(str);
            removeAllChildNodes(document.getElementById("cart-product"));
            output(str);
            countCart();
         }
      });
   }

   function countCart() {
      var strurl = "<?php echo base_url(); ?>" + '/gio-hang/dem-gio-hang';
      jQuery.ajax({
         url: strurl,
         type: 'GET',
         success: function(data) {
            num = JSON.parse(data);
            $("#countcartitem").text(num);
         }
      });
   }

   $("#offcanvas-cart-icon").click(function() {
      getDataCart();
   });

   function removeItemCart(id) {
      // alert(id);
      var strurl = "<?php echo base_url(); ?>" + '/gio-hang/xoa-khoi-gio';
      jQuery.ajax({
         url: strurl,
         type: 'GET',
         dataType: 'json',
         data: {
            id: id,
         },
         success: function(data) {
            getDataCart();
            if (window.location.href == '<?= base_url() ?>/gio-hang/' || window.location.href == '<?= base_url() ?>/gio-hang') {
               location.reload();
            }
         }
      });
   }
</script>

<script>
   // my javascript

   function addToCart(id) {
      console.log(id);
   }

   $('.sp-plus').on('click', function() {
      var oldVal = $('#input').val();
      var newVal = (parseInt($('#input').val(), 10) + 1);
      $('input').val(newVal);
   });

   $('.sp-minus').on('click', function() {
      var oldVal = $('#input').val();
      if (oldVal > 0) {
         var newVal = (parseInt($('#input').val(), 10) - 1);
      } else {
         var newVal = 0;
      }

      $('#input').val(newVal);
   });

   $('.sp-plus-cart').on('click', function() {
      var parent = $(this).parent();
      var input = parent.find("input");
      var oldVal = input.val();
      var newVal = (parseInt(input.val(), 10) + 1);
      input.val(String(newVal));
   });

   $('.sp-minus-cart').on('click', function() {
      var parent = $(this).parent();
      var input = parent.find("input");
      var oldVal = input.val();
      if (oldVal > 0) {
         var newVal = (parseInt(input.val(), 10) - 1);
      } else {
         var newVal = 0;
      }
      input.val(newVal);
   });


   function onAddCart(id, qty) {
      var strurl = "<?php echo base_url(); ?>" + '/gio-hang/them-vao-gio';
      jQuery.ajax({
         url: strurl,
         type: 'POST',
         dataType: 'json',
         data: {
            id: id,
            qty: qty,
         },
         success: function(data) {
            document.location.reload(true);
            alert('Thêm sản phẩm vào giỏ hàng thành công !');
         }
      });
   }

   function onUpdateCart() {
      var strurl = "<?php echo base_url(); ?>" + '/gio-hang/capnhat';
      jQuery.ajax({
         url: strurl,
         type: 'POST',
         dataType: 'json',
         data: {
            id: id,
            qty: qty,
            // option: option
         },
         success: function(data) {
            document.location.reload(true);
            alert('Thêm sản phẩm vào giỏ hàng thành công !');
         }
      });
   }

   function showResult(str) {
      if (str.length == 0) {
         // var ele = document.getElementById("livesearch");
         // removeAllChildNodes(ele);
         document.getElementById("livesearch").innerHTML = "";
         document.getElementById("livesearch").style.border = "0px";
         return;
      }

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {

            var response = this.responseText;
            response = response.replace(/\\n/g, "\\n")
               .replace(/\\'/g, "\\'")
               .replace(/\\"/g, '\\"')
               .replace(/\\&/g, "\\&")
               .replace(/\\r/g, "\\r")
               .replace(/\\t/g, "\\t")
               .replace(/\\b/g, "\\b")
               .replace(/\\f/g, "\\f");
            // remove non-printable and other non-valid JSON chars
            response = response.replace(/[\u0000-\u0019]+/g, "");
            response = JSON.parse(response);

            if (typeof(response) == 'object') {
               response.forEach(showitem, removeAllChildNodes(document.getElementById("livesearch")));
            } else {
               if (typeof(response) == 'string') {
                  shownotfound(response, removeAllChildNodes(document.getElementById("livesearch")));
               }
            }
         }
      }
      xmlhttp.open("GET", "<?= base_url() ?>/livesearch/" + str, true);
      xmlhttp.send();
   }

   function shownotfound(response) {
      const a = document.createElement('p');
      var linkText = document.createTextNode(response);
      a.appendChild(linkText);
      document.getElementById("livesearch").appendChild(a);
      document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
   }

   function showitem(item, index) {
      var base_url = '<?= base_url() ?>';
      const a = document.createElement('a');
      var linkText = document.createTextNode(item.name);
      a.appendChild(linkText);
      a.title = item.name;
      a.href = base_url + '/san-pham/' + item.slug;
      document.getElementById("livesearch").appendChild(a);
      document.getElementById("livesearch").style.border = "1px solid #e5e5e5";
   }

   function removeAllChildNodes(parent) {
      while (parent.firstChild) {
         parent.removeChild(parent.firstChild);
      }
   }

   x = document.getElementsByClassName("toc-title"); // Find the elements
   for (var i = 0; i < x.length; i++) {
      x[i].innerText = "Mục lục"; // Change the content
   }
   // end my javascript
</script>

<script>
   // validate
   $().ready(function() {



      var require = "Trường này là bắt buộc";
      var minlength = "Trường này phải có ít nhất 6 ký tự";
      $("#create_customer").validate({
         onsubmit: true,
         rules: {
            "email": {
               required: true,
               email: true
            },
            "phone": {
               required: true,
               minlength: 6
            },
            "username": {
               required: true,
               minlength: 6
            },
            "confirmpassword": {
               equalTo: "#password"
            },
            "password": {
               required: true,
               minlength: 6
            },
         },
         messages: {
            "email": {
               required: require,
               email: "Trường này phải là 1 email"
            },
            "phone": {
               required: require,
               minlength: minlength,
            },
            "username": {
               required: require,
               minlength: minlength,
            },
            "password": {
               required: require,
               minlength: minlength,
            },
            "confirmpassword": {
               equalTo: "Nhập giống với mật khẩu"
            },
         }
      });
   });

   <?php
   $session = session();
   if ($session->get('msg')) {
      $msg = $session->get('msg');
      echo "
          $.toast({
            heading: 'Thông tin',
            text: '$msg',
            showHideTransition: 'slide',
            icon: 'info'
        })
        ";
   }; ?>
</script>