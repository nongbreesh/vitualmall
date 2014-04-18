<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script type='text/javascript' src='<?= base_url('public') ?>/js/jquery-1.7.1.js'></script>
        <script type='text/javascript' src='<?= base_url('public') ?>/js/bootstrap.min.js'></script>
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

                    <div class="shop shop1" data-container="body" data-toggle="popover" data-placement="right" data-content="Game shop Diablo">
                        <a href="#"  data-toggle="modal"  data-target=".bs-example-modal-lg"><img src="<?= base_url('public') ?>/images/shop1.jpg"></a> 
                    </div>

                    <div class="shop shop2" data-container="body" data-toggle="popover" data-placement="top" data-content="McDonald's">
                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="<?= base_url('public') ?>/images/shop2.jpg"></a> 
                    </div>
                    <div class="shop shop3" data-container="body" data-toggle="popover" data-placement="left" data-content="Starbuck">
                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg"  ><img src="<?= base_url('public') ?>/images/shop3.jpg"></a> 
                    </div>
                    <div class="shop shop4" data-container="body" data-toggle="popover" data-placement="top" data-content="After you">
                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" ><img src="<?= base_url('public') ?>/images/shop4.jpg"></a> 
                    </div>
                </div>

            </div>

        </section>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#parallax").height($(window).height());
            $('.shop').each(function(i, el) {
                $(el).popover('toggle');
            });
        });

        /* function parallax(e) {
         var amountMovedX = (e.pageX * -1 / 6);
         var amountMovedY = (e.pageY * -1 / 6);
         $("#parallax").css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
         }
         
         $(window).mousemove(function(e) {
         //console.log(e.screenX);
         parallax(e);
         });
         */

        var currentY = '';
        var movementConstant = .001;

        $(document).mousemove(function(e) {
            if (currentY == '')
                currentY = e.pageY;

            var ydiff = e.pageY - currentY;
            currentY = e.pageY;

            var amountMovedX = (e.pageX * -1 / 50);
            var amountMovedY = (e.pageY * -1 / 50);
            $("#parallax").css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');

            $('#parallax div').each(function(i, el) {
                var movement = (i + 1) * (ydiff * movementConstant);

                var newY = $(el).position().top + movement;
                $(el).css('top', newY + 'px');
            });
        });
    </script>
</body>

</html>


