<?php

require_once('models/Page.php');
require_once('models/factories/PhpTemplateFactory.php');

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PhpTemplateFactory());
