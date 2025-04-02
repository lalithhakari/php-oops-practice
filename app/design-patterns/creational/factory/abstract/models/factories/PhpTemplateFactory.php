<?php

require_once('interfaces/TemplateFactory.php');
require_once('interfaces/TitleTemplate.php');
require_once('interfaces/PageTemplate.php');
require_once('interfaces/TemplateRenderer.php');
require_once('components/PhpTitleTemplate.php');
require_once('components/PhpPageTemplate.php');
require_once('components/PhpRenderer.php');

/**
 * And this Concrete Factory creates PHPTemplate templates.
 */
class PhpTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PhpTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PhpPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PhpRenderer();
    }
}
