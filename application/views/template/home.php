<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <script type='text/javascript' src='<?= base_url('public') ?>/js/jquery-1.7.1.js'></script>

        <script type="text/javascript" src="<?= base_url('public') ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url('public') ?>/js/21.js"></script>
        <link href="<?= base_url('public') ?>/css/bootstrap.min.css" rel="stylesheet"
              type="text/css" />

        <link href="<?= base_url('public') ?>/css/style.css" rel="stylesheet"
              type="text/css" />

    </head>
    <body>



        <section>
            <div id="parallax" class="mall-bg" >
                <div class="container">
                    <header>

                        <div class="menu col-xs-12">
                            <ul>
                                <li><a href="#">หน้าแรก</a></li>
                                <li><a href="#">ห้องนั่งเล่น</a></li>
                                <li><a href="#">ห้องนอน</a></li>
                                <li><a href="#">ห้องน้ำ</a></li>
                                <li><a href="#">ห้องครัว</a></li>
                                <li><a href="#">สินค้าเด็ก</a></li>
                                <li><a href="#">ทั้งหมด</a></li>

                            </ul>
                        </div>
                    </header>



                    <div class="clear"></div>

                </div>

            </div>

        </section>



    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#parallax").height($(window).height());


        });
        document.addEventListener("DOMContentLoaded", function() {
            initParallax();
        });


    </script>
</body>

</html>


