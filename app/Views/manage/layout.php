<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['title'] ?></title>
    <link rel="icon" type="image/x-icon" href='<?php
                                                $temp = $data['site'];
                                                $arr = $temp['info'];
                                                if ($arr->favicon) {
                                                    echo base_url() . '/public/uploads/favicon/' . $arr->favicon;
                                                } else {
                                                    echo base_url() . '/public/backend/img/favicon.png';
                                                }
                                                ?>'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" integrity="sha512-wJgJNTBBkLit7ymC6vvzM1EcSWeM9mmOu+1USHaRBbHkm6W9EgM0HY27+UtUaprntaYQJF75rc8gjxllKs5OIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() . '/public/backend/' ?>css/style.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/css/bootstrap-iconpicker.min.css" integrity="sha512-0SX0Pen2FCs00cKFFb4q3GLyh3RNiuuLjKJJD56/Lr1WcsEV8sOtMSUftHsR6yC9xHRV7aS0l8ds7GVg6Xod0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function downLoad() {
            if (document.all) {
                document.all["layer1"].style.display = "none";
                document.all["layer2"].style.display = "block";
            } else if (document.getElementById) {
                node = document.getElementById("layer1").style.display = 'none';
                node = document.getElementById("layer2").style.display = 'block';
            }
        }
    </script>
    <style>
        label.error {
            color: red;
        }
    </style>
</head>

<body onload="downLoad()">

    <div id="layer1" class="layer1_class vh-100 w-100">
        <img src="<?= base_url() . '/public/backend/' ?>img/loading.gif" />
    </div>


    <div id="layer2" class="layer2_class container-fluid p-0">
        <div class="main">
            <?= view('manage/components/menu', $data) ?>

            <div class="container mt-3">

                <?= view($data['subview'], $data) ?>
                <?= view('manage/components/footer') ?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h1 class="mb-4"><strong>Thông báo</strong></h1>
                    <ul class="list-group" id="listnoti">
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/super-build/ckeditor.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.min.js" integrity="sha512-46e1Zb1yVg6sNPRLgLJzMw5vFlMlnY1KU11VtsMsIzvv1F6Zcmat8M9tAfV1S7rr3pjgIrx3AhuQlzTVvUtj+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url() . '/public/backend/js/validate.js' ?>"></script>
    <script src="<?= base_url() . '/public/backend/js/jquery-menu-editor.min.js' ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            fetchNotiStatus();
            fetchNoti();
            $('#selectCat').change(function() {
                // set the window's location property to the value of the option the user has selected
                window.location = $(this).val();
            });

            $('#selectProducer').change(function() {
                // set the window's location property to the value of the option the user has selected
                window.location = $(this).val();
            });

            

            setInterval(function() {
                fetchNoti();
            }, 6000);

            setInterval(function() {
                fetchNotiStatus();
            }, 10000);

            function fetchNotiStatus() {
                var strurl = "<?php echo base_url(); ?>" + '/get-noti-status';
                jQuery.ajax({
                    url: strurl,
                    type: 'GET',
                    success: function(data) {
                        var str = JSON.parse(data);
                        //console.log(str);
                        if (str.length > 0) {
                            $('#noti').text(str.length);
                            var element = "";
                            for (var i = 0; i < str.length; i++) {
                                //console.log(str[i].name);
                                element += '<li class="list-group-item"><a style="font-size:20px" href="#"><i class="fas fa-exclamation-circle"></i> ' + str[i].name + '</a><br><small>' + timeSince(str[i].created) + '</small><br>' + str[i].content + '</li>';
                            }
                            element += '';
                            var div = $(element);
                            $("#listnoti").empty();
                            $("#listnoti").append(div);
                        } else {
                            $('#noti').text(0);
                            var element = "<li class='list-group-item'><a  href='#'>Bạn đã xem hết các thông báo</a></li>";
                            var div = $(element);
                            $("#listnoti").empty();
                            $("#listnoti").append(div);
                        }
                    }
                });
            }

            var myModal = document.getElementById('exampleModalToggle')
            myModal.addEventListener('hide.bs.modal', function (event) {
                readAllNoti();
            })

            function readAllNoti() {
                var strurl = "<?php echo base_url(); ?>" + '/read-noti';
                jQuery.ajax({
                    url: strurl,
                    type: 'GET',
                    success: function(data) {
                        console.log('success');
                        fetchNotiStatus();
                    }
                });
            }

            function fetchNoti() {
                var strurl = "<?php echo base_url(); ?>" + '/get-noti';
                jQuery.ajax({
                    url: strurl,
                    type: 'GET',
                    success: function(data) {
                        var str = JSON.parse(data);
                        //console.log(str);
                        if (str.length > 0) {
                            for (var i = 0; i < str.length; i++) {
                                //console.log(str[i].name);
                                $.toast({
                                    heading: str[i].name,
                                    text: str[i].content,
                                    icon: 'info',
                                    hideAfter: false
                                })
                            }
                        } else {

                        }
                    }
                });
            }



            $('#reservation').daterangepicker();
            $('#reservation').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });

            $('.js-example-basic-multiple').select2({
                width: 'resolve'
            });

            $('.select-product').select2({
                width: 'resolve'
            });

            // $('.select2').select2({
            //     width: 'resolve'
            // });

            const formatter = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
            });

            <?php
            if (isset($product)) {
            ?>
                $("#addPro").click(function() {
                    <?php
                    $ele  = "<div class='row rounded border p-3 p-0 m-0 mb-4'><div class='mb-3'><label for='title' class='form-label'>Sản phẩm</label><select class='select-product' name='product_id[]' style='width: 100%'><option data-price='0' value='0'>Chọn 1 sản phẩm</option>";
                    foreach ($product as $val) {

                        $ele = $ele . '<option data-price=' . price_format($val['price']) . ' value=' . $val['id'] . '>' . $val['name'] . '</option>';
                    }
                    $ele = $ele . "</select></div><div class='mb-3 col-12 col-md-4'><label for='title' class='form-label'>Số lượng</label><input type='number' name='qty[]' class='qty form-control' value='0' name='qty' placeholder='qty'></div><div class='col-12 col-md-4'><p>Đơn giá:</p> <span class='price'>0</span></div><div class='col-12 col-md-4'><p>Tổng:</p> <span class='total'>0</span></div><div class='row'><div class='col-4 col-md-4'><button type='button' class='btn btn-1 trash'><i class='far fa-trash-alt'></i> Xóa</button></div></div></div>";
                    ?>
                    var element = $("<?= $ele ?>");
                    $("#order").append(element);
                    $('.select-product').select2({
                        width: 'resolve'
                    });

                    function run() {
                        var $x = $(".total");
                        console.log($x.length);
                        var sum = 0;
                        for (var i = 0; i < $x.length; i++) {
                            var price = $x[i].innerText;
                            console.log(price);
                            price = price.replaceAll(".", "");
                            price = price.replace("đ", "");
                            price = parseInt(price);
                            sum += price;
                        }
                        $("#totalAll").text(formatter.format(sum));
                        $('#form_total').val(sum);
                    }

                    // $('.select-product').find(':selected');

                    $('.select-product').on('change', function() {
                        var price = $(this).find(':selected').attr("data-price");
                        $(this).parent().parent().find('.price').text(price + ' ₫');
                        run();
                    })



                    $('.qty').on('input', function(e) {
                        var old = $(this).parent().parent().find('.price').text();
                        old = old.replaceAll(",", "");
                        old = old.replace("đ", "");
                        old = parseInt(old);
                        $(this).parent().parent().find('.total').text(formatter.format(parseInt($(this).val()) * old));
                        run();
                    });




                    $(".trash").click(function() {
                        $(this).parent().parent().parent().remove();
                    });

                });

            <?php } ?>


            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
            <?php
            $session = session();
            if ($session->get('msg')) {
                $msg = $session->get('msg');
                echo "
                    $.toast({
                        heading: 'Thông báo',
                        text: '$msg',
                        showHideTransition: 'slide',
                        icon: 'info'
                    })
                    ";
            }

            if ($session->get('msgErr')) {
                $err = trim(strip_tags($session->get('msgErr')));
                $array = explode('.', $err);
                if (count($array) > 1) {
                    foreach ($array as $val) {
                        if ($val != '') {
                            $val = str_replace(array("\r", "\n"), '', $val);
                            echo "
                            $.toast({
                                heading: 'Lỗi',
                                text: '$val',
                                showHideTransition: 'slide',
                                icon: 'error'
                            })
                            ";
                        }
                    }
                } else {
                    echo "
                    $.toast({
                        heading: 'Lỗi',
                        text: '$err',
                        showHideTransition: 'slide',
                        icon: 'error'
                    })
                    ";
                }
            }
            ?>

            <?php
            if (isset($data['type']) && !empty($data['type'])) {
                if ($data['type'] == 'table') { ?>
                    var table = $('table.display').DataTable({
                        "language": {
                            "decimal": "",
                            "emptyTable": "Không có data",
                            "info": "Hiện _START_ đến _END_ của _TOTAL_ bản ghi",
                            "infoEmpty": "Hiển thị 0 đến 0 của 0 bản ghi",
                            "infoFiltered": "(Lọc từ _MAX_ trên tổng bản ghi)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Hiển thị _MENU_ bản ghi",
                            "loadingRecords": "Đang tải...",
                            "processing": "",
                            "search": "Tìm kiếm:",
                            "zeroRecords": "Không có bản ghi nào khớp",
                            "paginate": {
                                "first": "Đầu tiên",
                                "last": "cuối",
                                "next": "tiếp",
                                "previous": "Trước"
                            },
                            "aria": {
                                "sortAscending": ": kích hoạt để sắp xếp cột tăng dần",
                                "sortDescending": ": kích hoạt để sắp xếp cột giảm dần"
                            }
                        }
                    });

                    $('#filterTable').on('click', filteredData());

                    function filteredData() {
                        console.log('===');
                        table
                            .column(3)
                            .data()
                            .filter(function(value, index) {
                                return value == 0 ? true : false;
                            });
                    }

                <?php } ?>

                <?php if ($data['type'] == 'form') { ?>

                    function renderImage(currentImage) {
                        var img = document.createElement("img");
                        var width = 400;
                        img.src = currentImage;
                        img.width = width;
                        img.alt = "user image";
                        document.getElementById("preview").innerHTML = '';
                        document.getElementById("preview").appendChild(img);
                    }

                    function readURL(evt) {
                        console.log(evt);
                        var file = evt.target.files[0];
                        if (!file.type.match('image.*')) {
                            alert("unknow format");
                        }

                        var reader = new FileReader();

                        reader.onload = function(evt) {
                            currentImage = evt.target.result;
                            renderImage(currentImage);
                        };

                        reader.readAsDataURL(file);
                    }

                    var element = document.getElementById('imgus');
                    if (typeof(element) != 'undefined' && element != null) {
                        // Exists.
                        document.getElementById('imgus').addEventListener('change', readURL, false);
                    }

                    var element = document.getElementById('editor');
                    if (typeof(element) != 'undefined' && element != null) {
                        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                            toolbar: {
                                items: [
                                    'exportPDF', 'exportWord', '|',
                                    'findAndReplace', 'selectAll', '|',
                                    'heading', '|',
                                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                                    'bulletedList', 'numberedList', 'todoList', '|',
                                    'outdent', 'indent', '|',
                                    'undo', 'redo',
                                    '-',
                                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                                    'alignment', '|',
                                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                                    'textPartLanguage', '|',
                                    'sourceEditing'
                                ],
                                shouldNotGroupWhenFull: true
                            },
                            // Changing the language of the interface requires loading the language file using the <script> tag.
                            // language: 'es',
                            list: {
                                properties: {
                                    styles: true,
                                    startIndex: true,
                                    reversed: true
                                }
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                            heading: {
                                options: [{
                                        model: 'paragraph',
                                        title: 'Paragraph',
                                        class: 'ck-heading_paragraph'
                                    },
                                    {
                                        model: 'heading1',
                                        view: 'h1',
                                        title: 'Heading 1',
                                        class: 'ck-heading_heading1'
                                    },
                                    {
                                        model: 'heading2',
                                        view: 'h2',
                                        title: 'Heading 2',
                                        class: 'ck-heading_heading2'
                                    },
                                    {
                                        model: 'heading3',
                                        view: 'h3',
                                        title: 'Heading 3',
                                        class: 'ck-heading_heading3'
                                    },
                                    {
                                        model: 'heading4',
                                        view: 'h4',
                                        title: 'Heading 4',
                                        class: 'ck-heading_heading4'
                                    },
                                    {
                                        model: 'heading5',
                                        view: 'h5',
                                        title: 'Heading 5',
                                        class: 'ck-heading_heading5'
                                    },
                                    {
                                        model: 'heading6',
                                        view: 'h6',
                                        title: 'Heading 6',
                                        class: 'ck-heading_heading6'
                                    }
                                ]
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                            placeholder: 'Welcome to CKEditor 5!',
                            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                            fontFamily: {
                                options: [
                                    'default',
                                    'Arial, Helvetica, sans-serif',
                                    'Courier New, Courier, monospace',
                                    'Georgia, serif',
                                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                    'Tahoma, Geneva, sans-serif',
                                    'Times New Roman, Times, serif',
                                    'Trebuchet MS, Helvetica, sans-serif',
                                    'Verdana, Geneva, sans-serif'
                                ],
                                supportAllValues: true
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                            fontSize: {
                                options: [10, 12, 14, 'default', 18, 20, 22],
                                supportAllValues: true
                            },
                            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                            htmlSupport: {
                                allow: [{
                                    name: /.*/,
                                    attributes: true,
                                    classes: true,
                                    styles: true
                                }]
                            },
                            // Be careful with enabling previews
                            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                            htmlEmbed: {
                                showPreviews: true
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                            link: {
                                decorators: {
                                    addTargetToExternalLinks: true,
                                    defaultProtocol: 'https://',
                                    toggleDownloadable: {
                                        mode: 'manual',
                                        label: 'Downloadable',
                                        attributes: {
                                            download: 'file'
                                        }
                                    }
                                }
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                            mention: {
                                feeds: [{
                                    marker: '@',
                                    feed: [
                                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                        '@sugar', '@sweet', '@topping', '@wafer'
                                    ],
                                    minimumCharacters: 1
                                }]
                            },
                            // The "super-build" contains more premium features that require additional configuration, disable them below.
                            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                            removePlugins: [
                                // These two are commercial, but you can try them out without registering to a trial.
                                // 'ExportPdf',
                                // 'ExportWord',
                                'CKBox',
                                'CKFinder',
                                'EasyImage',
                                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                                // Storing images as Base64 is usually a very bad idea.
                                // Replace it on production website with other solutions:
                                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                                // 'Base64UploadAdapter',
                                'RealTimeCollaborativeComments',
                                'RealTimeCollaborativeTrackChanges',
                                'RealTimeCollaborativeRevisionHistory',
                                'PresenceList',
                                'Comments',
                                'TrackChanges',
                                'TrackChangesData',
                                'RevisionHistory',
                                'Pagination',
                                'WProofreader',
                                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                                // from a local file system (file://) - load this site via HTTP server if you enable MathType
                                'MathType'
                            ]
                        });
                    }


            <?php }
            } ?>
        })
    </script>

    <!-- menu item -->
    <script>
        jQuery(document).ready(function() {
            /* =============== DEMO =============== */
            // menu items
            <?php
            if (isset($menuitem) && !empty($menuitem)) {
                $arr = (array)$menuitem;
                if (count($arr)) {
                    // do stuff
                    echo "var arrayjson = " . $menuitem->json;
                } else {
                    echo 'var arrayjson = [{
                        "href": "http://home.com",
                        "icon": "fas fa-home",
                        "text": "Home",
                        "target": "_top",
                        "title": "My Home"
                    }, {
                        "icon": "fas fa-chart-bar",
                        "text": "Opcion2"
                    }, {
                        "icon": "fas fa-bell",
                        "text": "Opcion3"
                    }, {
                        "icon": "fas fa-crop",
                        "text": "Opcion4"
                    }, {
                        "icon": "fas fa-flask",
                        "text": "Opcion5"
                    }, {
                        "icon": "fas fa-map-marker",
                        "text": "Opcion6"
                    }, {
                        "icon": "fas fa-search",
                        "text": "Opcion7",
                        "children": [{
                            "icon": "fas fa-plug",
                            "text": "Opcion7-1",
                            "children": [{
                                "icon": "fas fa-filter",
                                "text": "Opcion7-1-1"
                            }]
                        }]
                    }];';
                }
            }

            ?>

            // icon picker options
            var iconPickerOptions = {
                searchText: "Buscar...",
                labelHeader: "{0}/{1}"
            };
            // sortable list options
            var sortableListOptions = {
                placeholderCss: {
                    'background-color': "#cccccc"
                }
            };

            var editor = new MenuEditor('myEditor', {
                listOptions: sortableListOptions,
                iconPicker: iconPickerOptions
            });
            editor.setForm($('#frmEdit'));
            editor.setUpdateButton($('#btnUpdate'));
            $('#btnReload').on('click', function() {
                editor.setData(arrayjson);
            });

            $('#btnOutput').on('click', function() {
                var str = editor.getString();
                $("#out").text(str);
            });

            $("#btnUpdate").click(function() {
                editor.update();
            });

            $('#btnAdd').click(function() {
                editor.add();
            });
            /* ====================================== */

            /** PAGE ELEMENTS **/
            $('[data-toggle="tooltip"]').tooltip();
            $.getJSON("https://api.github.com/repos/davicotico/jQuery-Menu-Editor", function(data) {
                $('#btnStars').html(data.stargazers_count);
                $('#btnForks').html(data.forks_count);
            });
        });

        <?php
        $db = db_connect();
        $tables = $db->listTables();
        foreach ($tables as $tb) {
        ?>
            var flag = true;
            $('input[table=<?= $tb ?>]').each(function() {
                if ($(this).prop('checked') !== 'checked' && !$(this).prop('checked')) {
                    flag = false;
                };
            });
            if (flag) {
                $('button[btn=<?= $tb ?>]').text("uncheck all");
            }
            flag = true;

        <?php
        }
        ?>

        function checkAll(name) {
            if ($('button[btn=' + name + ']').text() == "Check all") {
                $('button[btn=' + name + ']').text("uncheck all");
                $('input[table=' + name + ']').each(function() {
                    $(this).attr('checked', 'checked');
                });
            } else {
                $('button[btn=' + name + ']').text("Check all");
                $('input[table=' + name + ']').each(function() {
                    $(this).removeAttr('checked');
                });
            }

        }

        // @param - timeStamp - Javascript Date object or date string
        // @usage - timeSince(new Date().setFullYear(2019))
        function timeSince(timeStamp) {
            if (!(timeStamp instanceof Date)) {
                timeStamp = new Date(timeStamp);
            }

            if (isNaN(timeStamp.getDate())) {
                return "Invalid date";
            }

            var now = new Date(),
                secondsPast = (now.getTime() - timeStamp.getTime()) / 1000;

            var formatDate = function(date, format, utc) {
                var MMMM = ["\x00", "th.1", "th.2", "th.3", "th.4", "th.5", "th.6", "th.7", "th.8", "th.9", "th.10", "th.11", "th.12"];
                var MMM = ["\x01", "th.1", "th.2", "th.3", "th.4", "th.5", "th.6", "th.7", "th.8", "th.9", "th.10", "th.11", "th.12"];
                //var MMM = ["\x01", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                // var dddd = ["\x02", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                var dddd = ["\x02", "Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"];
                var ddd = ["\x03", "Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"];

                function ii(i, len) {
                    var s = i + "";
                    len = len || 2;
                    while (s.length < len) s = "0" + s;
                    return s;
                }

                var y = utc ? date.getUTCFullYear() : date.getFullYear();
                format = format.replace(/(^|[^\\])yyyy+/g, "$1" + y);
                format = format.replace(/(^|[^\\])yy/g, "$1" + y.toString().substr(2, 2));
                format = format.replace(/(^|[^\\])y/g, "$1" + y);

                var M = (utc ? date.getUTCMonth() : date.getMonth()) + 1;
                format = format.replace(/(^|[^\\])MMMM+/g, "$1" + MMMM[0]);
                format = format.replace(/(^|[^\\])MMM/g, "$1" + MMM[0]);
                format = format.replace(/(^|[^\\])MM/g, "$1" + ii(M));
                format = format.replace(/(^|[^\\])M/g, "$1" + M);

                var d = utc ? date.getUTCDate() : date.getDate();
                format = format.replace(/(^|[^\\])dddd+/g, "$1" + dddd[0]);
                format = format.replace(/(^|[^\\])ddd/g, "$1" + ddd[0]);
                format = format.replace(/(^|[^\\])dd/g, "$1" + ii(d));
                format = format.replace(/(^|[^\\])d/g, "$1" + d);

                var H = utc ? date.getUTCHours() : date.getHours();
                format = format.replace(/(^|[^\\])HH+/g, "$1" + ii(H));
                format = format.replace(/(^|[^\\])H/g, "$1" + H);

                var h = H > 12 ? H - 12 : H == 0 ? 12 : H;
                format = format.replace(/(^|[^\\])hh+/g, "$1" + ii(h));
                format = format.replace(/(^|[^\\])h/g, "$1" + h);

                var m = utc ? date.getUTCMinutes() : date.getMinutes();
                format = format.replace(/(^|[^\\])mm+/g, "$1" + ii(m));
                format = format.replace(/(^|[^\\])m/g, "$1" + m);

                var s = utc ? date.getUTCSeconds() : date.getSeconds();
                format = format.replace(/(^|[^\\])ss+/g, "$1" + ii(s));
                format = format.replace(/(^|[^\\])s/g, "$1" + s);

                var f = utc ? date.getUTCMilliseconds() : date.getMilliseconds();
                format = format.replace(/(^|[^\\])fff+/g, "$1" + ii(f, 3));
                f = Math.round(f / 10);
                format = format.replace(/(^|[^\\])ff/g, "$1" + ii(f));
                f = Math.round(f / 10);
                format = format.replace(/(^|[^\\])f/g, "$1" + f);

                var T = H < 12 ? "AM" : "PM";
                format = format.replace(/(^|[^\\])TT+/g, "$1" + T);
                format = format.replace(/(^|[^\\])T/g, "$1" + T.charAt(0));

                var t = T.toLowerCase();
                format = format.replace(/(^|[^\\])tt+/g, "$1" + t);
                format = format.replace(/(^|[^\\])t/g, "$1" + t.charAt(0));

                var tz = -date.getTimezoneOffset();
                var K = utc || !tz ? "Z" : tz > 0 ? "+" : "-";
                if (!utc) {
                    tz = Math.abs(tz);
                    var tzHrs = Math.floor(tz / 60);
                    var tzMin = tz % 60;
                    K += ii(tzHrs) + ":" + ii(tzMin);
                }
                format = format.replace(/(^|[^\\])K/g, "$1" + K);

                var day = (utc ? date.getUTCDay() : date.getDay()) + 1;
                format = format.replace(new RegExp(dddd[0], "g"), dddd[day]);
                format = format.replace(new RegExp(ddd[0], "g"), ddd[day]);

                format = format.replace(new RegExp(MMMM[0], "g"), MMMM[M]);
                format = format.replace(new RegExp(MMM[0], "g"), MMM[M]);

                format = format.replace(/\\(.)/g, "$1");

                return format;
            };

            if (secondsPast < 0) { // Future date
                return timeStamp;
            }
            if (secondsPast < 60) { // Less than a minute
                return parseInt(secondsPast) + 's';
            }
            if (secondsPast < 3600) { // Less than an hour
                return parseInt(secondsPast / 60) + 'phút';
            }
            if (secondsPast <= 86400) { // Less than a day
                return parseInt(secondsPast / 3600) + 'giờ';
            }
            if (secondsPast <= 172800) { // Less than 2 days
                return 'Yesderday at ' + formatDate(timeStamp, "h:mmtt");
            }
            if (secondsPast > 172800) { // After two days
                var timeString;

                if (secondsPast <= 604800)
                    timeString = formatDate(timeStamp, "dddd") + " lúc " + formatDate(timeStamp, "h:mmtt") // with in a week
                else if (now.getFullYear() > timeStamp.getFullYear())
                    timeString = formatDate(timeStamp, "MMMM d, yyyy") // a year ago
                else if (now.getMonth() > timeStamp.getMonth())
                    timeString = formatDate(timeStamp, "MMMM d") // months ago
                else
                    timeString = formatDate(timeStamp, "MMMM d") + " lúc " + formatDate(timeStamp, "h:mmtt") // with in a month

                return timeString;
            }
        }
    </script>

</body>

</html>