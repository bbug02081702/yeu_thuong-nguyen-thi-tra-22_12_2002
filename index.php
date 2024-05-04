<?php
/*
Template Name: Nguyễn Thị Trà(22-12-2002)
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Chúc mọi điều tốt đẹp nhất đến với em Nguyễn Thị Trà(22-12-2002) ở hiện tại và tương lai">
  <meta property="og:description" content="Hãy luôn tươi cười, rạng rỡ và mong em Nguyễn Thị Trà thật hạnh phúc nhé...!!">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/teabee/assets/images/screenshot.png">
  <meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>">
  <meta name="description" content="Hãy luôn tươi cười, rạng rỡ và mong em Nguyễn Thị Trà thật hạnh phúc nhé...!!">
  <meta name="keywords" content="Nguyễn Thị Trà, Nguyễn Xuân Tài, Bbugsoft, Bbug, Teabee">
  <meta name="author" content="Nguyễn Xuân Tài">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/favicon.png" />
  <title>Chúc mọi điều tốt đẹp nhất đến với Nguyễn Thị Trà(22-12-2002) ở hiện tại và tương lai</title>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/teabee/assets/fonts/Montserrat/Montserrat-Light.woff" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/teabee/assets/fonts/Montserrat/Montserrat-Bold.woff" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/teabee/assets/fonts/Montserrat/Montserrat-Black.woff" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/teabee/assets/images/screenshot.png" as="image" crossorigin>
  <link rel="icon" href="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/favicon.png" sizes="32x32" />
  <link rel="icon" href="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/favicon.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/favicon.png" />

  <style>
    :root {
    --bg_primary: #360064;
    --txt_primary: #ffffff;
    --txt-higlight: #FF038B;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat' !important;
}

body {
    background-color: var(--bg_primary);
}

@font-face {
    font-family: 'Montserrat';
    src: url("<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/fonts/Montserrat/Montserrat-Light.woff") format("woff");
    font-weight: 400;
    font-style: normal;
	font-display: swap;
}
@font-face {
    font-family: 'Montserrat';
    src: url("<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/fonts/Montserrat/Montserrat-Bold.woff") format("woff");
    font-weight: 700;
    font-style: normal;
	font-display: swap;
} 
@font-face {
    font-family: 'Montserrat';
    src: url("<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/fonts/Montserrat/Montserrat-Black.woff") format("woff");
    font-weight: 900;
    font-style: normal;
	font-display: swap;
} 

.container_bbug_tea {
    margin: 0 auto;
    width: 100%;
    max-width: 1400px;
    padding: 22px;
}

.container-title {
    width: 100%;
    max-width: 989px;
    margin: 0 auto;
}

.txt-higlight {
    color: var(--txt-higlight);
}

.bbug_tea_txt-title {
    color: #FFF;
    text-align: center;
    font-size: 48px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin-bottom: 82px;
}

.bbug_tea_mb {
    display: none;
}

.bbug_tea_banner {
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: space-between;
}
.bbug_tea_banner img{
    cursor: pointer;
}

.bbug_tea_banner_left .banner_item {
    display: grid;
    grid-template-columns: auto auto auto auto;
    gap: 22px;
    /* animation: marqueeTop 50s linear infinite; */
}

.bbug_tea_banner_left .banner_item img {
    width: 100%;
    height: auto;
    max-width: 120px;
}

.bbug_tea_banner_left .banner_item img:nth-child(even) {
    margin-top: 22px;
    animation: marqueeTop 22s linear infinite;
}

@keyframes marqueeTop {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-212%);
    }
}

.bbug_tea_banner_left .banner_item img:nth-child(odd) {
    margin-top: 22px;
    animation: marqueeBottom 22s linear infinite;
}

@keyframes marqueeBottom {
    0% {
        transform: translateY(-212%);
    }

    100% {
        transform: translateY(0);
    }
}

.bbug_tea_banner .bbug_tea_banner_center {
    background-image: url("<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_main_love.png");
    align-items: center;
    display: flex;
    flex-direction: column;
    object-fit: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    width: 100%;
    border-radius: 12px;
    max-width: 210px;
    height: 402px;
}

.container-center {
    margin: 0 auto;
}

.bbug_tea_banner .bbug_tea_banner_center .banner_item_center {
    overflow: hidden;
    margin-top: 22px;
    display: flex;
    flex-shrink: 0;
    justify-content: flex-start;
    flex-direction: column;
    width: 181px;
    height: 145px;
    color: var(--txt_primary);
    font-size: 14px;
    font-weight: 700;
    overflow: hidden;
    line-height: normal;
}

.bbug_tea_banner .bbug_tea_banner_center .banner_item_center .date-center {
    line-height: normal;
}

.bbug_tea_banner .bbug_tea_banner_center .banner_item_center .year-center-counter {
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: var(--txt_primary);
    font-size: 64px;
    font-weight: 900;
    line-height: 0.8;
}

.bbug_tea_banner .bbug_tea_banner_center .banner_item_center .year-center-counter .number-one {
    -webkit-text-fill-color: transparent;
    background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_2.png) no-repeat;
    -webkit-background-clip: text;
     background-clip: text;
}

.bbug_tea_banner .bbug_tea_banner_center .banner_item_center .year-center-counter .number-two {
    -webkit-text-fill-color: transparent;
    background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_0.png) center;
    -webkit-background-clip: text;
     background-clip: text;
}
.bbug_tea_banner .bbug_tea_banner_center .banner_item_center .year-center-counter .number-three {
    -webkit-text-fill-color: transparent;
    background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_2_three.png) no-repeat;
    -webkit-background-clip: text;
     background-clip: text;
}
.bbug_tea_banner .bbug_tea_banner_center .banner_item_center .year-center-counter .year-next .number-last-top {
    -webkit-text-fill-color: transparent;
    background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_4.png) center;
    -webkit-background-clip: text;
     background-clip: text;
}
.bbug_tea_banner .bbug_tea_banner_center .banner_item_center .year-center-counter .year-next .number-last-bottom {
    -webkit-text-fill-color: transparent;
    background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_5.png) center;
    -webkit-background-clip: text;
     background-clip: text;
}

.bbug_tea_banner .bbug_tea_banner_center .banner_item_center .year-center-counter .year-next {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: var(--txt_primary);
    font-size: 64px;
    font-weight: 900;
}

.bbug_tea_banner_center .banner_item_center .txt-show {
    display: inline-block;
    font-size: 12px;
    letter-spacing: 0.8px;
    line-height: 0;
}
.bbug_tea_banner_center .txt-author{
    z-index: 2212;
    margin-top: 212px;
    display: inline-block;
    cursor: pointer;
}
.bbug_tea_banner_center .txt-author .txt-author-details{
    font-size: 12px;
    text-decoration: none;
    text-align: center;
    color: var(--txt_primary);
}
.bbug_tea_banner_center .txt-author .txt-author-details:hover{
    font-size: 12px;
    text-decoration: none;
    text-align: center;
    color: var(--txt_primary);
    text-shadow: 0px 4px 4px #FFF;
}

.bbug_tea_banner_right .banner_item_right {
    display: grid;
    grid-template-columns: auto auto auto auto;
    gap: 22px;
}

/* .bbug_tea_banner_center .banner_item_center img{
    width: 100%;
    max-width: 210px;
    height: auto;
} */
.bbug_tea_banner_right .banner_item_right img {
    width: 100%;
    height: auto;
    max-width: 120px;
}

.bbug_tea_banner_right .banner_item_right img:nth-child(odd) {
    margin-top: 46px;
    animation: marqueeTop 22s linear infinite;
}

@keyframes marqueeTop {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-212%);
    }
}

.bbug_tea_banner_right .banner_item_right img:nth-child(even) {
    margin-top: 46px;
    animation: marqueeBottom 22s linear infinite;
}

@keyframes marqueeBottom {
    0% {
        transform: translateY(-212%);
    }

    100% {
        transform: translateY(0);
    }
}

/* tea of tra */
.bbug_tea .icon-tea {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -100px;
}

.container_tea_test {
    position: relative;
}

.cup {
    position: relative;
    width: 70px;
    height: 75.6px;
    background: linear-gradient(to right, #f9f9f9, #d9d9d9);
    border-bottom-left-radius: 45%;
    border-bottom-right-radius: 45%;
}

.top {
    position: absolute;
    top: -11px;
    left: 0;
    width: 100%;
    height: 22px;
    background: linear-gradient(to right, #f9f9f9, #d9d9d9);
    border-radius: 50%;
}

.circle {
    position: absolute;
    top: 2px;
    left: 5px;
    width: calc(100% - 10px);
    height: 17px;
    background: linear-gradient(to left, #f9f9f9, #d9d9d9);
    border-radius: 50%;
    box-sizing: border-box;
    overflow: hidden;
}

.tea {
    position: absolute;
    top: 5px;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(#c57e65, #e28462);
    border-radius: 50%;
}

.handle {
    position: absolute;
    top: 7px;
    right: -17px;
    width: 40px;
    height: 45.6px;
    border: 10px solid #dcdcdc;
    border-left: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-radius: 50%;
    transform: rotate(42deg);
}

.plate {
    position: absolute;
    bottom: -19px;
    left: 50%;
    transform: translateX(-50%);
    width: 122px;
    height: 48.8px;
    background: linear-gradient(to right, #f9f9f9, #e7e7e7);
    border-radius: 50%;
    box-shadow: 0 8.46px 8.46px rgba(0, 0, 0, 0.2);
}

.plate::before {
    content: '';
    position: absolute;
    top: 4.88px;
    left: 4.88px;
    right: 4.88px;
    bottom: 4.88px;
    border-radius: 50%;
    background: linear-gradient(to right, #f9f9f9, #e7e7e7);
}

.plate::after {
    content: '';
    position: absolute;
    top: 14.64px;
    left: 14.64px;
    right: 14.64px;
    bottom: 14.64px;
    background: radial-gradient(rgba(0, 0, 0, 0.2) 25%, transparent, transparent);
    border-radius: 50%;
}

.vapour {
    position: relative;
    display: flex;
    z-index: 1;
    padding: 0 12.1px;
}

.vapour span {
    position: relative;
    bottom: 12.1px;
    display: block;
    margin: 0 1.1px 12.1px;
    min-width: 3.6px;
    height: 91.2px;
    background: #fff;
    border-radius: 50%;
    animation: animate 5s linear infinite;
    opacity: 0;
    filter: blur(5.2px);
    animation-delay: calc(var(--i) * -0.5s);
}

@keyframes animate {
    0% {
        transform: translateY(0) scaleX(1);
        opacity: 0;
    }

    15% {
        opacity: 1;
    }

    50% {
        transform: translateY(-113.76px) scaleX(5);
    }

    95% {
        opacity: 0;
    }

    100% {
        transform: translateY(-227.52px) scaleX(10);
    }
}
/* end tea of tra */
.bbug_tea_heart {
    margin-top: 24px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.bbug_tea_heart .heart_layout {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 122px;
}

.bbug_tea_heart .heart_layout .heart_box {
    position: relative;
    width: 122px;
    height: 122px;
    background-color: var(--txt_primary);
    transform: rotate(-45deg);
    box-shadow: -12px 12px 82px #fff;
    animation: heartlovetea 1.2s infinite;
}

@keyframes heartlovetea {
    0% {
        transform: rotate(-45deg) scale(1.12);
    }

    80% {
        transform: rotate(-45deg) scale(1.0);
    }

    100% {
        transform: rotate(-45deg) scale(0.8);
    }
}

#heart_bbugtea:before {
    position: absolute;
    content: "";
    top: -50%;
    width: 122px;
    height: 122px;
    background: #fff;
    -moz-border-radius: 50%;
    border-radius: 50%;
    box-shadow: -12px -12px 82px #fff;
}

#heart_bbugtea:after {
    position: absolute;
    content: "";
    right: -50%;
    width: 122px;
    height: 122px;
    background: #fff;
    -moz-border-radius: 50%;
    border-radius: 50%;
    box-shadow: 12px 12px 82px #fff;
}

.heart_text {
    font-size: 22px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-align: center;
    z-index: 2212;
    color: var(--txt-higlight);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(45deg);
    display: inline-block;
    overflow: visible;
}

.heart_content {
    align-items: center;
    flex-direction: column;
    display: flex;
    margin-top: 12px;
    gap: 8px;
}

.heart_content .heart_head_phone {
    width: 59px;
    height: auto;
    max-width: 59px;
}

.heart_content .heart_head_phone img {
    width: 59px;
    height: auto;
    max-width: 59px;
}

.heart_content .heart_plays {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 22px;
}

.heart_content .heart_plays .heart_pre img {
    width: 25px;
    height: auto;
    max-width: 25px;
}

.heart_content .heart_plays .heart_wave {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 25px;
    overflow: hidden;
}

.wave {
    display: block;
    height: 100%;
    position: relative;
    width: 4px;
    background-color: var(--txt_primary);
    border-radius: 12px;
    margin: 0 2.2px;
    animation: waveAnimation 1.2s infinite ease-in-out;
}

@keyframes waveAnimation {
    0% {
        height: 20%;
    }

    50% {
        height: 80%;
    }

    100% {
        height: 20%;
    }
}

.wave:nth-child(1) {
    animation-delay: 0.2s;
}

.wave:nth-child(2) {
    animation-delay: 0.4s;
}

.wave:nth-child(3) {
    animation-delay: 0.6s;
}

.wave:nth-child(4) {
    animation-delay: 0.2s;
}

.heart_content .heart_plays .heart_next img {
    width: 25px;
    height: auto;
    max-width: 25px;
}

.heart_content .heart_text_details {
    margin-top: 10px;
    width: 459px;
    height: 66px;
    /* color: var(--txt_primary); */
    text-align: center;
    font-size: 22px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    position: relative;
    color: transparent;
    background: linear-gradient(to right, #fff, #fff) no-repeat;
    background-size: 0% 100%;
    /* Ban đầu không có màu */
    background-clip: text;
    -webkit-background-clip: text;
    /* Hỗ trợ cho trình duyệt Safari */
    animation: karaokeAnimation 12s infinite;/
}

@keyframes karaokeAnimation {
    0% {
        background-size: 0% 100%;
    }

    50% {
        background-size: 100% 100%;
    }

    100% {
        background-size: 0% 100%;
    }
}

/* .heart_content .heart_text_details::after {
    content: 'Hành trình quá khứ của Nguyễn Thị Trà với những bức ảnh đẹp...'; 
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, transparent 0%, #fff 50%, transparent 100%); 
    animation: karaokeAnimation 3s infinite; 
  } */

/* icon love tea bottom animation */
.open-modal-btn {
    z-index: 9999;
    position: fixed;
    bottom: 12px;
    right: 22px;
    outline: none;
    border: none;
    cursor: pointer;
    transition: 0.25s;
}

.open-modal-btn img {
    width: 48px;
    height: auto;
    flex-shrink: 0;
}

#bbug_call_love_tea_bee .ping {
    right: 12px;
    bottom: 22px;
    border: 1px solid #ff038b;
    width: 20px;
    height: 20px;
    opacity: 1;
    background-color: #ff038b;
    border-radius: 100%;
    -webkit-animation-duration: 1.25s;
    animation-duration: 1.25s;
    -webkit-animation-name: sonar;
    animation-name: sonar;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    display: block;
    /* margin: 14px 0 0 14px; */
    position: absolute;
}

@-webkit-keyframes sonar {
    0% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    100% {
        -webkit-transform: scale(4);
        transform: scale(4);
        opacity: 0
    }
}

@keyframes sonar {
    0% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1)
    }

    100% {
        -webkit-transform: scale(4);
        transform: scale(4);
        opacity: 0
    }
}

.image-top-left {
    position: absolute;
    top: 0;
    left: 0;
}

.modal {
    opacity: 1;
    pointer-events: auto;
    visibility: visible;
    position: fixed;
    z-index: 1000;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0px 12px;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.6);
}

.hide {
    display: none;
}

.modal__inner {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 450px;
    background-color: #FF038B;
    border-radius: 22px;
    overflow: hidden;
    animation: showModal linear 0.2s;
    position: relative;
}

@keyframes showModal {
    from {
        top: -200px;
        opacity: 0;
    }

    to {
        top: 0;
        opacity: 1;
    }
}

.modal__header {
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 15px;
    font-size: 17px;
}

.modal__header h2 {
    text-align: center;
    width: 100%;
    max-width: 162px;
    font-size: 17px;
    font-style: normal;
    font-weight: 700;
}

.modal__header img {
    margin-top: 12px;
    height: auto;
    width: 100%;
    max-width: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal__body {
    padding: 15px;
}

.form-container {
    gap: 12px;
    display: flex;
    flex-direction: column;
}

.input_container {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon-phone {
    position: absolute;
    left: 12px;
    width: 21.875px;
    height: auto;
}

.input-icon {
    position: absolute;
    left: 12px;
    width: 21.875px;
    height: auto;
}

.modal__body .form-container .form_input {
    resize: vertical;
    text-align: center;
    color: #ff038b;
    width: 100%;
    padding: 10px;
    border: 1px solid #FFF;
    border-radius: 12px;
    font-size: 12px;
    box-sizing: border-box;
}

.form_input::placeholder {
    text-align: center;
    color: #999;
}

.form_input:focus {
    outline: none;
    border-color: #ffffff;
    box-shadow: 0 0 12px rgba(255, 255, 255, 0.5);
}

.form_input:not(:focus) {
    transition: border-color 0.3s, box-shadow 0.3s;
}

.modal__body .form-container .txt_dream_of_tra {
    width: 100%;
    padding: 10px;
    border: 1px solid #fff;
    border-radius: 12px;
    font-size: 12px;
    resize: vertical;
    box-sizing: border-box;
    text-align: center;
    color: #ff038b;
}
.txt_dream_of_tra:-moz-placeholder, /* Firefox 18- */
.txt_dream_of_tra::-moz-placeholder, /* Firefox 19+ */
.txt_dream_of_tra:-ms-input-placeholder, /* IE 10+ */
.txt_dream_of_tra::-webkit-input-placeholder,
.txt_dream_of_tra::placeholder {
    text-align: center;
    color: #999;
}

.txt_dream_of_tra:focus {
    outline: none;
    border-color: #ffffff;
    box-shadow: 0 0 12px rgba(255, 255, 255, 0.5);
}

.txt_dream_of_tra:not(:focus) {
    transition: border-color 0.3s, box-shadow 0.3s;
}


.modal__footer {
    padding: 15px;
    text-align: right;
}

.modal__footer button {
    outline: none;
    border: none;
    padding: 10px 20px;
    background-color: #fff;
    color: #ff038b;
    border-radius: 12px;
    cursor: pointer;
}

.btn_container_input {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.btn_container_input .btn-tra-no {
    cursor: pointer;
    color: #ff038b;
    gap: 12px;
    background-color: #fff;
    display: flex;
    align-items: center;
    padding: 6px 12px;
    border-radius: 20px;
}

.btn_container_input .btn-tra-no img {
    width: 100%;
    max-width: 24.219px;
    height: auto;
}

.txt-crush-tra {
    margin-top: 22px;
    text-align: left;
    color: #FFF;
    /* line-height: normal; */
}





/* reponsive for mobile */
@media screen and (max-width: 768px) {
    .container_bbug_tea_mb {
        margin: 0 auto;
        overflow: hidden;
    }

    .bbug_tea_mb {
        display: block;
    }

    .bbug_tea_banner_mb {
        width: 100%;
    }

    .bbug_tea {
        display: none;
    }

    .heart_content {
        display: none;
    }

    .heart_text_details {
        display: none;
    }

    .bbug_tea_banner_mb .bbug_tea_banner_center_mb {
        overflow: hidden;
        background-image: url("<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_main_love_mb.png");
        /* justify-content: center; */
        align-items: center;
        display: flex;
        gap: 222px;
        flex-direction: column;
        object-fit: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        width: 100%;
        /* border-radius: 12px; */
        /* min-width: 430px; */
        height: 799px;
    }

    .container-center {
        margin: 0 auto;
    }

    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb {
        margin-top: 122px;
        display: flex;
        flex-shrink: 0;
        justify-content: flex-start;
        flex-direction: column;
        width: 100%;
        max-width: 181px;
        height: 145px;
        color: var(--txt_primary);
        font-size: 14px;
        font-weight: 700;
        overflow: hidden;
        line-height: normal;
    }

    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .date-center {
        line-height: normal;
    }

    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .year-center-counter {
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: var(--txt_primary);
        font-size: 64px;
        font-weight: 900;
        line-height: 0.8;
    }

    /* .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .year-center-counter .number-one {
        font-family: Montserrat !important;
        font-weight: 900;
    } */

    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .year-center-counter .number-one {
        font-family: Montserrat !important;
        font-weight: 900;
        -webkit-text-fill-color: transparent;
        background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_2.png) no-repeat;
        -webkit-background-clip: text;
         background-clip: text;
    }
    
    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .year-center-counter .number-two {
        font-family: Montserrat !important;
        font-weight: 900;
        -webkit-text-fill-color: transparent;
        background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_0.png) center;
        -webkit-background-clip: text;
         background-clip: text;
    }
    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .year-center-counter .number-three {
        font-family: Montserrat !important;
        font-weight: 900;
        -webkit-text-fill-color: transparent;
        background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_2_three.png) no-repeat;
        -webkit-background-clip: text;
         background-clip: text;
    }
    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .year-center-counter .year-next .number-last-top {
        font-family: Montserrat !important;
        font-weight: 900;
        -webkit-text-fill-color: transparent;
        background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_4.png) center;
        -webkit-background-clip: text;
         background-clip: text;
    }
    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .year-center-counter .year-next .number-last-bottom {
        font-family: Montserrat !important;
        font-weight: 900;
        -webkit-text-fill-color: transparent;
        background: url(<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/fill_5.png) center;
        -webkit-background-clip: text;
         background-clip: text;
    }

    .bbug_tea_banner_mb .bbug_tea_banner_center_mb .banner_item_center_mb .year-center-counter .year-next {
        font-family: Montserrat !important;
        font-weight: 900;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: var(--txt_primary);
        font-size: 64px;
        font-weight: 900;
    }

    .bbug_tea_banner_center_mb .banner_item_center_mb .txt-show {
        display: inline-block;
        font-size: 12px;
        letter-spacing: 0.8px;
        line-height: 0;
    }

    .heart_content_mb {
        width: 100%;
        max-width: 329px;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        display: flex;
        gap: 12px;
        color: var(--txt_primary);
        text-align: center;
        margin: 0 auto;
    }

    .heart_content_mb .heart_head_phone img {
        width: 59px;
        height: auto;
    }

    .heart_content_mb .heart_plays {
        display: flex;
        gap: 22px;
        align-items: center;
        justify-content: center;
    }

    .heart_content_mb .heart_plays .heart_pre img {
        width: 25px;
        height: auto;
    }

    .heart_content_mb .heart_plays .heart_wave {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 25px;
        overflow: hidden;
    }

    .wave {
        display: block;
        height: 100%;
        position: relative;
        width: 4px;
        background-color: var(--txt_primary);
        border-radius: 12px;
        margin: 0 2.2px;
        animation: waveAnimation 1.2s infinite ease-in-out;
    }

    @keyframes waveAnimation {
        0% {
            height: 20%;
        }

        50% {
            height: 80%;
        }

        100% {
            height: 20%;
        }
    }

    .wave:nth-child(1) {
        animation-delay: 0.2s;
    }

    .wave:nth-child(2) {
        animation-delay: 0.4s;
    }

    .wave:nth-child(3) {
        animation-delay: 0.6s;
    }

    .wave:nth-child(4) {
        animation-delay: 0.2s;
    }

    .heart_content_mb .heart_plays .heart_next img {
        width: 25px;
        height: auto;
    }

    .heart_content_mb .heart_text_details_mb {
        margin-top: 10px;
        display: -webkit-box;
        font-weight: 600;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        position: relative;
        color: transparent;
        background: linear-gradient(to right, #fff, #fff) no-repeat;
        background-size: 0% 100%;
        /* Ban đầu không có màu */
        background-clip: text;
        -webkit-background-clip: text;
        /* Hỗ trợ cho trình duyệt Safari */
        animation: karaokeAnimationMb 12s infinite;
    }

    @keyframes karaokeAnimationMb {
        0% {
            background-size: 0% 100%;
        }

        50% {
            background-size: 100% 100%;
        }

        100% {
            background-size: 0% 100%;
        }
    }

    .bbug_tea_banner_center_mb .txt-author-mb{
        margin-top: -112px;
        display: inline-block;
    }
    .bbug_tea_banner_center_mb .txt-author-mb .txt-author-details-mb{
        text-shadow: 0px 4px 4px #FFF;
        cursor: pointer;
        color: var(--txt_primary);
        text-decoration: none;
        font-size: 12px;
    }
    .bbug_tea_mb .bbug_tea_lib {
        padding: 0px 2px;
        flex-direction: column;
        margin-top: 22px;
        margin-bottom: 22px;
        display: flex;

    }

    .bbug_tea_mb .bbug_tea_lib .bbug_tea_lib-title {
        text-align: center;
        color: var(--txt_primary);
        width: 100%;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 0 auto;
        max-width: 271px;
    }

    .bbug_tea_mb .bbug_tea_lib .txt-higlight {
        color: var(--txt-higlight);
    }

    .bbug_tea_mb .bbug_tea_lib .bbug_tea_box_images {
        height: 212vh;
        overflow: hidden;
        margin-top: 22px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        justify-content: center;
        align-items: center;
    }

    .bbug_tea_box_images img:nth-child(even) {
        /* max-width: 155px; */
        height: auto;
        width: 100%;
        animation: marqueeTopMb 82s linear infinite;
    }

    @keyframes marqueeTopMb {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-1600%);
        }
    }

    .bbug_tea_box_images img:nth-child(odd) {
        /* max-width: 155px; */
        height: auto;
        width: 100%;
        animation: marqueeBottomMb 82s linear infinite;
    }

    @keyframes marqueeBottomMb {
        0% {
            transform: translateY(-1600%);
        }

        100% {
            transform: translateY(0);
        }
    }

    /* heart_love_tea */
    .bbug_tea_heart {
        margin-top: 22px;
        margin-bottom: 22px;
        display: grid;
        align-items: center;
        justify-content: center;
    }

    .bbug_tea_heart .heart_layout {
        grid-template-columns: repeat(2, 1fr);
        display: grid;
        align-items: center;
        justify-content: center;
        gap: 82px;
    }

    .bbug_tea_heart .heart_layout .heart_box {
        position: relative;
        max-width: 82px;
        max-height: 82px;
        background-color: var(--txt_primary);
        transform: rotate(-45deg);
        box-shadow: -12px 12px 82px #fff;
        animation: heartlovetea 1.2s infinite;
    }

    #heart_bbugtea:before {
        position: absolute;
        content: "";
        top: -50%;
        max-width: 82px;
        max-height: 82px;
        background: #fff;
        -moz-border-radius: 50%;
        border-radius: 50%;
        box-shadow: -12px -12px 82px #fff;
    }

    #heart_bbugtea:after {
        position: absolute;
        content: "";
        right: -50%;
        max-width: 82px;
        max-height: 82px;
        background: #fff;
        -moz-border-radius: 50%;
        border-radius: 50%;
        box-shadow: 12px 12px 82px #fff;
    }
    .modal__body .form-container .form_input{
        font-size: 10px;
    }
    .modal__body .form-container .txt_dream_of_tra{
        font-size: 10px;
    }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
    .bbug_tea_heart .heart_layout {
        gap: 112px;
    }

    .bbug_tea_heart .heart_layout .heart_box {
        width: 82px;
        height: 82px;
    }

    #heart_bbugtea:before {
        width: 82px;
        height: 82px;
    }

    #heart_bbugtea:after {
        width: 82px;
        height: 82px;
    }
}

/* iPhone XS Max, XR ———– */
@media only screen and (min-device-width: 414px) and (max-device-height: 896px) and (orientation : landscape) and (-webkit-device-pixel-ratio: 3){
    .bbug_tea_heart .heart_layout{
        gap: 22px;
    }
    .bbug_tea_heart .heart_layout .heart_box{
        width: 88px;
        height: 88px;
    }
    #heart_bbugtea:before{
        width: 88px;
        height: 88px;
    }
    #heart_bbugtea:after{
        width: 88px;
        height: 88px;
    }

    }

  </style>
</head>

<body>
  <section class="bbug_tea container_bbug_tea">
    <div class="bbug_tea_title">
      <h2 class="bbug_tea_txt-title container-title">
        Hành trình quá khứ của <b class="txt-higlight">Nguyễn Thị Trà</b>
        với những bức ảnh đẹp...</h2>
      <div class="bbug_tea_banner">
        <div class="bbug_tea_banner_left">
          <div class="banner_item">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_2.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_4.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_5.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_6.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_3.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_4_1.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_5_1.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_6_1.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_13.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_14.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_15.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_16.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_17.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_18.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_19.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_20.png" width="100%" height="auto" alt="love_tea" title="love_tea">
          </div>
        </div>
        <div class="bbug_tea_banner_center">
          <div class="banner_item_center container-center">
            <!-- <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_main_love.png" width="100%" height="auto" alt="tea_main_love" title="tea_main_love"> -->
            <p class="date-center">366/366</p>
            <div class="year-center-counter">
              <div class="number-one"></div>
              <div class="number-two"></div>
              <div class="number-three"></div>
              <div class="year-next">
                <div class="number-last-top"></div>
                <div class="number-last-bottom"></div>
              </div>
            </div>
            <div class="txt-show">A NEW BEGINNING</div>
          </div>
          <div class="txt-author"><a class="txt-author-details" href="https://bbugsoft.com" target="_blank">@2024 Nguyen
              Xuan Tai</a></div>
        </div>
        <div class="bbug_tea_banner_right">
          <div class="banner_item_right">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_7.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_8.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_9.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_10.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_7_1.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_8_1.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_9_1.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_10_1.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_21.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_22.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_23.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_24.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_25.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_26.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_27.png" width="100%" height="auto" alt="love_tea" title="love_tea">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_28.png" width="100%" height="auto" alt="love_tea" title="love_tea">
          </div>
        </div>
      </div>
      <div class="icon-tea">
        <!-- <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-tea.png" width="100%" height="auto" alt=""> -->
        <div class="container_tea_test">
          <div class="plate"></div>
          <div class="cup">
            <div class="top">
              <div class="vapour">
                <span style="--i:1;"></span>
                <span style="--i:3;"></span>
                <span style="--i:16;"></span>
                <span style="--i:5;"></span>
                <span style="--i:13;"></span>
                <span style="--i:20;"></span>
                <span style="--i:6;"></span>
                <span style="--i:7;"></span>
                <span style="--i:10;"></span>
                <span style="--i:8;"></span>
                <span style="--i:17;"></span>
                <span style="--i:11;"></span>
                <span style="--i:12;"></span>
                <span style="--i:14;"></span>
                <span style="--i:2;"></span>
                <span style="--i:9;"></span>
                <span style="--i:15;"></span>
                <span style="--i:4;"></span>
                <span style="--i:19;"></span>
              </div>
              <div class="circle">
                <div class="tea"></div>
              </div>
            </div>
          </div>
          <div class="handle"></div>
        </div>
      </div>
  </section>
  <!-- for screen mobile -->
  <section class="bbug_tea_mb">
    <div class="bbug_tea_banner_mb">
      <div class="bbug_tea_banner_center_mb">
        <div class="banner_item_center_mb container-center">
          <p class="date-center"> </p>
          <div class="year-center-counter">
            <div class="number-one"> </div>
            <div class="number-two"> </div>
            <div class="number-three"> </div>
            <div class="year-next">
              <div class="number-last-top"></div>
              <div class="number-last-bottom"> </div>
            </div>
          </div>
          <div class="txt-show">A NEW BEGINNING</div>
        </div>
        <div class="heart_content_mb">
          <div class="heart_head_phone">
            <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-headphone-tea.png" width="100%" height="auto" alt="head-phone-of-tra">
          </div>
          <div class="heart_plays">
            <div class="heart_pre">
              <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-pre-tea.png" width="100%" height="auto" alt="head-phone-of-tra">
            </div>
            <div class="heart_wave" id="hear_wave_mb">
              <div class="wave"></div>
              <div class="wave"></div>
              <div class="wave"></div>
              <div class="wave"></div>
            </div>
            <div class="heart_next">
              <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-next-tea.png" width="100%" height="auto" alt="head-phone-of-tra">
            </div>
          </div>
          <div class="heart_text_details_mb" id="heart_text_details_mb">

          </div>
        </div>
        <div class="txt-author-mb"><a class="txt-author-details-mb" href="https://bbugsoft.com" target="_blank">@2024
            Nguyen Xuan Tai</a></div>
      </div>
    </div>
    <div class="bbug_tea_lib">
      <h2 class="bbug_tea_lib-title">
        Hành trình quá khứ của <b class="txt-higlight">Nguyễn Thị Trà</b>
        với những bức ảnh đẹp...</h2>
      <div class="bbug_tea_box_images">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_1.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_2.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_3.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_4.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_5.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_6.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_7.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_8.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_9.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_10.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_11.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_12.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_29.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_30.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_31.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_32.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_33.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_34.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_35.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_36.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_37.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_38.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_39.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_40.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_41.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_42.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_43.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_44.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_45.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_46.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_47.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/tea_mb_48.png" title="bbug_love_teabee" width="100%" height="auto" alt="bbug_love_teabee">
      </div>
    </div>
  </section>
  <section class="bbug_tea_heart container_bbug_tea">
    <div class="heart_layout">
      <div class="heart_box" id="heart_bbugtea">
        <span class="heart_text" id="days"></span>
      </div>
      <div class="heart_box" id="heart_bbugtea">
        <span class="heart_text" id="hours"></span>
      </div>
      <div class="heart_box" id="heart_bbugtea">
        <span class="heart_text" id="minutes"></span>
      </div>
      <div class="heart_box" id="heart_bbugtea">
        <span class="heart_text" id="seconds"></span>
      </div>
    </div>

    <div class="heart_content">
      <div class="heart_head_phone">
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-headphone-tea.png" width="100%" height="auto" alt="head-phone-of-tra">
      </div>
      <div class="heart_plays">
        <div class="heart_pre">
          <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-pre-tea.png" width="100%" height="auto" alt="head-phone-of-tra">
        </div>
        <div class="heart_wave">
          <div class="wave"></div>
          <div class="wave"></div>
          <div class="wave"></div>
          <div class="wave"></div>
        </div>
        <div class="heart_next">
          <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-next-tea.png" width="100%" height="auto" alt="head-phone-of-tra">
        </div>
      </div>

      <div class="heart_text_details" id="heart_text_details">
      </div>
      <div class="musics_love_tea">
        <audio id="myAudio" autoplay loop>
          <source src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/musics/Mot_doi_thuong-Nguyen_Thi_Tra.mp3" type="audio/mpeg">
          Trình duyệt của Trà chưa hỗ trợ nhé!!!
        </audio>
      </div>
    </div>
  </section>
  <div class="open-modal-btn" id="bbug_call_love_tea_bee">
    <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/favicon.png" width="100%" height="auto" alt="head-phone-of-tra">
    <span class="ping"></span>
  </div>
  <div class="modal hide">
    <div class="modal__inner">
      <div class="modal__header">
        <h2>Bớt đi vài giờ thao
          thức về Trà</h2>
        <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-logo-heart-of-tra.png" width="100%" height="auto" alt="head-phone-of-tra">
      </div>
      <div class="modal__body">
        <form class="form-container" action="" method="post">
          <div class="input_container">
            <img class="input-icon-phone" src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-input-phone.png" width="100%" height="auto" alt="head-phone-of-tra">
            <input class="form_input" type="number" minlength="10" maxlength="222" name="phone_of_tra" id="phone_of_tra"
              placeholder="Trà đã có bạn trai chưa?">
          </div>
          <div class="input_container">
            <img class="input-icon" src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-input-gift.png" width="100%" height="auto" alt="love-of-tra">
            <textarea class="txt_dream_of_tra" placeholder="Hãy nhập điều ước cho sinh nhật của Trà trong năm nay nhé!"
              type="text" minlength="12" rows="6" cols="50" maxlength="2212" name="txt_dream_of_tra"
              id="txt_dream_of_tra">

							</textarea>
          </div>
          <div class="btn_container_input">
            <div class="btn-tra-no" name="btn-reject-of_tra">
              <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-sm-no.png" width="100%" height="auto" alt="btn-tra-reject">
              KO
            </div>
            <div class="btn-tra-no" name="btn-love-of_tra">
              <img src="<?php echo get_template_directory_uri() ; ?>/assets/teabee/assets/images/icon-sm-okies.png" width="100%" height="auto" alt="btn-tra-love">
              Okie
            </div>
          </div>
        </form>
        <div class="txt-crush-tra">
          “Hãy luôn tươi cười rạng rỡ
          và mong em thật hạnh phúc nhé!
          Bởi anh hiểu rằng em luôn quý trọng và yêu thương gia đình hiện của em...”. Nếu muốn tìm hiểu về tôi thì em
          phát ra tín hiệu cho tôi biết nhé!
        </div>
      </div>
      <div class="modal__footer">
        <button>Đóng</button>
      </div>
    </div>
  </div>

  <script async>
    function playAudio() {
      var audio = document.getElementById("myAudio");
      audio.play();
    }
    //         var observer = new MutationObserver(function(mutations) {
    //     mutations.forEach(function(mutation) {
    //         var addedNodes = Array.from(mutation.addedNodes);
    //         if (addedNodes.some(node => node.classList && node.classList.contains("bbug_tea_banner"))) {
    //             playAudio(); 
    //         }
    //     });
    // });

    // observer.observe(document.body, { childList: true, subtree: true });
    window.addEventListener("wheel", playAudio);

    window.addEventListener("scroll", playAudio);

    window.addEventListener("mousemove", playAudio);
  </script>
  <script async>
    var countDownDate = new Date("Dec 22, 2024 08:17:02").getTime();

    var x = setInterval(function () {
      var now = new Date().getTime();
      var distance = countDownDate - now;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").innerHTML = days + ' ngày';
      document.getElementById("hours").innerHTML = hours + ' giờ';
      document.getElementById("minutes").innerHTML = minutes + ' phút';
      document.getElementById("seconds").innerHTML = seconds + ' giây';

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "CHÚC MỪNG SINH NHẬT NGUYỄN THỊ TRÀ";
      }
    }, 1000);

  </script>
  <script async>
    var contents = [
      "Hành trình quá khứ của Nguyễn Thị Trà với những bức ảnh đẹp...",
      "Một câu chuyện tuyệt vời về tình yêu và sự hy sinh...",
      "Khám phá thế giới mới với những phiêu lưu hấp dẫn...",
    ];

    var currentIndex = 0;

    function createKaraokeEffect(container, content) {
      var words = content.split(" ");
      container.innerHTML = "";

      words.forEach(function (word) {
        var span = document.createElement("span");
        span.textContent = word + " ";
        container.appendChild(span);
      });
    }

    function changeContent() {
      var heartTextDetails = document.getElementById("heart_text_details");
      createKaraokeEffect(heartTextDetails, contents[currentIndex]);

      currentIndex++;
      if (currentIndex >= contents.length) {
        currentIndex = 0;
      }
    }

    document.addEventListener("DOMContentLoaded", function () {
      changeContent();

      setInterval(changeContent, 12000);
    });

  </script>
  <script async>
    var contentsMb = [
      "Hành trình quá khứ của Nguyễn Thị Trà với những bức ảnh đẹp...",
      "Một câu chuyện tuyệt vời về tình yêu và sự hy sinh...",
      "Khám phá thế giới mới với những phiêu lưu hấp dẫn...",
    ];

    var currentIndexMb = 0;

    function createKaraokeEffectMb(container, content) {
      var wordsMb = content.split(" ");
      container.innerHTML = "";

      wordsMb.forEach(function (word) {
        var span = document.createElement("span");
        span.textContent = word + " ";
        container.appendChild(span);
      });
    }

    function changeContentMb() {
      var heartTextDetailsMb = document.getElementById("heart_text_details_mb");
      createKaraokeEffectMb(heartTextDetailsMb, contents[currentIndexMb]);

      currentIndexMb++;
      if (currentIndexMb >= contents.length) {
        currentIndexMb = 0;
      }
    }

    document.addEventListener("DOMContentLoaded", function () {
      changeContentMb();

      setInterval(changeContentMb, 12000);
    });

  </script>
  <script async>
    // Lấy năm hiện tại
    const currentYear = new Date().getFullYear().toString();

    // Lấy năm tiếp theo
    const nextYear = (new Date().getFullYear() + 1).toString();

    // Tính số ngày của năm hiện tại
    const firstDayOfYear = new Date(new Date().getFullYear(), 0, 1);
    const lastDayOfYear = new Date(new Date().getFullYear(), 11, 31);
    const millisecondsPerDay = 1000 * 60 * 60 * 24;
    const numberOfDays = Math.ceil((lastDayOfYear - firstDayOfYear) / millisecondsPerDay);


    const currentDate = new Date();


    const numberOfDaysPassed = Math.ceil((currentDate - firstDayOfYear) / millisecondsPerDay);


    document.querySelectorAll('.banner_item_center .number-one').forEach((element, index) => {
      if (index < currentYear.length) {
        element.innerText = currentYear[index];
      }
    });


    document.querySelectorAll('.banner_item_center_mb .number-one').forEach((element, index) => {
      if (index < currentYear.length) {
        element.innerText = currentYear[index];
      }
    });



    document.querySelectorAll('.banner_item_center .number-two').forEach((element, index) => {
      if (index < currentYear.length - 1) {
        element.innerText = currentYear[index + 1];
      }
    });


    document.querySelectorAll('.banner_item_center_mb .number-two').forEach((element, index) => {
      if (index < currentYear.length - 1) {
        element.innerText = currentYear[index + 1];
      }
    });


    document.querySelectorAll('.banner_item_center .number-three').forEach((element, index) => {
      if (index < currentYear.length - 2) {
        element.innerText = currentYear[index + 2];
      }
    });


    document.querySelectorAll('.banner_item_center_mb .number-three').forEach((element, index) => {
      if (index < currentYear.length - 2) {
        element.innerText = currentYear[index + 2];
      }
    });

    document.querySelector('.banner_item_center .number-last-top').innerText = currentYear[currentYear.length - 1];

    document.querySelector('.banner_item_center_mb .number-last-top').innerText = currentYear[currentYear.length - 1];


    document.querySelector('.banner_item_center .number-last-bottom').innerText = nextYear[nextYear.length - 1];

    document.querySelector('.banner_item_center_mb .number-last-bottom').innerText = nextYear[nextYear.length - 1];

    const dateNowElement = document.querySelector('.banner_item_center .date-center');

    const dateNowElementMb = document.querySelector('.banner_item_center_mb .date-center');

    dateNowElement.innerText = numberOfDaysPassed + ' / ' + numberOfDays;
    dateNowElementMb.innerText = numberOfDaysPassed + ' / ' + numberOfDays;

  </script>
  <script async>
    const modal = document.querySelector('.modal')
    const openModalBtn = document.querySelector('.open-modal-btn')
    const buttonCloseModal = document.querySelector('.modal__footer button')

    function toggleModal() {
      modal.classList.toggle('hide')
    }

    openModalBtn.addEventListener('click', toggleModal)
    buttonCloseModal.addEventListener('click', toggleModal)

    modal.addEventListener('click', (e) => {
      if (e.target == e.currentTarget) toggleModal()
    })
  </script>
  <script async>
    document.addEventListener('DOMContentLoaded', function () {
      var placeholders = [
        "Trà đã có bạn trai chưa??",
        "Nếu đã có rồi thì đừng nhập nhé!!",
        "Trà ước điều ước sinh nhật tới ở dưới nhé!!",
        "Chúc Trà tất cả điều tốt đẹp ở hiện tại và tương lai...",
        
      ];

      var placeholderIndex = 0;
      var placeholderElement = document.getElementById('phone_of_tra');

      setInterval(function () {
        placeholderElement.setAttribute('placeholder', placeholders[placeholderIndex]);
        placeholderIndex = (placeholderIndex + 1) % placeholders.length;
      }, 3000); 
    });
  </script>
  <script async>

    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll('.bbug_tea_box_images img:nth-child(even)').forEach(function (img) {
        img.style.animation = 'marqueeTopMb 82s linear infinite';
      });

      document.querySelectorAll('.bbug_tea_box_images img:nth-child(odd)').forEach(function (img) {
        img.style.animation = 'marqueeBottomMb 82s linear infinite';
      });
    });

  </script>
</body>

</html>