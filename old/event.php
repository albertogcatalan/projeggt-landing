<?php

// get all categories
$categories_menu = $this->loadClass("category")->getList('a-z');   
$this->addTwigVars("categories_menu", $categories_menu);
$this->addTwigVars('modeOther', "event");
$template = $twig->loadTemplate("other/event.twig");
echo $template->render($this->twigVars);