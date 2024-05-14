<?php
//캐시 없이 파일로드 (임시)
function get_url( $url ) {
    if(empty($url)) return $url;
	$url = $url."?ver=".date("YmdHis");
    return $url;
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title>pirringo</title>
	<meta name="viewport" id="meta_viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1,maximum-scale=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--<link rel="apple-touch-icon" href="./img/favorite/favorite_mobile.png">
	<link rel="shortcut icon" href="./img/favorite/favorite.ico">-->
	<link rel="stylesheet" href="./css/_reset.css">
	<link rel="stylesheet" href="./js/swiper/swiper.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?=get_url('./css/style.css')?>">
	<!--<link rel="stylesheet" href="<?=get_url('./css/_util.css')?>">-->
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!--<script src="./js/_common.js"></script>
	<script src="./js/animation/easing.js"></script>
	<script src="./js/animation/jquery.transit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/egjs-jquery-transform/2.0.0/transform.min.js"></script>-->
	<!--[swiper]-->
	<script src="./js/swiper/swiper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
	<script src="./js/myScript.js"></script>
</head>
<body>

<div id="root">
	<div id="wrapper">
		
		<div id="_dashboard_top">
			<div class="logo">
				<img src="./img/logo.svg" alt="로고">
				<span class="sub">마곡 발산역 지점</span>
			</div>
			<div class="_livedata">
				<span class="weather">
					<img src="./img/weather/w1.png" alt="맑음">24°
				</span>|
				<!--
				<img src="./img/weather/w1.png" alt="맑음">
				<img src="./img/weather/w2.png" alt="구름조금">
				<img src="./img/weather/w3.png" alt="구름">
				<img src="./img/weather/w4.png" alt="번개">
				<img src="./img/weather/w5.png" alt="비">
				<img src="./img/weather/w6.png" alt="눈">
				-->
				<span class="date">4월 30일(화) 12:00</span>
			</div>
		</div>
		<div id="_dashboard_center">
			<div id="call_pannel">
				<div class="_top">순번대기</div>
				<div class="_con">
					<p>305번 고객님</p>
					1번 창구로 오시기 바랍니다
				</div>
				<div class="_info">
					<div class="_info_label">창구번호 <span class="num">1</span></div>
					<div class="_info_con"><span class="num">305</span>번</div>
				</div>
			</div>
			<img src="./img/bg.png" alt="배경이미지">
		</div>
		<div id="_dashboard_bottom">
			<div id="_notice" class="mySwiper" data-per="1" data-gap="50" data-loop="true" data-timer="5" data-direction="vertical">
				<div class="swiper-container">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">KB국민은행 마곡 발산역 지점에 오신것을 환영합니다.</li>
						<li class="swiper-slide">KB국민은행 마곡 발산역 지점에 오신것을 환영합니다.</li>
						<li class="swiper-slide">KB국민은행 마곡 발산역 지점에 오신것을 환영합니다.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="pannel">
		<div id="waitign_list">
			<div class="_head">
				순번 대기 인원 수
				<div class="numbering">
					<span class="num">203</span>명   
				</div>
			</div>
			<ul>
				<li class="active">
					<span class="_label_num">1</span>
					대기 11명
					<div class="numbering">
						<span class="num">305</span>번   
					</div>
				</li>
				<li class="">
					<span class="_label_num">2</span>
					대기 32명
					<div class="numbering">
						<span class="num">12</span>번   
					</div>
				</li>
				<li class="">
					<span class="_label_num">3</span>
					대기 5명
					<div class="numbering">
						<span class="num">77</span>번   
					</div>
				</li>
			</ul>
		</div>
		<div id="waitign_type">
			<div class="_head">
				유형별 대기현황
				<div class="numbering">
					<span class="num">503</span>명   
				</div>
			</div>
			<div class="mySwiper" data-per="auto" data-gap="14" data-loop="true" data-timer="3" data-direction="vertical">
				<div class="swiper-container">
					<ul class="swiper-wrapper">
						<li class="swiper-slide">
							<span class="_label">예적금</span>
							대기 05명
						</li>
						<li class="swiper-slide">
							<span class="_label">대출</span>
							대기 08명
						</li>
						<li class="swiper-slide">
							<span class="_label">기업</span>
							대기 12명
						</li>
						<li class="swiper-slide">
							<span class="_label">외환</span>
							대기 30명
						</li>
						<li class="swiper-slide">
							<span class="_label">외환</span>
							대기 66명
						</li>
						<li class="swiper-slide">
							<span class="_label">예적금</span>
							대기 05명
						</li>
						<li class="swiper-slide">
							<span class="_label">대출</span>
							대기 08명
						</li>
						<li class="swiper-slide">
							<span class="_label">기업</span>
							대기 12명
						</li>
						<li class="swiper-slide">
							<span class="_label">외환</span>
							대기 30명
						</li>
						<li class="swiper-slide">
							<span class="_label">외환</span>
							대기 66명
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>

</body>
</html>