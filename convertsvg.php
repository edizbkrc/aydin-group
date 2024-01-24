<?php

include __DIR__ . "/../svg/class.svgsprit.php";
$sourceDir = __DIR__ . "/assets/img/svg/";
$outputFile = "assets/img/svg/iconset.svg";

$excludeFiles = [];
$includeFiles = [
    "basket",
    "flag",
    "home",
    "location",
    "time",
    "burgericon",
    "close",
    "instagram",
    "facebook",
    "twitter",
    "youtube",
    "linkedin",
];

$spriteGenerator = new SvgSpriteGenerator($sourceDir, $outputFile, $excludeFiles, $includeFiles);
echo $spriteGenerator->generateSprite(false)->getIconList(false);
