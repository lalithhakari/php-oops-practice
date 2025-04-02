<?php

require_once('TitleTemplate.php');
require_once('PageTemplate.php');
require_once('TemplateRenderer.php');

/**
 * The Abstract Factory interface declares creation methods for each distinct
 * product type.
 */
interface TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate;

    public function createPageTemplate(): PageTemplate;

    public function getRenderer(): TemplateRenderer;
}
