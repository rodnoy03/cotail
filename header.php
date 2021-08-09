<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->Showtitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH ?>/css/style.css">
</head>
<body>
    <?$APPLICATION->ShowPanel();?>
    <div class="header" id="header">
        <div class="container">
            <div class="header__content">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="logo">
            </div>
        </div>
    </div>