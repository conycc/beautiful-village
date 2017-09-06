<!DOCTYPE html>
<html lang="en">
<!--  引用资源文件  -->
<?php include 'head.php'; ?>
<link href="css/process.css" rel="stylesheet">

<body>
    <!--  顶部栏  -->
    <?php include 'header.php'; ?>

    <section id="blog" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 about">
                    <div class="about-body">
                        <div class="about-title text-center">
                            <h1>发展历程</h1>
                        </div>
                        <div class="about-content process-content">
                            <div class="process-timeline draggable ui-widget-content">
                                <div id="draggable">
                                    <div class="process-body">
                                        <?php
                                        include "config.php";

                                        $info = $list[$_GET['id'] -1];
                                        $html = '';
                                        foreach ($info['process'] as $key => $value) {
$html .= <<<EOF
<div class="process-row">
    <div class="process-time">
        <div class="time-con">
            <span class="year">{$value['year']}</span>
        </div>
    </div>
    <div class="process-content">
        <h2> {$value['title']} </h2>
        <p> {$value['desc']} </p>
    </div>
</div>
EOF;
                                        }
                                        echo $html;
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <!-- 鼠标点击 滚动 -->
                            <div class="scrollMouse text-center">
                                <span id="processLeft" style="display:inline-block"> < </span>
                                <i class="icon icon-mouse"></i>
                                <span id="processRight"  style="display:inline-block"> > </span>
                                <br>
                                点击上面左右箭头
                                <br>
                                或点击鼠标左键不放左右拖动
                                <br>
                                或者按键盘左右方向键
                                <br>可浏览更多内容
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  底部栏  -->
    <?php include 'footer.php';?>

    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script>
        $(function(){
            var aboutWidth = $(".about").width();
            $(".process-timeline").width(aboutWidth);
            var lastRightSpeed = 40; //控制拖动到最右边点是否对准时间刻度线上
            var processtimelineW = $(".process-timeline").width();
            var processrowLength = $(".process-body").find('.process-row').length;
            var processbodyNumber = processrowLength*200;
            $(".process-body").css({"width":processbodyNumber});

            if(processrowLength < 5)
            {
                $("#draggable").draggable('disable');
                return;
            }
            $("#processLeft").click(function(){
                var processContentW = $(".process-content").width();
                var processBodyW = $(".process-body").width();
                var processBodyML = parseInt($(".ui-draggable").css("left"));
                if ( (Math.abs(processBodyML)+processtimelineW) >= processBodyW ) {
                    return;
                }
                $(".ui-draggable").css({"left":processBodyML-50});
            });
            $("#processRight").click(function(){
                var processBodyML = parseInt($(".ui-draggable").css("left"));
                if (processBodyML == 0) {
                    return;
                }
                $(".ui-draggable").css({"left":processBodyML+50});
            });

            $(document).keydown(function(event){
                if (event.keyCode == 39) {
                    $("#processLeft").click();
                }
                if (event.keyCode == 37) {
                    $("#processRight").click();
                }
            });

            $("#draggable").draggable({
                cursor: "move",
                axis: 'x',
                grid: [50, 20],
                stop: function(event, ui){
                    var FleftNumber = parseInt($("#draggable").css("left"));
                    if (FleftNumber > 0) {
                        $("#draggable").animate({"left": 0}, 500);
                        return;
                    };
                    var leftNumber = Math.abs(FleftNumber);
                    leftNumber = leftNumber + processtimelineW;
                    if (leftNumber > processbodyNumber)
                    {
                        leftNumber = processbodyNumber;
                        $("#draggable").animate({"left": -(leftNumber-processtimelineW + lastRightSpeed)}, 500);
                    }
                }
            });
        })
    </script>
</body>
</html>
