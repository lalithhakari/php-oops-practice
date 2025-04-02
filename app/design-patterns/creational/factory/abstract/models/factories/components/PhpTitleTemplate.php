<?php

require_once('interfaces/TitleTemplate.php');

class PhpTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1><?= \$title; ?></h1>";
    }
}
