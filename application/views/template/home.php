<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script type='text/javascript' src='<?= base_url('public') ?>/js/jquery-1.7.1.js'></script>
        <link href="<?= base_url('public') ?>/css/bootstrap.min.css" rel="stylesheet"
              type="text/css" />

        <link href="<?= base_url('public') ?>/css/style.css" rel="stylesheet"
              type="text/css" />

        <script type="text/javascript">
            $(document).ready(function() {
                $("#parallax").height($(window).height());
                $(window).mousemove(function(e) {
                    console.log(e.screenX);
                    parallax(e);
                });
            });

            function parallax(e) {
                var amountMovedX = (e.pageX * -1 / 6);
                var amountMovedY = (e.pageY * -1 / 6);
                $("#parallax").css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
            }

        </script>
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


</body>

</html>


