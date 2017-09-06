<!DOCTYPE html>
<html lang="en">
    <!--  引用资源文件  -->
    <?php include 'head.php'; ?>

    <body>
    <!--  顶部栏  -->
    <?php include 'header.php';?>

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <p><span>乡</span>村是一个历史的、动态的概念，从世界范围看，乡村这个特定的经济区域分为五个历史发展阶段：原始型乡村、古代型乡村、近代型乡村、现代型乡村、未来型乡村。中国乡村目前正处于由近代型向现代型过渡的阶段。乡村还是一个休闲的地方，那里悠然自在。现在由于城市环境的恶化，以及城市中心区域的越来越拥挤，越来越多的城市人开始选择到乡村去度假或安家。[摘自百度]
                        </p>
                        <a href="./blog.php" class="btn btn-common">跟着小分队一起出发吧~</a>
                    </div>
                    <img src="./images/home-right.png" class="slider-hill" alt="slider image" width="400px;"
                         style="margin-right: 100px">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>

    <!--  列举十大乡村  -->
    <section id="services">
        <div class="container">
            <div class="row">
                <?php
                include 'config.php';

                foreach ($index as $item) {
                    $html = '';
                    foreach ($item as $value) {
                        $html .= <<<EOF
<div class="col-sm-{$value['col']} text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="{$value['delay']}">
    <div class="single-service">
        <a href="blog.php?id={$value['index']}" target="_blank">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                <img src="./images/country/{$value['index']}.jpg" alt="" class="img-circle">
            </div>
            <h2>{$value['name']}</h2>
        </a>
        <p>{$value['desc']}</p>
    </div>
</div>
EOF;
                    }
                    echo '<div class="row">'.$html.'</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!--  乡村特色  -->
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image1.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>自然生态美</h2>
                        <P>
                            自然生态美论的提出是基于当代生态科学的发轫，自然生态危机的威逼和人类对自然认识的进一步深化，是西方传统自然美论缺失后，人们对自然美的重新觉醒以及觉醒后的理论反思。自然生态美论是从有机整体自然观出发看待自然现象美而形成的关于自然美的理论观点，其是当代形态的自然美学理论。自然生态美不是有别于自然美的另类美，而是自然美的特殊表现形式，如从概念层次上讲，其与自然美可以说是普遍与特殊、一般与个别的关系。</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms"
                         data-wow-delay="300ms">
                        <h2>生活幸福美</h2>
                        <P>
                            也可以踩着青石板，在小弄走上一遍。碰到小泵娘跳皮筋，可以加入，返朴归真一回。或与那些老人聊一些琐碎的生活，陪她们绣花，纳鞋，吃她们做的好吃的，听她们模糊的呓语。也可以在雨天撑一把伞，溅起一路水花，听雨的歌，为它们鼓掌。</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image2.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/image3.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>文化和谐美</h2>
                        <P>
                            "和谐"作为当今社会发展的主题同美的本质和中国文化的主旨完全契合。这一纲领性文件的提出,必将促进和谐美学、和谐文化的大繁荣、大发展,同时,和谐美学、和谐文化对于实现人与人、人与社会、人与自然的和谐发展具有重要意义,对于和谐社会的建设具有重要的推动作用。</P>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  slogan  -->
    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">中国最美乡村</h1>
                        <p>进最美的乡村，看最漂亮的景，处最淳朴的人，做最幸福的你</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  底部栏  -->
    <?php include 'footer.php';?>

    </body>
</html>