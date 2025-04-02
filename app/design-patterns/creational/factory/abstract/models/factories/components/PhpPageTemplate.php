<?php

require_once('abstracts/BasePageTemplate.php');

/**
 * The PHPTemplate variant of the whole page templates.
 */
class PhpPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content"><?= \$content; ?></article>
        </div>
        HTML;
    }
}
