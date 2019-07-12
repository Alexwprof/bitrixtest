<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<Html>
<head>
    <?php
    use Bitrix\Main\Page\Asset;
    $APPLICATION->ShowHead();
    ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style_avto/csstyles.css");?>
    <?php Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style_avto/responsiveslides.css");?>
    <?php Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style_avto/themes.css");?>
    <?php Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/js_avto/jquery-3.4.1.min.js"); ?>
    <?php Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/js_avto/responsiveslides.min.js"); ?>

    <script>
        // You can also use "$(window).load(function() {"
        $(function () {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                auto: false,
                pager: false,
                nav: true,
                speed: 500,
                maxwidth: 800,
                namespace: "centered-btns"
            });

            // Slideshow 2
            $("#slider2").responsiveSlides({
                auto: true,
                pager: false,
                speed: 1000,
                maxwidth: 540
            });

            // Slideshow 3
            $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                speed: 100,
                maxwidth: 540
            });

        });

    </script>

</head>
<body>

<!--<div id="panel">--><?php //$APPLICATION->ShowPanel(); ?><!--</div>-->
<!--Header content start -->
<div id="header">

    <div id="wrapper">
        <div class="header_logo">

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/local/include_views/logo/logo.php"
                )
            );?>

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/local/include_views/name_n/name.php"
                )
            );?>


            <div class="topnav" id="myTopnav">

                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include_views/info/info_i.php"
                    )
                );?>


                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/local/include_views/menu/menu_i.php"
                    )
                );?>

            </div>
        </div>

        <!--Слайдер верхний в шапке -->
        <div class="box_top_slider">
            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_news_new", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "sliders",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "news_news_new"
	),
	false
);?>



        </div>

    </div>
</div>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<!--Header content end -->


