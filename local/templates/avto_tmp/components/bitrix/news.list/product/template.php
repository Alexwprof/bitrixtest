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

<div class="control_position">
    <div class="main_content">
        <?php foreach($arResult['ITEMS'] as $arItem): ?>
        <div class="box">
            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>">
            <p> <?= $arItem['PREVIEW_TEXT'] ?></p>
        </div>

<?php endforeach;?>
    </div>
</div>
