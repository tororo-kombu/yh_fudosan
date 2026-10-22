<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>やはぎ不動産｜<?php the_title(); ?></title>
    <!-- フォント --><link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- フォント --><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- フォント --><link href="https://fonts.googleapis.com/css2?family=Kosugi&family=M+PLUS+1+Code:wght@100..700&display=swap" rel="stylesheet">
    <!-- アイコン --><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,300,0,0" />
    <!-- スタイルシート --><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>\style_sheets\style-single.css">
</head>
<body>
    <div class="header">
        <div class="page-titele">やはぎ不動産</div>
        <div id="manu-button" class="manu-button">
            <span class="material-symbols-rounded">menu</span><!-- メニューボタン -->
        </div>
    </div>
    <br><br><br><br>
    <div class="main-box">
        <img class="eyecatch" src="<?php the_post_thumbnail_url('large'); ?>"><!-- アイキャッチ -->
        <div class="page-titele"><?php the_title(); ?></div>
        <div class="page-contents">
            <?php echo the_content(); ?>
        </div>
        <br><br>
    </div>
    <br><br><br>



    <div class="footer">
            <div class="footer-titele">
                株式会社 矢作不動産
            </div>
            <div class="footer-info">〒334-0002 埼玉県川口市鳩ケ谷本町3-2-13</div>
            <div class="footer-copy"><span id="cl">&copy;</span>2025 YahagiFudosan Inc. All Rights Reserved.</div>
        </div>
    </div>



    
    <div class="manu"><!-- メニュー本体 -->
            <div id="manu-button-in" class="manu-close-button">
                <span class="material-symbols-rounded">close</span>
            </div>
            <div class="wrap-manu-links">
                <a href="../"><div class="manu-link" style="animation-delay: 0.15s;">トップ</div></a>
                <a href="../#list"><div class="manu-link" style="animation-delay: 0.20s;">物件一覧</div></a>
                <a href="../#corp-info"><div class="manu-link" style="animation-delay: 0.25s;">会社情報</div></a>
                <a href="../#business"><div class="manu-link" style="animation-delay: 0.30s;">事業内容</div></a>
                <a href="../#store"><div class="manu-link" style="animation-delay: 0.35s;">店舗・アクセス</div></a>
                <a href="../#contact"><div class="manu-link" style="animation-delay: 0.40s;">お問い合わせ</div></a>
                <a href="../#"><div class="manu-link" style="animation-delay: 0.45s;">アットホームとか</div></a>
            </div>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>\scripts\jquery-2.2.4.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>\scripts\script-manu.js"></script>
</body>
</html>