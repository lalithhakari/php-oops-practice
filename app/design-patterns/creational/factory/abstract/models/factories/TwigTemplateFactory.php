<?php

require_once('interfaces/TemplateFactory.php');
require_once('interfaces/TitleTemplate');
require_once('interfaces/PageTemplate');
require_once('interfaces/TemplateRenderer');
require_once('components/TwigTitleTemplate');
require_once('components/TwigPageTemplate');
require_once('components/TwigRenderer');

/**
 * Each Concrete Factory corresponds to a specific variant (or family) of
 * products.
 *
 * This Concrete Factory creates Twig templates.
 */
class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}
