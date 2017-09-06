<!DOCTYPE html>
<html lang="en">
    <!--  引用资源文件  -->
    <?php include 'head.php'; ?>

    <body>

    <!--  顶部栏  -->
    <?php include 'header.php'; ?>

    <!--  列表展示  -->
    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <!--  动态渲染十大乡村列表  -->
                        <?php
                        include 'config.php';

                        $html = '';
                        foreach ($list as $key => $value) {
$html .= <<<EOT
<div class="col-sm-12 col-md-12">
    <div class="single-blog single-column">
        <div class="post-thumb">
            <a href="blog.php?id={$value['index']}" target="_blank"><img
                    src="{$value['cover']}"
                    class="img-responsive" alt=""></a>
            <div class="post-overlay">
                <span class="uppercase"><a href="#">2 <br><small>九月</small></a></span>
            </div>
        </div>
        <div class="post-content overflow">
            <h2 class="post-title bold"><a href="blog.php?id={$value['index']}" target="_blank">{$value['name']}</a></h2>
            <h3 class="post-author">由<a href="{$value['detail']['author']['link']}">{$value['detail']['author']['name']}</a>发布
            </h3>
            <p>{$value['desc']}</p>
            <a href="blog.php?id={$value['index']}" class="read-more" target="_blank">查看更多</a>
            <div class="post-bottom overflow">
                <ul class="nav navbar-nav post-nav">
                    <li><a href="#"><i class="fa fa-tag"></i>{$value['name']}</a></li>
                    <li><a href="#"><i class="fa fa-heart"></i>32 喜欢</a></li>
                    <li><a href="#"><i class="fa fa-comments"></i>3 评论</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
EOT;
                    }
                    echo $html;
                    ?>
                    </div>
                </div>

                <!--  侧边栏  -->
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <?php
                        include 'comment_right.php';
                        ?>
                        <div class="sidebar-item tag-cloud">
                            <h3>中国最美十大乡村</h3>
                            <ul class="nav nav-pills">
                                <!--  动态渲染十大乡村标签  -->
                                <?php
                                include "config.php";
                                foreach ($list as $value) {
                                    $href = "blog.php?id=".$value['index'];
                                    echo "<li><a href=$href target='_blank'>".$value['name']."</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="sidebar-item popular">
                            <h3>最近访问</h3>
                            <ul class="gallery">
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  底部栏  -->
    <?php include 'footer.php';?>
    </body>
</html>