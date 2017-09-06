<!DOCTYPE html>
<html lang="en">
<!--  引用资源文件  -->
<?php include 'head.php'; ?>

<body>
    <!--  顶部栏  -->
    <?php include 'header.php'; ?>

    <!--  渲染详情页  -->
    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <?php
                            include 'config.php';

                            $info = $list[$_GET['id'] - 1];
                            $html = '';
                            $html .= <<<EOT
<div class="single-blog blog-details two-column">
    <div class="post-thumb">
        <a href="#"><img src="{$info['cover']}" class="img-responsive" alt=""></a>
        <div class="post-overlay">
            <span class="uppercase"><a href="#">2 <br><small>九月</small></a></span>
        </div>
    </div>
    <div class="post-content overflow">
        <h2 class="post-title bold"><a href="#">{$info['name']}</a></h2>
        <h3 class="post-author"><a href="{$info['detail']['author']['link']}">【来源由{$info['detail']['author']['name']}提供】</a>
        </h3>
        {$info['detail']['content']}
    </div>
    <div class="source">
        <a href="{$info['links']['info']}" class="btn btn-default" target="_blank">点击查看更多</a>
    </div>
</div>
EOT;
                            echo $html;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item tag-cloud">
                            <?php
                            include 'config.php';

                            $info = $list[$_GET['id'] - 1];
                            if ($info['process']) {
                                echo '<a href="timeline.php?id='.$info['index'].'" target="_blank" class="btn btn-default" style="width: 100%; height: 40px; font-size: 18px;">历史沿革</a>';
                            }else{
                                echo '<button class="btn btn-default" style="width: 100%; height: 40px; font-size: 18px;" disabled>暂无历史沿革</button>';
                            }
                            ?>
                        </div>
                        <?php
                        include 'comment_right.php';
                        ?>
                        <div class="sidebar-item tag-cloud">
                            <h3>标签</h3>
                            <ul class="nav nav-pills">
                                <?php
                                include 'config.php';

                                $info = $list[$_GET['id'] - 1];
                                echo '<li><a href="blog.php?id='.$info['index'].'" target="_blank" >'.$info['name'].'</a></li>';
                                ?>
                                <li><a href="#">美丽</a></li>
                                <li><a href="#">乡村</a></li>
                                <li><a href="#">游玩</a></li>
                                <li><a href="#">村落</a></li>
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
        </div>
    </section>

    <!--  底部栏  -->
    <?php include 'footer.php';?>

    <!--  引入弹幕  -->
    <script type="text/javascript" src="js/common.js"></script>
</body>
</html>
