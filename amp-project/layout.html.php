<!DOCTYPE html>
<html ⚡ lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="<?= $description;?>">
    <title><?= $title;?></title>
    <link rel="shortcut icon" href="<?= site_url();?>favicon.webp" type="image/x-icon">
    <link rel="canonical" href="<?php echo $canonical; ?>">
    <meta property="og:title" content="<?= $title;?>">
    <meta property="og:url" content="<?php echo $canonical; ?>">
    <?php if (isset($is_blog)){?><meta property="og:image" content="<?= $p->image;?>">
<?php }else{ ;?><meta property="og:image" content="<?= site_url();?>content/images/aiti-solutions.jpg">
    <?php } ;?><meta property="og:image:width" content="600">
    <meta property="og:image:height" content="314">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
    blockquote,body{position:relative}
    .media,.media-container>div,amp-img img{max-width:100%}*,.mbr-fscr{box-sizing:border-box}
    .display-1,.display-2,.display-4,.display-5,.display-7{font-family:sans-serif}
    .mbr-fscr .mbr-overlay,body,html{min-height:100vh;scroll-behavior:smooth;color:#444}a,a.mbr-iconfont:hover,a:hover{text-decoration:none}body{-webkit-font-smoothing:antialiased}a,blockquote,div,figcaption,h1,h2,h3,h4,h5,h6,li,ol,p,span,ul{font:inherit}
    .b,.mbr-text,a,body{font-style:normal}
    .container,.container-fluid,section{position:relative;word-wrap:break-word}
    .article .lead blockquote,.article .lead ol,.article .lead p,.article .lead pre,.article .lead ul,figure{margin-bottom:0}a{font-weight:400;cursor:pointer}
    .mbr-bold,.table th,.tg-bf,b,strong{font-weight:700}a,a:hover{color:#0084b4}
    .display-1,.display-2,.display-3,.display-4,.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{line-height:1;word-break:break-word;word-wrap:break-word}blockquote{border-left:2px solid;padding:10px 0 10px 20px;border-color:#0084b4;border-width:3px}input:-webkit-autofill,input:-webkit-autofill:active,input:-webkit-autofill:focus,input:-webkit-autofill:hover{transition-delay:9999s;transition-property:background-color,color}#scrollToTop,.is-builder .nodisplay+img[async],.is-builder .nodisplay+img[decoding=async],.is-builder amp-img>a+img[async],.is-builder amp-img>a+img[decoding=async],.is-builder section.horizontal-menu .ampstart-b,.map_aits .google-map[data-state=loading] [data-state-details],.map_aits .map-placeholder,.super-hide,textarea[type=hidden]{display:none}body{font-family:sans-serif;line-height:1.5}section .mbr-background-video,section .mbr-background-video-preview{position:absolute;bottom:0;left:0;right:0;top:0}
    .mbr-row,.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}@media (min-width:576px){.row{margin-right:-15px;margin-left:-15px}}
    .hidden{visibility:hidden}
    .h_nav .builder-sidebar{position:relative;max-height:100vh;z-index:1030;padding:2.5rem;max-width:30rem}
    .mbr-z-index20{z-index:20}
    .text-dark{color:#212529}
    .mbr-black,.text-black{color:#000}
    .mbr-bg-white{background-color:#fff}
    .mbr-bg-black{background-color:#000}
    .aiti-k .mbr-section-b,.aiti-k .mbr-text,.aiti_skill .mbr-section-b,.aiti_skill .mbr-text,.align-left,.tg-left{text-align:left;width:100%}
    .aiti_skill amp-img,.align-center,.tg-center{text-align:center}
    .align-right,.tg-right{text-align:right}
    .mbr-light{font-weight:300}
    .mbr-regular{font-weight:400}
    .mbr-semibold{font-weight:500}
    .b,.b-sm{font-weight:400}
    .mbr-figure iframe,.mbr-figure img{display:block;width:100%}
    .card{background-color:transparent;border:none}
    .card-img{text-align:center;flex-shrink:0}
    .media{margin:0 auto}
    .mbr-figure{-ms-flex-item-align:center;-ms-grid-row-align:center;-webkit-align-self:center;align-self:center}
    .aiti-k amp-img,.card-img img,.mbr-figure img,img.mbr-temp{width:100%}
    .mbr-section-b{margin-left:-.25rem;margin-right:-.25rem;font-size:0}
    .b,.b-md{letter-spacing:2px;margin:.4rem .8rem}
    .map_aits .mbr-row,nav .mbr-section-b{margin-left:0;margin-right:0}
    .b .mbr-iconfont,.b.b-sm .mbr-iconfont{cursor:pointer;margin-right:.5rem}
    .b.b-md .mbr-iconfont{margin-right:.8rem}[type=submit]{-webkit-appearance:none;appearance:none}
    .mbr-fscr{display:flex;display:-webkit-flex;display:-moz-flex;display:-ms-flex;display:-o-flex;align-items:center;-webkit-align-items:center;min-height:0;padding-top:0;padding-bottom:0}amp-img img{max-height:100%}html:not(.is-builder) amp-img>a{position:absolute;top:0;bottom:0;left:0;right:0;z-index:1}
    .is-builder .temp-amp-sizer{position:absolute}
    .is-builder amp-vimeo .temp-amp-sizer,.is-builder amp-youtube .temp-amp-sizer{position:static}
    .is-builder section.horizontal-menu .dropdown-menu{z-index:auto;opacity:1;pointer-events:auto}
    .is-builder section.horizontal-menu .nav-dropdown .link.dropdown-toggle[aria-expanded=true]{margin-right:0;padding:.667em 1em}
    .mbr-section-title{font-style:normal;line-height:1.2}
    .mbr-section-subtitle{line-height:1.3}
    .mbr-text{line-height:1.6}
    .display-1{font-size:3rem}
    .display-2{font-size:2.2rem}
    .display-4{font-size:1rem}
    .display-5{font-size:1.8rem}
    .b{border-width:2px;border-style:solid;white-space:normal;transition-property:background-color,color,border-color,box-shadow;transition-duration:.3s,.3s,.3s,2s;transition-timing-function:ease-in-out;padding:1rem 2rem;border-radius:0;display:inline-flex;align-items:center;justify-content:center;word-break:break-word}
    .b-sm{border:1px solid;letter-spacing:2px;-webkit-transition:.3s ease-in-out;-moz-transition:.3s ease-in-out;transition:.3s ease-in-out;padding:.6rem .8rem;border-radius:0}
    .b-form,.b-md{border-radius:0}
    .b-md{font-weight:600;-webkit-transition:.3s ease-in-out;-moz-transition:.3s ease-in-out;transition:.3s ease-in-out;padding:1rem 2rem}
    .bg-primary{background-color:#0084b4}
    .alert-success,.bg-success{background-color:#0dcd7b}
    .alert-info,.bg-info{background-color:#17a2b8}
    .alert-warning,.bg-warning{background-color:#767676}
    .alert-danger,.bg-danger{background-color:#a0a0a0}
    .b-primary,.b-primary.active,.b-primary:active{background-color:#0084b4;border-color:#0084b4;color:#fff}
    .b-primary.disabled,.b-primary.focus,.b-primary:disabled,.b-primary:focus,.b-primary:hover{color:#fff;background-color:#00688e;border-color:#005f81}
    .b-secondary,.b-secondary.active,.b-secondary:active{background-color:#95a5a6;border-color:#95a5a6;color:#fff}
    .b-secondary.disabled,.b-secondary.focus,.b-secondary:disabled,.b-secondary:focus,.b-secondary:hover{color:#fff;background-color:#7f8c8d;border-color:#7f8c8d}
    .b-info,.b-info.active,.b-info:active{background-color:#17a2b8;border-color:#17a2b8;color:#fff}
    .b-info.disabled,.b-info.focus,.b-info:disabled,.b-info:focus,.b-info:hover{color:#fff;background-color:#138496;border-color:#117a8b}
    .b-success,.b-success.active,.b-success:active{color:#fff;background-color:#198754;border-color:#198754}
    .b-success.focus,.b-success:focus,.b-success:hover{color:#fff;background-color:#157347;border-color:#146c43}
    .b-success.disabled,.b-success:disabled{color:#fff;background-color:#088550;border-color:#088550}
    .b-warning,.b-warning.active,.b-warning:active{background-color:#f0932b;border-color:#f0932b;color:#fff}
    .b-warning.disabled,.b-warning.focus,.b-warning:disabled,.b-warning:focus,.b-warning:hover{color:#fff;background-color:#e67e22;border-color:#e67e22}
    .b-danger,.b-danger.active,.b-danger:active{color:#fff;background-color:#dc3545;border-color:#dc3545}
    .b-danger.focus,.b-danger:focus,.b-danger:hover{color:#fff;background-color:#bb2d3b;border-color:#b02a37}
    .b-danger.disabled,.b-danger:disabled{color:#fff;background-color:#7a7a7a;border-color:#7a7a7a}
    .b-black,.b-black.active,.b-black:active{background-color:#333;border-color:#333;color:#fff}
    .b-black.disabled,.b-black.focus,.b-black:disabled,.b-black:focus,.b-black:hover{color:#fff;background-color:#0d0d0d;border-color:#0d0d0d}
    .b-white,.b-white.active,.b-white:active{background-color:#fff;border-color:#fff}
    .b-white.disabled,.b-white.focus,.b-white:disabled,.b-white:focus,.b-white:hover{background-color:#d9d9d9;border-color:#d9d9d9}
    .b-white,.b-white.active,.b-white.disabled,.b-white.focus,.b-white:active,.b-white:disabled,.b-white:focus,.b-white:hover{color:#333}
    .b-primary-outline,.b-primary-outline.active,.b-primary-outline:active{background:0 0;border-color:#1c6faf;color:#1c6faf}
    .b-primary-outline.disabled,.b-primary-outline.focus,.b-primary-outline:disabled,.b-primary-outline:focus,.b-primary-outline:hover{color:#fff;background-color:#0084b4;border-color:#0084b4}
    .b-secondary-outline.active,.b-secondary-outline:active,.b-secondary-outline{background:0 0;border-color:#00b8e3;color:#00b8e3}
    .b-secondary-outline.disabled,.b-secondary-outline.focus,.b-secondary-outline:disabled,.b-secondary-outline:focus,.b-secondary-outline:hover{color:#fff;background-color:#95a5a6;border-color:#95a5a6}
    .b-info-outline,.b-info-outline.active,.b-info-outline:active{background:0 0;border-color:#2c2cd7;color:#2c2cd7}
    .b-info-outline.disabled,.b-info-outline.focus,.b-info-outline:disabled,.b-info-outline:focus,.b-info-outline:hover{color:#fff;background-color:#17a2b8;border-color:#17a2b8}
    .b-success-outline,.b-success-outline.active,.b-success-outline:active{background:0 0;border-color:#076d41;color:#076d41}
    .b-success-outline.disabled,.b-success-outline.focus,.b-success-outline:disabled,.b-success-outline:focus,.b-success-outline:hover{color:#fff;background-color:#0dcd7b;border-color:#0dcd7b}
    .b-warning-outline,.b-warning-outline.active,.b-warning-outline:active{background:0 0;border-color:#434343;color:#434343}
    .b-warning-outline.disabled,.b-warning-outline.focus,.b-warning-outline:disabled,.b-warning-outline:focus,.b-warning-outline:hover{color:#fff;background-color:#767676;border-color:#767676}
    .b-danger-outline,.b-danger-outline.active,.b-danger-outline:active{background:0 0;border-color:#6d6d6d;color:#6d6d6d}
    .b-danger-outline.disabled,.b-danger-outline.focus,.b-danger-outline:disabled,.b-danger-outline:focus,.b-danger-outline:hover{color:#fff;background-color:#a0a0a0;border-color:#a0a0a0}
    .b-black-outline,.b-black-outline.active,.b-black-outline:active{background:0 0;border-color:#000;color:#000}
    .b-black-outline.disabled,.b-black-outline.focus,.b-black-outline:disabled,.b-black-outline:focus,.b-black-outline:hover{color:#fff;background-color:#333;border-color:#333}
    .b-white-outline,.b-white-outline.active,.b-white-outline:active{background:0 0;border-color:#fff;color:#fff}
    .b-white-outline.focus,.b-white-outline:focus,.b-white-outline:hover{color:#333;background-color:#fff;border-color:#fff}
    .aiti_skill,.h_nav .headerbar.sticky-nav,.mbr-tetek{border-bottom:1px solid #dee2e6b2}
    .mbr-foot,.mbr-tetek{border-top:1px solid #dee2e6b2}
    .text-primary{color:#0084b4}
    .text-secondary{color:#95a5a6}
    .text-success{color:#0dcd7b}
    .text-info{color:#17a2b8}
    .text-muted{color:#6c757d}
    .map_aits h4,.text-warning{color:#767676}
    .h_nav .brand-name,.text-danger{color:#dc3545}
    .mbr-plan-header.bg-info .mbr-plan-price-desc,.mbr-plan-header.bg-info .mbr-plan-subtitle,.text-white{color:#fff}a.text-primary:focus,a.text-primary:hover{color:#1c6faf}a.text-secondary:focus,a.text-secondary:hover{color:#00b8e3}a.text-success:focus,a.text-success:hover{color:#076d41}a.text-info:focus,a.text-info:hover{color:#2c2cd7}a.text-warning:focus,a.text-warning:hover{color:#434343}a.text-danger:focus,a.text-danger:hover{color:#bd2130}a.text-white:focus,a.text-white:hover{color:#b3b3b3}a.text-black:focus,a.text-black:hover{color:#4d4d4d}
    .b-form:hover{cursor:pointer}
    .mbr-plan-header.bg-primary .mbr-plan-price-desc,.mbr-plan-header.bg-primary .mbr-plan-subtitle{color:#feffff}
    .mbr-plan-header.bg-success .mbr-plan-price-desc,.mbr-plan-header.bg-success .mbr-plan-subtitle{color:#acfad9}
    .mbr-plan-header.bg-warning .mbr-plan-price-desc,.mbr-plan-header.bg-warning .mbr-plan-subtitle{color:#b6b6b6}
    .mbr-plan-header.bg-danger .mbr-plan-price-desc,.mbr-plan-header.bg-danger .mbr-plan-subtitle{color:#e0e0e0}blockquote,ol,pre,ul{margin-bottom:0;margin-top:0}pre{background:#f4f4f4;padding:10px 24px;white-space:pre-wrap}
    .inactive{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;pointer-events:none;-webkit-user-drag:none}body,html{height:auto}
    .popover-content ul.show{min-height:155px}
    .mbr-container{max-width:800px;padding:0 10px;margin:0 auto;position:relative}
    .aiti-k,.aiti_skill{padding-top:30px;padding-bottom:30px}
    .aiti_skill .text-block,h1,h2,h3{margin:auto}h1,h3,p{padding:10px 0;margin-bottom:15px}blockquote,li,p{color:#15181b;letter-spacing:.5px;line-height:1.7}
    .container{padding-right:20px;padding-left:20px;width:100%;margin-right:auto;margin-left:auto}@media (max-width:767px){.align-center{text-align:center}
    .align-left,.align-right,.mbr-section-b,.mbr-section-title{text-align:left}
    .container{max-width:540px}
    .align-center{text-align:center}
    .mbr-col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;padding-right:5px;padding-left:5px}
    .mbr-row{margin:0}}@media (min-width:768px){.row{margin-right:-15px;margin-left:-15px}
    .container{max-width:720px}
    .mbr-col-md-10,.mbr-col-md-12,.mbr-col-md-3,.mbr-col-md-4,.mbr-col-md-5,.mbr-col-md-6,.mbr-col-md-7,.mbr-col-md-8{padding-right:5px;padding-left:5px}
    .mbr-col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}
    .mbr-col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}
    .mbr-col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}
    .mbr-col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
    .mbr-col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}
    .mbr-col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}
    .mbr-col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}
    .mbr-col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width:992px){.row{margin-right:-15px;margin-left:-15px}
    .container{max-width:960px}
    .mbr-col-lg-10,.mbr-col-lg-12,.mbr-col-lg-2,.mbr-col-lg-3,.mbr-col-lg-4,.mbr-col-lg-5,.mbr-col-lg-6,.mbr-col-lg-8{padding-right:15px;padding-left:15px}
    .mbr-col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}
    .mbr-col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}
    .mbr-col-lg-4{-ms-flex:0 0 33.33%;flex:0 0 33.33%;max-width:33.33%}
    .mbr-col-lg-5{-ms-flex:0 0 41.666%;flex:0 0 41.666%;max-width:41.666%}
    .mbr-col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
    .mbr-col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}
    .mbr-col-lg-10{-ms-flex:0 0 83.3333%;flex:0 0 83.3333%;max-width:83.3333%}
    .mbr-col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}
    .mbr-jc-center{justify-content:center}
    .mt-rem{margin-top:7rem}
    .mt-2{margin-top:.5rem}
    .mt-3{margin-top:1rem}
    .mt-4{margin-top:1.5rem}
    .mt-5{margin-top:3rem}
    .mr-2{margin-right:.5rem}
    .mr-3{margin-right:1rem}
    .mr-4{margin-right:1.5rem}
    .mr-5{margin-right:3rem}
    .ml-2{margin-left:.5rem}
    .ml-3{margin-left:1rem}
    .ml-4{margin-left:1.5rem}
    .ml-5{margin-left:3rem}
    .mb-2{margin-bottom:.5rem}
    .mb-3{margin-bottom:1rem}
    .mb-4{margin-bottom:1.5rem}
    .mb-5{margin-bottom:3rem}
    .pt-rem{padding-top:7rem}
    .pt-2{padding-top:.5rem}
    .pt-3{padding-top:1rem}
    .pt-4{padding-top:1.5rem}
    .pt-5{padding-top:3rem}
    .pr-2{padding-right:.5rem}
    .pr-3{padding-right:1rem}
    .pr-4{padding-right:1.5rem}
    .pr-5{padding-right:3rem}
    .pl-2{padding-left:.5rem}
    .pl-3{padding-left:1rem}
    .pl-4{padding-left:1.5rem}
    .pl-5{padding-left:3rem}
    .pb-2{padding-bottom:.5rem}
    .pb-3{padding-bottom:1rem}
    .pb-4{padding-bottom:1.5rem}
    .pb-5{padding-bottom:3rem}@media (min-width:1200px){.row{margin-right:-15px;margin-left:-15px}
    .container{max-width:1140px}
    .mbr-col-xl-7,.mbr-col-xl-8{padding-left:15px;padding-right:15px}
    .mbr-col-xl-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}
    .mbr-col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}}section.sidebar-open:before{content:'';position:fixed;top:0;bottom:0;right:0;left:0;background-color:rgba(0,0,0,.2);z-index:1040}
    .h_nav .close-sidebar span,.h_nav .hamburger span{width:30px;height:2px;border-right:5px;background-color:#a0a0a0}p{margin-top:0}amp-sidebar {--story-page-vh: 1vh;position: fixed;top: 0;max-height: 100vh;max-height: 100vh;max-width: 80vw;background:#fff;min-width: 45px;outline: none;overflow-x: hidden;overflow-y: auto;z-index: 2147483647;-webkit-overflow-scrolling: touch;border-left:1px solid #dee2e6b2;will-change: transform;}
    .h_nav amp-sidebar{min-width:260px;z-index:1050}
    .h_nav amp-sidebar.open:after{content:'';position:absolute;top:0;left:0;bottom:0;right:0;background-color:red}
    .h_nav .open{transform:translateX(0);display:block}
    .h_nav .builder-sidebar{position:relative;max-height:100vh;z-index:1030;padding:2.5rem;width:40vw}
    .amp-sidebar-mask,.h_nav .headerbar{background:#ffffff94;backdrop-filter:blur(5px)}
    .h_nav .headerbar{display:flex;flex-direction:column;justify-content:center;padding:.5rem 1rem;min-height:70px;align-items:center}
    .aiti-k,.aiti_skill,.map_aits,.mbr-foot,.mbr-tetek{background-color:#fff}
    .h_nav .headerbar.sticky-nav{position:fixed;z-index:1000;width:100%}
    .h_nav button.s-h{position:fixed}
    .h_nav .brand{display:flex;align-items:center;align-self:flex-start;padding-right:30px}
    .h_nav .brand p{margin:0;padding:0}
    .h_nav .sidebar{padding:1rem 0;margin:0}
    .h_nav .sidebar>li{list-style:none;display:flex;flex-direction:column}
    .h_nav .sidebar a{display:block;text-decoration:none;margin-bottom:10px}
    .h_nav .close-sidebar{width:30px;height:30px;position:relative;cursor:pointer;background-color:transparent;border:none}
    .h_nav .close-sidebar span{position:absolute;right:0}
    .h_nav .close-sidebar span:first-child{transform:rotate(45deg)}
    .h_nav .close-sidebar span:nth-child(2){transform:rotate(-45deg)}@media (min-width:992px){.h_nav .brand-name{min-width:8rem}
    .h_nav .builder-sidebar{margin-left:auto}
    .h_nav .builder-sidebar .sidebar li{flex-direction:row;flex-wrap:wrap}
    .h_nav .builder-sidebar .sidebar li a{padding:.5rem;margin:0}
    .h_nav .builder-overlay{display:none}}
    .h_nav .hamburger{position:absolute;top:25px;right:20px;margin-left:auto;width:30px;height:20px;background:0 0;border:none;cursor:pointer;z-index:1001}@media (min-width:768px){.h_nav .hamburger{top:calc(.5rem + 55 * .5px - 10px);z-index:1003}}
    .h_nav .hamburger:focus{outline:0}
    .h_nav .hamburger span{position:absolute;right:0}
    .table td,.table th,.table tr:nth-child(2n) td{background-color:transparant}
    .h_nav .hamburger span:first-child{top:0;transition:.2s}
    .h_nav .hamburger span:nth-child(2),.h_nav .hamburger span:nth-child(3){top:8px;transition:.15s}
    .h_nav .hamburger span:nth-child(4){top:16px;transition:.2s}
    .h_nav amp-img{height:55px;width:55px;margin-right:1rem;display:flex;align-items:center}@media (max-width:768px){.display-1{font-size:3.6rem;font-size:calc(2.225rem + (4.5 - 2.225) * ((100vw - 20rem)/ (48 - 20)));line-height:calc(1.4 * (2.225rem + (4.5 - 2.225) * ((100vw - 20rem)/ (48 - 20))))}
    .display-2{font-size:1.76rem;font-size:calc(1.42rem + (2.2 - 1.42) * ((100vw - 20rem)/ (48 - 20)));line-height:calc(1.4 * (1.42rem + (2.2 - 1.42) * ((100vw - 20rem)/ (48 - 20))))}
    .display-4{font-size:.72rem;font-size:calc(.965rem + (.9 - .965) * ((100vw - 20rem)/ (48 - 20)));line-height:calc(1.4 * (.965rem + (.9 - .965) * ((100vw - 20rem)/ (48 - 20))))}
    .display-5{font-size:1.44rem;font-size:calc(1.28rem + (1.8 - 1.28) * ((100vw - 20rem)/ (48 - 20)));line-height:calc(1.4 * (1.28rem + (1.8 - 1.28) * ((100vw - 20rem)/ (48 - 20))))}
    .h_nav amp-img{max-height:55px;max-width:55px}}
    .mbr-h {background:#fff}
    .aiti-k .card{margin-bottom:20px;position:relative;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-clip:border-box;border-radius:0;width:100%;min-height:1px}
    .aiti-k .card .b{margin:.2rem}
    .aiti-k .card-title{margin:0}
    .aiti-k .mbr-text{color:#232323}
    .aiti-k .card-box{padding-top:2rem}
    .mbr-tetek{padding-top:75px;padding-bottom:75px;color:#444}
    .mbr-tetek .mbr-row{margin:0 15px}@media (max-width:991px){.media,.media-size-item{width:auto}
    .mbr-figure{width:100%}
    .is-builder section.horizontal-menu .navbar-toggler{display:block}
    .mbr-tetek .card{margin-bottom:20px}}
    .mbr-tetek .mbr-section-title{margin:0;padding-bottom:1rem}
    .mbr-tetek .mbr-text{margin:0;text-align:left}
    .map_aits{padding-top:0;padding-bottom:0}
    .map_aits .mbr-section-title{padding-bottom:3rem}
    .map_aits .google-map{height:25rem;position:relative;width:100%}
    .map_aits .google-map iframe{height:100%;width:100%}
    .map_aits .google-map [data-state-details]{color:#6b6763;font-family:Montserrat;height:1.5em;margin-top:-.75em;padding-left:1.25rem;padding-right:1.25rem;position:absolute;text-align:center;top:50%;width:100%}
    .map_aits .google-map[data-state]{background:#e9e5dc}
    .map_aits h4{padding-top:5rem;text-align:center}
    .mbr-foot{padding-top: 0.5rem;padding-bottom: 0.5rem;bottom: 0;left: 0;right: 0;}
    .mbr-foot p{margin:0;color:#444}::-webkit-scrollbar{width:4px;height:4px;box-shadow:0 .125rem .25rem rgba(0,0,0,.075);z-index:-5}::-webkit-scrollbar-track{background:#f1f1f1}::-webkit-scrollbar-thumb{background:#888}::-webkit-scrollbar-thumb:hover{background:#555}
    .shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)}
    .radius{border-radius:.55rem}
    .mt-rem{margin-top:7rem}
    .statis{background-image:url(<?= site_url(); ?>assets/img/freelance-website-developer.webp);height:300px;background-attachment:fixed;background-position:top center;background-repeat:no-repeat;z-index:999}
    .plx{background-image:url(<?= site_url(); ?>themes/amp-project/assets/images/afandev.webp);height:500px;background-attachment:fixed;background-position:top center;background-repeat:no-repeat;z-index:1000}
    .artl,.hr{overflow:hidden}
    .mr-top{margin-top:5rem}
    .breadcrumbs{margin-top:10px}
    .breadcrumbs ul ol{list-style-type:decimal;color:#44444470}
    .breadcrumbs ul li,ol li{display:inline;color:#44444470}
    .breadcrumbs,a,a:hover{color:#44444470}
    .mt-2{margin-top:.5rem}
    .mt-3{margin-top:1rem}
    .mt-4{margin-top:1.5rem}
    .mt-5{margin-top:3rem}
    .mr-2{margin-right:.5rem}
    .mr-3{margin-right:1rem}
    .mr-4{margin-right:1.5rem}
    .mr-5{margin-right:3rem}
    .ml-2{margin-left:.5rem}
    .ml-3{margin-left:1rem}
    .ml-4{margin-left:1.5rem}
    .ml-5{margin-left:3rem}
    .mb-2{margin-bottom:.5rem}
    .mb-3{margin-bottom:1rem}
    .mb-4{margin-bottom:1.5rem}
    .mb-5{margin-bottom:3rem}
    .artl{padding:60px 0}
    .konten{padding:30px;border:1px solid #dee2e6b2}
    .hr{display:block;unicode-bidi:isolate;margin-block-start:0;margin-block-end:0;margin-inline-start:auto;margin-inline-end:auto;border:.3px solid #dee2e6b2;margin:30px}input[type=email],input[type=password],input[type=text],textarea{display:block;width:100%;background-color:#fff;color:#444;border:1px solid #dee2e6b2;font:inherit;padding:.8em;line-height:1;border-radius:0}#b{position:fixed;bottom:10px;right:10px;z-index:99;font-size:14px;border:none;outline:0;background-color:transparent;color:#44444470;opacity:.29;cursor:pointer;padding:15px;border-radius:0}#b:hover{color:red;opacity:1;text-shadow:0 .5rem 1rem rgb(0 0 0 / 15%)}table{border-collapse:collapse}table{width:100%;margin-bottom:1rem}@media (prefers-color-scheme:light){table{color:#212529}}@media (prefers-color-scheme:dark){table{color:#f8f9fa}}table td,table th{padding:.75rem;vertical-align:top}@media (prefers-color-scheme:light){table td,table th{border-top:1px solid #dee2e6}}@media (prefers-color-scheme:dark){table td,table th{border-top:1px solid #343a40}}table thead th{vertical-align:bottom}@media (prefers-color-scheme:light){table thead th{border-bottom:2px solid #dee2e6}}@media (prefers-color-scheme:dark){table thead th{border-bottom:2px solid #343a40}}@media (prefers-color-scheme:light){table tbody+tbody{border-top:2px solid #dee2e6}}@media (prefers-color-scheme:dark){table tbody+tbody{border-top:2px solid #343a40}}@media (prefers-color-scheme:light){table.bordered{border:1px solid #dee2e6}}@media (prefers-color-scheme:dark){table.bordered{border:1px solid #343a40}}@media (prefers-color-scheme:light){table.bordered td,table.bordered th{border:1px solid #dee2e6}}@media (prefers-color-scheme:dark){table.bordered td,table.bordered th{border:1px solid #343a40}}table.bordered thead td,table.bordered thead th{border-bottom-width:2px}table.borderless tbody+tbody,table.borderless td,table.borderless th,table.borderless thead th{border:0}@media (prefers-color-scheme:light){table.striped tbody tr:nth-of-type(odd){background:rgba(0,0,0,.05)}}@media (prefers-color-scheme:dark){table.striped tbody tr:nth-of-type(odd){background:rgba(0,0,0,.01)}}@media (prefers-color-scheme:light){table.hover tbody tr:hover{color:#212529;background:rgba(0,0,0,.075)}}@media (prefers-color-scheme:dark){table.hover tbody tr:hover{color:#f8f9fa;background:rgba(222,226,230,.075)}}
    .table-primary,.table-primary>td,.table-primary>th{background:#b8ddea}
    .table-primary tbody+tbody,.table-primary td,.table-primary th,.table-primary thead th{border-color:#7abfd8}
    .table-hvr .table-primary:hover{background:#a4d4e4}
    .table-hvr .table-primary:hover>td,.table-hvr .table-primary:hover>th{background:#a4d4e4}
    .table-secondary,.table-secondary>td,.table-secondary>th{background:#d6d8db}
    .table-secondary tbody+tbody,.table-secondary td,.table-secondary th,.table-secondary thead th{border-color:#b3b7bb}
    .table-hvr .table-secondary:hover{background:#c8cbcf}
    .table-hvr .table-secondary:hover>td,.table-hvr .table-secondary:hover>th{background:#c8cbcf}
    .table-success,.table-success>td,.table-success>th{background:#c3e6cb}
    .table-success tbody+tbody,.table-success td,.table-success th,.table-success thead th{border-color:#8fd19e}
    .table-hvr .table-success:hover{background:#b1dfbb}
    .table-hvr .table-success:hover>td,.table-hvr .table-success:hover>th{background:#b1dfbb}
    .table-info,.table-info>td,.table-info>th{background:#bee5eb}
    .table-info tbody+tbody,.table-info td,.table-info th,.table-info thead th{border-color:#86cfda}
    .table-hvr .table-info:hover{background:#abdde5}
    .table-hvr .table-info:hover>td,.table-hvr .table-info:hover>th{background:#abdde5}
    .table-warning,.table-warning>td,.table-warning>th{background:#fcfcf5}
    .table-warning tbody+tbody,.table-warning td,.table-warning th,.table-warning thead th{border-color:#fafaed}
    .table-hvr .table-warning:hover{background:#f6f6e1}
    .table-hvr .table-warning:hover>td,.table-hvr .table-warning:hover>th{background:#f6f6e1}
    .table-danger,.table-danger>td,.table-danger>th{background:#f5c6cb}
    .table-danger tbody+tbody,.table-danger td,.table-danger th,.table-danger thead th{border-color:#ed969e}
    .table-hvr .table-danger:hover{background:#f1b0b7}
    .table-hvr .table-danger:hover>td,.table-hvr .table-danger:hover>th{background:#f1b0b7}
    .table-light,.table-light>td,.table-light>th{background:#f6f7f8}
    .table-light tbody+tbody,.table-light td,.table-light th,.table-light thead th{border-color:#eef0f2}
    .table-hvr .table-light:hover{background:#e8eaed}
    .table-hvr .table-light:hover>td,.table-hvr .table-light:hover>th{background:#e8eaed}
    .table-dark,.table-dark>td,.table-dark>th{background:#c1c2c3}
    .table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#8c8e90}
    .table-hvr .table-dark:hover{background:#b4b5b6}
    .table-hvr .table-dark:hover>td,.table-hvr .table-dark:hover>th{background:#b4b5b6}@media (prefers-color-scheme:light){.table-active,.table-active>td,.table-active>th{background:rgba(0,0,0,.075)}
    .table-hvr .table-active:hover{background:rgba(0,0,0,.075)}
    .table-hvr .table-active:hover>td,.table-hvr .table-active:hover>th{background:rgba(0,0,0,.075)}}@media (prefers-color-scheme:dark){.table-active,.table-active>td,.table-active>th{background:rgba(222,226,230,.075)}
    .table-hvr .table-active:hover{background:rgba(207,213,219,.075)}
    .table-hvr .table-active:hover>td,.table-hvr .table-active:hover>th{background:rgba(207,213,219,.075)}}@media (max-width:575.98px){.table-responsive-sm{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}
    .table-responsive-sm>.table-brd{border:0}}@media (max-width:767.98px){.table-responsive-md{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}
    .table-responsive-md>.table-brd{border:0}}@media (max-width:991.98px){.table-responsive-lg{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}
    .table-responsive-lg>.table-brd{border:0}}@media (max-width:1199.98px){.table-responsive-xl{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}
    .table-responsive-xl>.table-brd{border:0}}
    .table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}
    .table-responsive>.table-brd{border:0}table.small td,table.small th{padding:.3rem}
    .zonk{font-family:sans-serif;font-weight:700;line-height:1.2em;color:#20202a;font-size:25vw;float:center;line-height:1em;margin:0 0 40px;color:#ebebf0}#project{padding-top:75px;padding-bottom:75px}#features10-k{background:#e2f5fa;padding-top:75px;padding-bottom:75px}
    .f_l{fill:#fff}
    .f_d{fill:#6c757d}<?php if (isset($is_front)){?>svg{width:12px;height:12px;fill:#fff;margin-right: 0.5rem}
    .top svg{width:35px;height:35px;fill:#444444b2;position: center;}<?php }else{ ;?>svg{width:12px;height:12px;fill:#6c757d;right: 0.5rem}
    .top svg{width:35px;height:35px;fill:#444444b2;position: center;}<?php } ;?>.h_svg{align-items: center;display:flex;grid-column: 1/-1;justify-content:center;padding-top:60px;padding-bottom:60px;transform: translateY(15.178px);will-change: transform;}
    .lsvg{fill:#6c757d;height:300px;width:300px;}
    .l90{line-height:90%}
    .atr_img{width:48px;height:48px;margin:0;border-radius:50%;background:#666;margin-right:.5rem;float:left;}
    </style>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-font" src="https://cdn.ampproject.org/v0/amp-font-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>   
    <script type="application/ld+json">{"@context":"http://schema.org","@type":"WebSite","mainEntityOfPage":{"@type":"WebPage","@id":"<?php echo $canonical;?>"},"headline":"<?= $title;?>","image":{"@type":"ImageObject","url":"<?= $p->image;?>","height":800,"width":800},"datePublished":"<?= format_date($p->date);?>","dateModified":"<?= format_date($p->date);?>","author":{"@type":"Person","name":"<?= $p->authorName;?>"},"publisher":{"@type":"Organization","name":"<?= $title;?>","logo":{"@type":"ImageObject","url":"<?= site_url();?>favicon.webp","width":255,"height":255}},"description":"<?= $description;?>"}</script>
</head>
<?php if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $url = site_url() . 'search/' . remove_accent($search);
        header("Location: $url"); };?>
<body>
    <amp-sidebar id="sidebar" class="h_nav" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar text-danger display-5" role="button" title="Tutup">&times;</button>
            <div class="sidebar text-dark" data-app-modern-menu="true"><a class="text-black display-5" href="<?= site_url();?>#home">Home</a>
                <a class="text-black display-5" href="<?= site_url();?>#about">About Us</a>
                <a class="text-black display-5" href="<?= site_url();?>#project">Project</a>
                <a class="text-black display-5" href="<?= site_url();?>#contact">Contact Us</a>
            </div>
        </div>
    </amp-sidebar>
    <div  id="home"></div>
    <div  id="top"></div>
    <section class="menu h_nav" id="menu1-h">
        <nav class="headerbar sticky-nav">
            <div class="brand">
                <span class="brand-logo">
                    <a href="<?= site_url();?>" style="z-index:1003"><amp-img src="<?= site_url();?>themes/amp-project/assets/images/logoicon2-110x110.webp"
                        layout="responsive" width="35" height="35" alt="<?= $title;?>">
                    </amp-img></a>
                </span>
                <p class="mbr-dark mbr-fonts-style display-3">./AfanDev</p>
            </div>
        </nav>
        <button on="tap:sidebar.toggle" class="ampstart-b hamburger s-h" role="button" title="Menu">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
    </section>
    <?php if (isset($is_front)):?>
    <section class="header mbr-h mbr-fscr h_svg">
        <div class="container">
            <div class="mbr-row mbr-jc-center">
                <div class="mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6">
                <h1 class="mbr-section-title mbr-fonts-style align-left mbr-bold mt-3 display-2">Hi,<br>I&#039;am Afan,</h1>
                <h2 class="mbr-section-title mbr-fonts-style align-left mbr-bold display-1">Full Stack Web Developer</h2>
                </div>
                <div class="mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 align-center">
                    <svg class="lsvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <defs>
                            <linearGradient id="gradient">
                            <stop offset="5%" stop-color="#f6e58d" />
                            <stop offset="95" stop-color="#e67e22" />
                            </linearGradient>
                        </defs><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path fill="url(#gradient)" d="M97.22,96.21c10.36-10.65,16-17.12,16-21.9,0-2.76-1.92-5.51-3.83-7.42A14.81,14.81,0,0,0,101,64.05c-8.48,0-20.92,8.79-35.84,25.69C23.68,137,2.51,182.81,3.37,250.34s17.47,117,54.06,161.87C76.22,435.86,90.62,448,100.9,448a13.55,13.55,0,0,0,8.37-3.84c1.91-2.76,3.81-5.63,3.81-8.38,0-5.63-3.86-12.2-13.2-20.55-44.45-42.33-67.32-97-67.48-165C32.25,188.8,54,137.83,97.22,96.21ZM239.47,420.07c.58.37.91.55.91.55Zm93.79.55.17-.13C333.24,420.62,333.17,420.67,333.26,420.62Zm3.13-158.18c-16.24-4.15,50.41-82.89-68.05-177.17,0,0,15.54,49.38-62.83,159.57-74.27,104.35,23.46,168.73,34,175.23-6.73-4.35-47.4-35.7,9.55-128.64,11-18.3,25.53-34.87,43.5-72.16,0,0,15.91,22.45,7.6,71.13C287.7,364,354,342.91,355,343.94c22.75,26.78-17.72,73.51-21.58,76.55,5.49-3.65,117.71-78,33-188.1C360.43,238.4,352.62,266.59,336.39,262.44ZM510.88,89.69C496,72.79,483.52,64,475,64a14.81,14.81,0,0,0-8.39,2.84c-1.91,1.91-3.83,4.66-3.83,7.42,0,4.78,5.6,11.26,16,21.9,43.23,41.61,65,92.59,64.82,154.06-.16,68-23,122.63-67.48,165-9.34,8.35-13.18,14.92-13.2,20.55,0,2.75,1.9,5.62,3.81,8.38A13.61,13.61,0,0,0,475.1,448c10.28,0,24.68-12.13,43.47-35.79,36.59-44.85,53.14-94.38,54.06-161.87S552.32,137,510.88,89.69Z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="about mbr-section mbr-tetek" id="about">
        <div class="container">
            <div class="mbr-row mbr-jc-left">
                <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6">
                    <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold text-dark display-5">
                        About Me
                    </h3>
                    <p class="mbr-text mbr-fonts-style align-left text-dark display-4">
                        <?= $description; ?>
                    </p>
                </div>
                <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6">
                    <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold text-dark display-5">
                        Work Experiences
                    </h3>
                    <p class="mbr-text mbr-fonts-style align-left text-dark display-4">
                        Freelance Website Developer, show my Work Experiences click here 
                        <div class="mbr-section-b align-left">
                            <a class="b b-sm b-warning shadow display-4"
                            href="<?= site_url();?>freelance-website-developer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M326.612 185.391c59.747 59.809 58.927 155.698.36 214.59-.11.12-.24.25-.36.37l-67.2 67.2c-59.27 59.27-155.699 59.262-214.96 0-59.27-59.26-59.27-155.7 0-214.96l37.106-37.106c9.84-9.84 26.786-3.3 27.294 10.606.648 17.722 3.826 35.527 9.69 52.721 1.986 5.822.567 12.262-3.783 16.612l-13.087 13.087c-28.026 28.026-28.905 73.66-1.155 101.96 28.024 28.579 74.086 28.749 102.325.51l67.2-67.19c28.191-28.191 28.073-73.757 0-101.83-3.701-3.694-7.429-6.564-10.341-8.569a16.037 16.037 0 0 1-6.947-12.606c-.396-10.567 3.348-21.456 11.698-29.806l21.054-21.055c5.521-5.521 14.182-6.199 20.584-1.731a152.482 152.482 0 0 1 20.522 17.197zM467.547 44.449c-59.261-59.262-155.69-59.27-214.96 0l-67.2 67.2c-.12.12-.25.25-.36.37-58.566 58.892-59.387 154.781.36 214.59a152.454 152.454 0 0 0 20.521 17.196c6.402 4.468 15.064 3.789 20.584-1.731l21.054-21.055c8.35-8.35 12.094-19.239 11.698-29.806a16.037 16.037 0 0 0-6.947-12.606c-2.912-2.005-6.64-4.875-10.341-8.569-28.073-28.073-28.191-73.639 0-101.83l67.2-67.19c28.239-28.239 74.3-28.069 102.325.51 27.75 28.3 26.872 73.934-1.155 101.96l-13.087 13.087c-4.35 4.35-5.769 10.79-3.783 16.612 5.864 17.194 9.042 34.999 9.69 52.721.509 13.906 17.454 20.446 27.294 10.606l37.106-37.106c59.271-59.259 59.271-155.699.001-214.959z"/></svg>Read More
                            </a>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="features10 aiti_skill pt-4 pb-4" id="features10-k">
        <div class="container">
            <div class="mbr-row mbr-jc-center border-b">
                <div class="mbr-col-sm-12 mbr-col-md-6">
                    <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold text-dark display-5">
                        Basic Information
                    </h3>
                    <div class="table-responsive-sm">
                        <table class="table borderless text-black align-left" style="width:100%">
                            <tr>
                                <th>Name</th>
                                <td>Afan</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>19 Mei 1985, Cimanggis</td>
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <td>afanhermawan019@gmail.com</td>
                            </tr>
                            <tr>
                                <th>Telp/WA</th>
                                <td>(+62)85927414777</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>Jl Danu Aji, Melayu Tenggarong, Kutai Kartanegara Indonesia</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="text-block mbr-col-sm-12 mbr-col-md-6">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold text-dark display-5">My
                                Skills</h3>
                            <h4> Frontend Web</h4>
                            <button class="b b-warning shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>HTML 5</button>
                            <button class="b b-primary shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"/></svg></i>CSS 3</button>
                            <button class="b b-success shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M0 32v448h448V32H0zm243.8 349.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/></svg>JavaScript</button>
                            <button class="b b-info shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M333.5,201.4c0-22.1-15.6-34.3-43-34.3h-50.4v71.2h42.5C315.4,238.2,333.5,225,333.5,201.4z M517,188.6 c-9.5-30.9-10.9-68.8-9.8-98.1c1.1-30.5-22.7-58.5-54.7-58.5H123.7c-32.1,0-55.8,28.1-54.7,58.5c1,29.3-0.3,67.2-9.8,98.1 c-9.6,31-25.7,50.6-52.2,53.1v28.5c26.4,2.5,42.6,22.1,52.2,53.1c9.5,30.9,10.9,68.8,9.8,98.1c-1.1,30.5,22.7,58.5,54.7,58.5h328.7 c32.1,0,55.8-28.1,54.7-58.5c-1-29.3,0.3-67.2,9.8-98.1c9.6-31,25.7-50.6,52.1-53.1v-28.5C542.7,239.2,526.5,219.6,517,188.6z M300.2,375.1h-97.9V136.8h97.4c43.3,0,71.7,23.4,71.7,59.4c0,25.3-19.1,47.9-43.5,51.8v1.3c33.2,3.6,55.5,26.6,55.5,58.3 C383.4,349.7,352.1,375.1,300.2,375.1z M290.2,266.4h-50.1v78.4h52.3c34.2,0,52.3-13.7,52.3-39.5 C344.7,279.6,326.1,266.4,290.2,266.4z"/></svg>Bootstrap</button>
                            <button class="b b-danger shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 508c-6.7 0-13.5-1.8-19.4-5.2l-61.7-36.5c-9.2-5.2-4.7-7-1.7-8 12.3-4.3 14.8-5.2 27.9-12.7 1.4-.8 3.2-.5 4.6.4l47.4 28.1c1.7 1 4.1 1 5.7 0l184.7-106.6c1.7-1 2.8-3 2.8-5V149.3c0-2.1-1.1-4-2.9-5.1L226.8 37.7c-1.7-1-4-1-5.7 0L36.6 144.3c-1.8 1-2.9 3-2.9 5.1v213.1c0 2 1.1 4 2.9 4.9l50.6 29.2c27.5 13.7 44.3-2.4 44.3-18.7V167.5c0-3 2.4-5.3 5.4-5.3h23.4c2.9 0 5.4 2.3 5.4 5.3V378c0 36.6-20 57.6-54.7 57.6-10.7 0-19.1 0-42.5-11.6l-48.4-27.9C8.1 389.2.7 376.3.7 362.4V149.3c0-13.8 7.4-26.8 19.4-33.7L204.6 9c11.7-6.6 27.2-6.6 38.8 0l184.7 106.7c12 6.9 19.4 19.8 19.4 33.7v213.1c0 13.8-7.4 26.7-19.4 33.7L243.4 502.8c-5.9 3.4-12.6 5.2-19.4 5.2zm149.1-210.1c0-39.9-27-50.5-83.7-58-57.4-7.6-63.2-11.5-63.2-24.9 0-11.1 4.9-25.9 47.4-25.9 37.9 0 51.9 8.2 57.7 33.8.5 2.4 2.7 4.2 5.2 4.2h24c1.5 0 2.9-.6 3.9-1.7s1.5-2.6 1.4-4.1c-3.7-44.1-33-64.6-92.2-64.6-52.7 0-84.1 22.2-84.1 59.5 0 40.4 31.3 51.6 81.8 56.6 60.5 5.9 65.2 14.8 65.2 26.7 0 20.6-16.6 29.4-55.5 29.4-48.9 0-59.6-12.3-63.2-36.6-.4-2.6-2.6-4.5-5.3-4.5h-23.9c-3 0-5.3 2.4-5.3 5.3 0 31.1 16.9 68.2 97.8 68.2 58.4-.1 92-23.2 92-63.4z"/></svg>jQuery</button>
                            <button class="b b-secondary shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M356.9 64.3H280l-56 88.6-48-88.6H0L224 448 448 64.3h-91.1zm-301.2 32h53.8L224 294.5 338.4 96.3h53.8L224 384.5 55.7 96.3z"/></svg>Vue Js</button>
                            <button class="b b-warning shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M464 448H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h416c26.51 0 48 21.49 48 48v288c0 26.51-21.49 48-48 48zM112 120c-30.928 0-56 25.072-56 56s25.072 56 56 56 56-25.072 56-56-25.072-56-56-56zM64 384h384V272l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L208 320l-55.515-55.515c-4.686-4.686-12.284-4.686-16.971 0L64 336v48z"/></svg>Photoshop</button>
                            <h4> Backend Web</h4>
                            <button class="b b-primary shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"/></svg>PHP</button>
                            <button class="b b-danger shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M448 73.143v45.714C448 159.143 347.667 192 224 192S0 159.143 0 118.857V73.143C0 32.857 100.333 0 224 0s224 32.857 224 73.143zM448 176v102.857C448 319.143 347.667 352 224 352S0 319.143 0 278.857V176c48.125 33.143 136.208 48.572 224 48.572S399.874 209.143 448 176zm0 160v102.857C448 479.143 347.667 512 224 512S0 479.143 0 438.857V336c48.125 33.143 136.208 48.572 224 48.572S399.874 369.143 448 336z"/></svg>MySQL</button>
                            <button class="b b-info shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M97.22,96.21c10.36-10.65,16-17.12,16-21.9,0-2.76-1.92-5.51-3.83-7.42A14.81,14.81,0,0,0,101,64.05c-8.48,0-20.92,8.79-35.84,25.69C23.68,137,2.51,182.81,3.37,250.34s17.47,117,54.06,161.87C76.22,435.86,90.62,448,100.9,448a13.55,13.55,0,0,0,8.37-3.84c1.91-2.76,3.81-5.63,3.81-8.38,0-5.63-3.86-12.2-13.2-20.55-44.45-42.33-67.32-97-67.48-165C32.25,188.8,54,137.83,97.22,96.21ZM239.47,420.07c.58.37.91.55.91.55Zm93.79.55.17-.13C333.24,420.62,333.17,420.67,333.26,420.62Zm3.13-158.18c-16.24-4.15,50.41-82.89-68.05-177.17,0,0,15.54,49.38-62.83,159.57-74.27,104.35,23.46,168.73,34,175.23-6.73-4.35-47.4-35.7,9.55-128.64,11-18.3,25.53-34.87,43.5-72.16,0,0,15.91,22.45,7.6,71.13C287.7,364,354,342.91,355,343.94c22.75,26.78-17.72,73.51-21.58,76.55,5.49-3.65,117.71-78,33-188.1C360.43,238.4,352.62,266.59,336.39,262.44ZM510.88,89.69C496,72.79,483.52,64,475,64a14.81,14.81,0,0,0-8.39,2.84c-1.91,1.91-3.83,4.66-3.83,7.42,0,4.78,5.6,11.26,16,21.9,43.23,41.61,65,92.59,64.82,154.06-.16,68-23,122.63-67.48,165-9.34,8.35-13.18,14.92-13.2,20.55,0,2.75,1.9,5.62,3.81,8.38A13.61,13.61,0,0,0,475.1,448c10.28,0,24.68-12.13,43.47-35.79,36.59-44.85,53.14-94.38,54.06-161.87S552.32,137,510.88,89.69Z"/></svg>CodeIgniter</button>
                            <button class="b b-success shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"/></svg>Laravel</button>
                            <h4> Other Skills</h4>
                            <button class="b b-info shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M384 121.941V128H256V0h6.059c6.365 0 12.47 2.529 16.971 7.029l97.941 97.941A24.005 24.005 0 0 1 384 121.941zM248 160c-13.2 0-24-10.8-24-24V0H24C10.745 0 0 10.745 0 24v464c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24V160H248zM123.206 400.505a5.4 5.4 0 0 1-7.633.246l-64.866-60.812a5.4 5.4 0 0 1 0-7.879l64.866-60.812a5.4 5.4 0 0 1 7.633.246l19.579 20.885a5.4 5.4 0 0 1-.372 7.747L101.65 336l40.763 35.874a5.4 5.4 0 0 1 .372 7.747l-19.579 20.884zm51.295 50.479l-27.453-7.97a5.402 5.402 0 0 1-3.681-6.692l61.44-211.626a5.402 5.402 0 0 1 6.692-3.681l27.452 7.97a5.4 5.4 0 0 1 3.68 6.692l-61.44 211.626a5.397 5.397 0 0 1-6.69 3.681zm160.792-111.045l-64.866 60.812a5.4 5.4 0 0 1-7.633-.246l-19.58-20.885a5.4 5.4 0 0 1 .372-7.747L284.35 336l-40.763-35.874a5.4 5.4 0 0 1-.372-7.747l19.58-20.885a5.4 5.4 0 0 1 7.633-.246l64.866 60.812a5.4 5.4 0 0 1-.001 7.879z"/></svg>CMS</button>
                            <button class="b b-primary shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>SEO</button>
                            <button class="b b-secondary shadow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>Github</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>
        <?php if (isset($is_category)):?>
        <section class="ftr2 mbr-section aiti-k" id="category">
            <div class="container mr-top">
                <?php echo search() ?>
            </div>
        </section>
        <?php endif;?>
        <?php if (isset($is_tag)):?>
        <section class="ftr2 mbr-section aiti-k" id="tag">
            <div class="container mr-top">
                <?php echo search() ?>
            </div>
        </section>
        <?php endif;?>
        <?php if (isset($is_front)) {?>
        <section class="ftr2 mbr-section aiti-k" id="project">
            <div class="container">
                <h3 class="mbr-section-title mbr-fonts-style align-center mbr-bold text-dark display-5">Project</h3>
                <p class="mbr-light align-center display-3">New Project <?= $title;?></p>
                <div class="mbr-row mbr-jc-center">
                    <?= content();?>
                </div>
            </div>
        </section>
        <?php }else{;?>
        <section class="ftr2 mbr-section aiti-k" id="project">
            <div class="container">
                <?php if (isset($is_blog)):?>
                    <div class="mbr-row mbr-jc-center">
                        <div class="card mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6">
                            <?php echo search() ?>
                        </div>
                    </div>
                <?php endif;?>
                <?= content();?>
            </div>
        </section>
        <?php };?>
    <a href="#top" id="b" class="top" role="button" title="back to top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"/></svg></a>
    <?php if (isset($is_front)):?>
    <section class="map map_aits" id="contact">
        <div class="mbr-row mbr-jc-center">
            <div class="map-title mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 align-right">
                <div class="google-map">
                    <amp-iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7099961178296!2d116.98409981427095!3d-0.4222064354117982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67acb58a700e9%3A0xf85f6dcc30a22afc!2sFlashponsel%20-%20Modifikasi%20Ponsel%20dan%20Perbaikan%20Ponsel!5e0!3m2!1sid!2sid!4v1658890743026!5m2!1sid!2sid"
                        height="400" layout="fixed-height" sandbox="allow-scripts allow-same-origin allow-popups"
                        frameborder="0" class="aitis-loader">
                        <h4>Get Data From Google Map...</h4>
                    </amp-iframe>
                </div>
            </div>
            <div class="map-title mbr-col-sm-12 mbr-col-md-6 mbr-col-lg-6 align-left">
                <h3 class="mbr-section-title mbr-fonts-style align-left mbr-bold text-dark display-5">Call Me</h3>
                <div class="table-responsive mbr-light">
                    <table class="table borderless mbr-text mbr-light  text-dark mbr-fonts-style align-left" style="width:100%">
                        <tr>
                            <th>E-mail</th>
                            <td>afanhermawan019@gmail.com</td>
                        </tr>
                        <tr>
                            <th>Call/WA</th>
                            <td>(+62)85927414777</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>Kutai Kartanegara - Indonesia</td>
                        </tr>
                    </table>
                </div>
            </div>
    </section>
    <?php endif;?>
    <section class="footer mbr-foot" id="footer">
        <div class="container">
            <div class="mbr-col-sm-12 align-center text-dark">
                <p class="mbr-text mbr-light mbr-fonts-style text-sm">
                    © afanDev. 2017-<?= date('Y');?> All Reserved.
                </p>
            </div>
        </div>
    </section>
</body>
</html>