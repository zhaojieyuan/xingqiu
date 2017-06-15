<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/rem.js"></script>
    <link rel="stylesheet" href="/css/swiper.css">
    <link rel="stylesheet" href="/css/show.css">
</head>
<body>
	<div class="swiper-container index-ban">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
        	<img src="/img/1.jpg" alt="">
        </div>
        <div class="swiper-slide">
        	<img src="/img/2.jpg" alt="">
        </div>
        <div class="swiper-slide">
        	<a href="/index/main" class="mask"></a>
        	<img src="/img/3.jpg" alt="">
        </div>
        
    </div>
    <!-- 如果需要分页器 -->
    <div class="swiper-pagination"></div>
    
   
</div>
</body>
<script src="/js/swiper.min.js"></script>
<script>
var swiper = new Swiper('.index-ban', {
    pagination: '.swiper-pagination',
    paginationClickable: true
});
</script>
</html>