<? global $APPLICATION, $USER; 
$idUser = $USER->GetID();; 
//require_once($_SERVER['DOCUMENT_ROOT'].'/include/mx.php');
//if(MX) die( debugdp($_REQUEST, 'req') );

if(!function_exists("NonSpace") ) {function NonSpace($par_text_in){
	$par_text_out_arr = preg_split('#<.*?>#',$par_text_in, -1, PREG_SPLIT_NO_EMPTY);
	$par_text_out1 = $par_text_out_arr;
	
	foreach ($par_text_out_arr as &$value) {
		$value = preg_replace('#\s(-|–|—)#', '&nbsp;$1', preg_replace('#(\b\w{1,3}|\d)\s#iu', '$1&nbsp;', $value));
		//print_r($value);
	}
	unset($value);
	//print_r($par_text_out_arr);
	//print_r($par_text_out);
	//echo count($par_text_out_arr);
	
	$par_text_out = $par_text_in;
	
	for ($i = 0; $i < count($par_text_out_arr); $i++) {
		$par_text_out = str_replace($par_text_out1[$i], $par_text_out_arr[$i], $par_text_out);
	}
	unset($i);
	unset($par_text_out_arr);
	unset($par_text_out1);
	//echo $par_text_out;
	return $par_text_out;
}}

?>
<!doctype html>
<script>
    /*
	var paramsString = document.location.search;
	//window.alert(document.location.host);
	if (document.location.href.includes(document.location.host+'/stream') && !paramsString.includes('?channel')) {
		window.location.href = 'https://' + document.location.host//'https://1med.tv';
	}
    */
</script>
<html>
<head>
<? global $USER;
	$userId = $USER->GetID();
?>
<script type="text/javascript">
	window.dataLayer = window.dataLayer || [];
	window.dataLayer.push({'user_id':'<?= $userId ?>'});
	function PlayerjsEvents(event,id,info){
		if(event=="play"){
			window.dataLayer.push({'event_playerjs':'play'});
		}
		if(event=="pause"){
			window.dataLayer.push({'event_playerjs':'pause'});
		}
		if(event=="mute"){
			window.dataLayer.push({'event_playerjs':'mute'});
		}
		if(event=="fullscreen"){
			window.dataLayer.push({'event_playerjs':'fullscreen'});
		}
	}
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VXFNN6ML19"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VXFNN6ML19', {
  'user_id': 'USER_ID',
  'event_playerjs': 'Event_PlayerJS'
});
</script>
<!-- End Google tag (gtag.js) -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NRBX778');</script>
<!-- End Google Tag Manager -->
<? /*
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MR49BRH');</script>
<!-- End Google Tag Manager -->

*/ ?>
<? /*
<!-- Google Analytics -->
<script>
window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
ga('create', 'UA-35530240-1', 'auto');
<?php
	if (isset($userId)) {
		$gacode = "ga('set', 'dimension1', '%s');";
		echo sprintf($gacode, $userId);
	} else {
		$gacode = "ga('create', 'UA-35530240-1', 'auto');";
		echo sprintf($gacode);
	}
?>
ga('send', 'pageview');
</script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35530240-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('set', {'user_id': 'USER_ID'});
  gtag('config', 'UA-35530240-1');
</script>
<!-- End Global site tag (gtag.js) - Google Analytics -->
*/ ?>
<!-- Yandex.Metrika counter --><script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(17635219, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, userParams: {UserID:<?= $userId ?>} }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/17635219" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- Top.Mail.Ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3311209", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = "https://top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "tmr-code");
</script>
<noscript><div><img src="https://top-fwz1.mail.ru/counter?id=3311209;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div></noscript>
<!-- /Top.Mail.Ru counter -->

<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1514212-97zFz"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1514212-97zFz" style="position:fixed; left:-999px;" alt=""/></noscript>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title><? $APPLICATION->ShowTitle() ?></title>
   
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/reset.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/stylesheet.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/flex.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/datepicker.css?ver=10") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/magnific-popup.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/swiper.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery-ui.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/uikit.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/registration.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/new_style.css") ?>
	<? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style-css-projects.css") ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css"); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css"); ?>
	
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.min.js");?>

    <meta name="yandex-verification" content="cfefba5471ebafa4" />
    <!--<meta name="yandex-verification" content="7e5c06cd940a5512" />-->
	
	<meta name="google-site-verification" content="pxBfpk1DcqnUMndj4Tnx5-F68SUleS5v0Hlvs6GQaV8" />
	
	<? $APPLICATION->ShowHead() ?>


	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/swiper.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/uikit-icons.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/uikit.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.formstyler.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.jscrollpane.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.magnific-popup.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js?v=100");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js?v=102");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/code.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/developerScripts.js?ver=124");?>	 
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js"); ?>
    <?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.inputmask.bundle.js"); ?>
    <?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.inputmask.js"); ?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.maskedinput.min.js"); ?>
    <?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/detect_timezone.js"); ?>
    
    <!-- скрипт getAllUrlParams.js парсит URL и извлекает GET параметры -->
    <!-- Для строки ?tab=programm через getAllUrlParams().tab получаем "programm" --> 
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/getAllUrlParams.js");?>
    <!-- скрипт для виджета перевода как тут  -->

    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/google-translate.js");?>
    <? //$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/js.cookie.min.js");?>
    <? //$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/cookes.js");?> 
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/selectize/selectize.min.js");?> 

</head> 

<body id="body_event">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRBX778"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<? /*
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MR49BRH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
*/ ?>
<div style="height:0; overflow:hidden;">
<?
$rsUser = CUser::GetByID($USER->GetID());
$arUser = $rsUser->Fetch();
//$_SESSION['SSO']['HTTP_HOST'] = 'https://1med.tv';
$_SESSION['SSO']['HTTP_HOST'][strtoupper($_SERVER['HTTP_HOST'])] = 'https://'.$_SERVER['HTTP_HOST'];//1med.tv';
$client_id = __ExternalAuth::$client_id[$_SERVER['HTTP_HOST']];
$base = __ExternalAuth::$base;
$secret = __ExternalAuth::$secret[$_SERVER['HTTP_HOST']];
$EXTRNLUSER = __ExternalAuth::$EXTRNL_USER;

// автологин для рассылки
require_once($_SERVER['DOCUMENT_ROOT'] . "/ajax/autologin.php");
// подключаем первый запрос в SSO 
// require_once($_SERVER['DOCUMENT_ROOT'] . "/cabinet/sso_first_request.php");


/*
if ( ($_GET['sso'] == 'sos') || (strpos($_SERVER['REQUEST_URI'], "/cabinet/sso.php") !== false) || (strpos($_SERVER['HTTP_REFERER'], "/cabinet/sso.php") !== false) || (strpos($_SERVER["SCRIPT_NAME"], "/cabinet/sso.php") !== false)) {
    $_SESSION['SSO']['GET_USER'] = '3';
} else {
    require_once($_SERVER['DOCUMENT_ROOT'] . "/cabinet/sso_first_request.php");
    $_SESSION['SSO']['GET_USER'] = '3';
}
*/
//require_once($_SERVER['DOCUMENT_ROOT'] . "/cabinet/sso_first_request.php");
if ( !isset($_COOKIE['1med_token']) && ($idUser) ) {
   /*
    $med_token = __ExternalAuth::OnUserTokenApminPas($idUser);
    setcookie('1med_token', $med_token, array(
        'expires' => time() + 60 * 60 * 24 * 30,
        'path' => '/'
    ));
    */
}

if ($USER->IsAuthorized()) {
} else {
    //$med_token = domain_1med::gen_token();
    //setcookie('1med_token', $med_token, array(
    //    'expires' => time() + 60 * 60 * 24,
    //    'path' => '/'
    //));
}
?>
</div>
<div id="panel"><? $APPLICATION->ShowPanel() ?></div> 
<?

if ( ($USER->IsAuthorized()) && (empty($_SESSION[__ExternalAuth::$EXTRNL_USER][$idUser])) ) $_SESSION[__ExternalAuth::$EXTRNL_USER][$idUser] = __ExternalAuth::OnUserTokenApminPas($idUser);


$arGroups = $USER->GetUserGroupArray();

if ( (in_array(3914, $arGroups)) && (!$USER->IsAdmin()) ) { // Проверяем что пользователь в группе GUEST_SPECIAL и он не админ
    $_SESSION['SESS_AUTH']['GUEST_SPECIAL'] = true; 
} else {
    $_SESSION['SESS_AUTH']['GUEST_SPECIAL'] = false; 
}

if( in_array(3898, $arGroups) ) // проверяем что пользователь в группе Отдел продакшн
    $APPLICATION->ShowPanel = true; 
if(  in_array(3898, $arGroups) || ( $USER->isAdmin() )  ){
?>
<style type="text/css">
 .mx_first_header_line{top:0;} 
	@media(min-width:1024px){ #panel{position:relative; top: 3vw;} }
</style>
<?
}
?>
<script type="text/javascript">
window.addEventListener('scroll', function() {
 var hheight=$('#mx_first_header_line').height()+$('#mx_first_header_line_placeholder').height();
 if(pageYOffset>hheight){
	 $(".menu_and_login .mx_menu_item").removeClass("d-none");
		$("#mx_phone_onscroll").addClass("d-none");
	}else{
	 $(".menu_and_login .mx_menu_item").addClass("d-none");
		$("#mx_phone_onscroll").removeClass("d-none");
	}
});
</script>
<?
// собираем цвет для маркера
$rsMenuMarker = CIBlockElement::GetList(Array(),  ['IBLOCK_ID' => 40, 'ID' => 434080], false, Array("nPageSize"=>50), ["ID", 'PROPERTY_COLOR']);
while ($gMenuMarker = $rsMenuMarker->fetch())
{
    $COLOR_MENU_MARKER = $gMenuMarker['PROPERTY_COLOR_VALUE'];
}
?>
<style>
	@keyframes smoothBlink {
		0%, 100% { opacity: 1; } /* Свет включён */
		50% { opacity: 0; }      /* Свет выключен */
		}
	.d1_point {
		display: flex;
		width: 16px;
		height: 16px;
        border-radius: 50%;
        animation: smoothBlink 1s infinite;
		background: #<?=$COLOR_MENU_MARKER?>;
		border: 2px #<?=$COLOR_MENU_MARKER?> inset;
		}
</style>
<header class="mx_header">
 <div id="mx_first_header_line" class="mx_first_header_line">
	<div class="w1920 flex-spacebetween">
		<div>
			<!--<a href="/"><img src="<?/*= SITE_TEMPLATE_PATH */?>/svg/logo_white.svg" class="mx_logo" /></a>-->
			<a style="width:10rem;" class="header-info__svg" href="/">
				<img class="svg-adaptive" src="<?= SITE_TEMPLATE_PATH ?>/svg/logo_white.svg" />
			</a>
		</div>
		<div class="menu_and_login flex-spacebetween">
			<div id="mx_phone_onscroll" class="mx_phone_onscroll">
				<div>
					<span class="text-nowrap">Звонок по России бесплатный</span>
					<a class="header-info__svg" href="tel:88001001786"> <img class="svg-adaptive" src="<?= SITE_TEMPLATE_PATH ?>/svg/phone-receiver.svg"> </a> 
		 			<a href="tel:88001001786" class="text-nowrap">8-800-1001-786</a>
				</div>
			</div>
<? 
$TopMenu1=getMenu("float");
//__($TopMenu1);
require_once($_SERVER['DOCUMENT_ROOT'].'/include/mx.php'); 
foreach($TopMenu1 as $name=>$link){ 

    $pos_target = mb_strpos($link, 'ttps:');
    if ($pos_target > 0) {  
        $target= '';// 'target="_blank"';
        $div_show = ' flex; align-items: center;'; ?>
		<div class="mx_menu_item d-none" style="width: min-content;">
			<div style="display:<?=$div_show?>;">
				<div style="max-width: 16px; margin-right: 6px;">
					<span class="d1_point"></span>
				</div>
				<div>
					<a class="menu-link<?=( is_menu_link_current($link) ? ' active' : '' )?>" <?=$target?> href="<?=$link?>"><?=$name?></a>
				</div>
			</div>
		</div>
    <?} else {
        $target = '';
        $div_show = 'none'; ?>
		<div class="mx_menu_item d-none">
			<a class="menu-link<?=( is_menu_link_current($link) ? ' active' : '' )?>" <?=$target?> href="<?=$link?>"><?=$name?></a>
		</div>
    <?}
    
    } ?>

<?if ($USER->IsAuthorized()) { ?>
    <a href="/cabinet/" class="flex-nowrap flex__align-items_center">
     <div class="header-info__lock-img"><img src="<?= SITE_TEMPLATE_PATH ?>/svg/open_lock_new.svg"></div>
     <div <?=(empty($_SESSION[__ExternalAuth::$EXTRNL_USER][$idUser]) ? 'style="color: yellow;"' :'')?> class="header-info__lock-name"><?= $arUser['NAME'] . ' ' . $arUser['LAST_NAME'] ?></div>
    </a><? 
} else { ?>
    <div class="header-info__lock flex-nowrap flex__align-items_center">
     <div class="header-info__lock-btn">
      <button>Войти</button>
	 			</div>
    </div><? 
} ?>
		</div>
	</div>
 </div><? //mx_first_header_line ?>
 <div id="mx_first_header_line_placeholder"></div>
 <div class="mx_second_header_line">
	 <div class="mx_second_header_line_inside w1920 flex-spacebetween">
 	 <div class="mx_menu2 flex-spacebetween">
<?
$TopMenu2=getMenu("top");
//__($TopMenu2);
foreach($TopMenu2 as $name=>$link){ 
    $pos_target = mb_strpos($link, 'ttps:');

    if ($pos_target > 0) {  
        $target= ''; //'target="_blank"';
        $div_show = ' flex; align-items: center;'; ?>
		<div class="mx_menu_item mx_menu_item-online">
            <style type="text/css">
            .mx_menu_item-online{width: min-content;padding: 0px 40px;clip-path: polygon(15% 0%, 100% 0%, 85% 100%, 0% 100%);z-index: 100;background: rgb(210 229 248);max-height: 115px; height: 6.5vw;display: flex} 
                @media(max-width:1250px){ .mx_menu_item-online{padding: 0px 20px} header .mx_menu2 .menu-link{font-size:1.4rem !important;}} @media(min-width:1600px){header .mx_menu2 .menu-link{font-size:1.8rem !important;}}
            </style>
			<div style="display:<?=$div_show?>;">
				<div style="max-width: 16px; margin-right: 6px;">
					<span class="d1_point"></span>
				</div>
				<div>
					<a class="menu-link<?=( is_menu_link_current($link) ? ' active' : '' )?>" <?=$target?> href="<?=$link?>"><?=$name?></a>
				</div>
			</div>
		</div>
    <?} else {
        $target = '';
        $div_show = 'none'; ?>
		<div class="mx_menu_item">
			<a class="menu-link<?=( is_menu_link_current($link) ? ' active' : '' )?>" <?=$target?> href="<?=$link?>"><?=$name?></a>
		</div>
    <?}
 
     }
?>

<? /*
$TopMenu2=getMenu("top");
//__($TopMenu2);
foreach($TopMenu2 as $name=>$link){ 
    $pos_target = mb_strpos($link, 'ttps:');

    if ($pos_target > 0) {  
        $target= ''; //'target="_blank"';
        $div_show = 'inline-flex';
    } else {
        $target = '';
        $div_show = 'none';
    }
 
    ?><div class="mx_menu_item"><span class="d1" style="display:<?=$div_show?>;" ></span><a class="menu-link<?=( is_menu_link_current($link) ? ' active' : '' )?>" <?=$target?> href="<?=$link?>"><?=$name?></a></div><? } */
?>	
	 	</div>
		 <div class="mx_search">
   <form action="/search/" method="GET" class="search-form__form flex-nowrap flex__align-items_center" name="search-form__result">
    <input class="input" type="text" name="q" placeholder="специализация, тема, жанр, лектор..." >
    <span class="search-cursor0"></span>
    <button class="search-button"> <img src="<?= SITE_TEMPLATE_PATH ?>/svg/magnifying-glass-greey.svg"> </button>
   </form>
		 </div>
		</div>
	</div>
</header>

<header class="header">
 <div class="header-info__conteiner">
  <div class="header-info flex-nowrap flex__align-items_center flex__jcontent_between">
   <a href="mailto:<?=domain_1med::get_variable('email');?>" class="header-info__mail">
   <?=domain_1med::get_variable('email');?>
   </a>
   <div class="header-info__tel flex-conteiner flex__align-items_center"> <span class="text-nowrap">Звонок по России бесплатный</span> <a class="header-info__svg" href="tel:88001001786"> <img class="svg-adaptive" src="<?= SITE_TEMPLATE_PATH ?>/svg/phone-receiver.svg"> </a> <a href="tel:88001001786" class="text-nowrap">8-800-1001-786</a> </div>
   <div class="_language" style="display:none;"> <img src="/images/lang/lang__ru.png" alt="ru" data-google-lang="ru" class="language__img"> <img src="/images/lang/lang__kz.png" alt="kz" data-google-lang="kk" class="language__img"> <img src="/images/lang/lang__uz.png" alt="uz" data-google-lang="uz" class="language__img"> <img src="/images/lang/lang__en.png" alt="en" data-google-lang="en" class="language__img"> 
			</div>
<?
/* 
if ($USER->IsAuthorized()) { ?>
   <a href="/cabinet/" class="flex-nowrap flex__align-items_center">
   <div class="header-info__lock-img"><img src="<?= SITE_TEMPLATE_PATH ?>/svg/open_lock_new.svg"></div>
   <div class="header-info__lock-name" <?if (empty($_SESSION['EXTRNL_MED_USER'][$idUser])) echo 'style="color: yellow;"'?>>
    <?= $arUser['NAME'] . ' ' . $arUser['LAST_NAME'] ?>
   </div>
   </a><? 
} else { ?>
   <div class="header-info__lock flex-nowrap flex__align-items_center">
    <div class="header-info__lock-img"><img src="<?= SITE_TEMPLATE_PATH ?>/svg/lock-blue.svg"></div>
    <div class="header-info__lock-btn">
     <button>Вход</button>
     <span> / </span> <a href="#">Регистрация</a> </div>
   </div>
   <?  
} 
*/
if ($USER->IsAuthorized()) { ?>
    <a href="/cabinet/" class="flex-nowrap flex__align-items_center">
     <div class="header-info__lock-img"><img src="<?= SITE_TEMPLATE_PATH ?>/svg/open_lock_new.svg"></div>
     <div <?=(empty($_SESSION[__ExternalAuth::$EXTRNL_USER][$idUser]) ? 'style="color: yellow;"' :'')?> class="header-info__lock-name"><?= $arUser['NAME'] . ' ' . $arUser['LAST_NAME'] ?></div>
    </a><? 
} else { ?>
    <div class="header-info__lock flex-nowrap flex__align-items_center">
     <div class="header-info__lock-btn">
      <button>Войти</button>
	 			</div>
    </div><? 
} ?>


  </div>
 </div>
 <div class="header-search__mobi">
  <div class="search-form">
   <form action="/search/" method="GET" class="search-form__form flex-nowrap flex__align-items_center" name="search-form__result">
    <button class="search-button"> <img src="<?= SITE_TEMPLATE_PATH ?>/svg/magnifying-glass-greey.svg"> </button>
    <input class="input" type="text" name="q" id="input-result" placeholder="специализация, тема, жанр, лектор..." >
    <span class="search-cursor"></span>
    <button class="search-button-close"> Очистить </button>
   </form>
  </div>
 </div>
 <div class="header-search__mobi-close"> <img class="svg-adaptive" src="<?= SITE_TEMPLATE_PATH ?>/svg/cancel-white.svg"> </div>
 <div class="header-menu__conteiner">
  <div class="header-menu flex-nowrap flex__jcontent_between flex__align-items_center">
   <div class="header-menu__logo">
			 <a href="/"> 
				 <img class="svg-adaptive" src="<?= SITE_TEMPLATE_PATH ?>/svg/logo.svg" alt="1med.tv">
					<img class="svg-adaptive" src="<?= SITE_TEMPLATE_PATH ?>/svg/logo.svg" alt="1med.tv">
<? 
// <img class="svg-adaptive" src="/images/logo.png" alt="1med.tv"> 
// <img class="svg-adaptive" src="/images/logo-mobi.png" alt="1med.tv"> 
?>
    </a> 
			</div>
   <div class="header-menu__nav-conteiner flex-nowrap flex__jcontent_end flex__align-items_center">
    <div class="header-menu__mobi-open-menu">
     <input id="hamburger" class="hamburger" type="checkbox"/>
     <label class="hamburger" for="hamburger"> <i></i> </label>
    </div>
<? 
$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_mobile", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "top"
	),
	false
); ?>
   </div>
   <div class="header-menu__nav-conteiner flex-nowrap flex__jcontent_end flex__align-items_center">
    <div class="search-button search-button-visible" id="show-search"> <img src="<?= SITE_TEMPLATE_PATH ?>/svg/magnifying-glass.svg"> <img src="<?= SITE_TEMPLATE_PATH ?>/svg/magnifying-glass-mob.svg"> </div>
   </div>
   <div class="header-menu__search-wrapper">
    <form action="/search/" method="GET" class="form-container flex-nowrap flex__align-items_center">
     <button class="search-button"> <img src="<?= SITE_TEMPLATE_PATH ?>/svg/magnifying-glass.svg"> </button>
     <input class="input" type="search" name="q" placeholder="Поиск" id="input-main">
     <span class="search-cursor"></span>
    </form>
   </div>
   <div class="search-close-block" id="close-btn">
    <button class="search-close-button" type="button"> <img src="<?= SITE_TEMPLATE_PATH ?>/svg/cancel.svg"> </button>
   </div>
  </div>
 </div>
 <div class="header-menu__mobi-open-menu dop-btn">
  <input id="hamburger-dop" class="hamburger" type="checkbox">
  <label class="hamburger" for="hamburger"> <i></i> </label>
 </div>
</header>

<div class="overlay"></div>
<div class="search-wrapper-desk">
    <form action="/search" class="search-wrapper__form">
        <input type="text" class="search__input" name="q" placeholder="Поиск">
        <button class="button search-btn">
            <span>Найти</span>
            <span class="button-span">
                <img src="<?= SITE_TEMPLATE_PATH ?>/svg/right-arrow-white.svg">
            </span>
        </button>
    </form>
</div>
<? /*<div class="account-message">
    <div class="account-message-wrapper after-registration">
        <div class="account-message-btn">
            <img src="<?= SITE_TEMPLATE_PATH ?>/svg/icon-close.svg">
        </div>
        <div class="account-message-block">
            <p>Благодарим за регистрацию!</p>
            <p>Теперь вы можете смотреть прямой эфир.</p>
            <p>Для просмотра видео из архива необходимо заполнить данные в личном кабинете.</p>
        </div>
    </div>
</div>
<div class="account-message white-popup mfp-hide active" id="account-message">
    <div class="account-message-wrapper">
        <div class="account-message-block">
            <? if ($USER->IsAuthorized() && $arUser['UF_ACCESS'] !== 'Y') { ?>
                <p>Для просмотра видео необходимо заполнить раздел "Ваши данные" в <a href="/cabinet/">личном
                        кабинете</a></p>
            <? } else {
                ?>
                <p>Для просмотра видео необходимо <a href="/translation/">авторизоваться</a></p>
                <?
            } ?>
        </div>
    </div>
</div>*/ ?>
<? if (!domain_1med::iblock_access()) { ?>
<div class="account-message white-popup mfp-hide active" id="account-message">
 <div class="account-message-wrapper">
  <div class="account-message-block">
   <? if ($USER->IsAuthorized() && ($arUser['UF_ACCESS'] !== 'Y' || $arUser['UF_ACCESS'] !== 'S')) { ?>
    <p>Для просмотра видео Вам необходимо заполнить раздел "Ваши данные" в <a href="/cabinet/">Личном кабинете</a></p>
   <? } else {
       form4pleaselogin("auth_butt()");
   ?>
<script>
function auth_butt() {
    window.location.href = '/auth/registr/';
    /*
    const mfp_auth_bg = document.querySelector('.mfp-bg');
    const mfp_auth_wrap = document.querySelector('.mfp-wrap');
    mfp_auth_bg.classList.replace('mfp-ready', 'mfp-hide');
    mfp_auth_wrap.classList.replace('mfp-ready', 'mfp-hide');
    $('.entrance').addClass('active');
    $('.entrance').style.zIndex = '2100';
    */
}
</script>
    </p> 
   <? } ?>
  </div>
 </div>
</div>
<?}?>
<? 

$APPLICATION->IncludeComponent(
    "bitrix:system.auth.form",
// "",
    "auth_off",
    array(
        "FORGOT_PASSWORD_URL" => "auth.php?forgot_password=yes",
        "PROFILE_URL" => "/cabinet/",
        "REGISTER_URL" => "/register/",
        "SHOW_ERRORS" => "Y",
        "COMPONENT_TEMPLATE" => "auth"
    ),
    false
); 

function getMenu($menu_type){
 global $APPLICATION;
 ob_start();
 $APPLICATION->IncludeComponent(
 	"bitrix:menu", 
 	"top", 
 	array(
 		"ROOT_MENU_TYPE" => $menu_type,
 		"MENU_CACHE_TYPE" => "A",
 		"MENU_CACHE_TIME" => "3600",
 		"MENU_CACHE_USE_GROUPS" => "Y",
 		"MENU_CACHE_GET_VARS" => array(
 		),
 		"MAX_LEVEL" => "1",
 		"CHILD_MENU_TYPE" => "left",
 		"USE_EXT" => "Y",
 		"DELAY" => "N",
 		"ALLOW_MULTI_SELECT" => "N",
 		"COMPONENT_TEMPLATE" => "top"
 	),
	 false
 ); 
 $s=ob_get_contents();
 ob_end_clean();
 if( preg_match_all("/<a[^>]+href\=\"([^\"]+)\"[^>]*>([^<]+)<\/a>/Uusi", $s, $Ms, PREG_SET_ORDER) ){
  $Menu=array();
 	foreach($Ms as $M) $Menu[$M[2]]=$M[1];
 }
	return $Menu;
} //function getMenu($menu_type)

function is_menu_link_current($link){
 if($link==$_SERVER['REQUEST_URI']) return true;
	if($link=="/") return false;
	return ( strpos($_SERVER['REQUEST_URI'], $link)===0 );
} //function is_menu_link_current($link)


function form4pleaselogin($onclick){ ?>
    <div class="form4pleaselogin mx_form" >
     <img class="MedCat" align="left" src="<?=SITE_TEMPLATE_PATH ?>/svg/Paywall_translation.svg" />
     <div class="oy">Ой, а мы Вас не узнали...</div>
     <div class="voydite">
Первый медицинский канал – сайт для медработников.<br />
Чтобы продолжить просмотр, пожалуйста, войдите на&nbsp;сайт.
     </div>
     <div class="clear_mobile" align="center">
       <input type="submit" onClick="auth_butt()" value="Вхожу" />
     </div>
    </div>
<?	
}//function form4pleaselogin($onclick)

?>
