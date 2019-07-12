<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

//debug($arResult);

?>

<!-- Slideshow 2 -->

<ul class="rslides" id="slider3">
    <?php foreach($arResult['ITEMS'] as $arItem): ?>
    <li><img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"></li>
    <?php endforeach; ?>
</ul>