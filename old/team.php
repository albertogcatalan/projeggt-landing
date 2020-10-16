<?php
// get all categories
$categories_menu = $this->loadClass("category")->getList('a-z');
$this->addTwigVars("categories_menu", $categories_menu);
$this->addTwigVars('teamMembers', $this->loadClass("user")->getTeamMembers());
//$this->addTwigVars('teamMembersJuntalia', $this->loadClass("user")->getTeamMembers('juntalia'));
//$this->addTwigVars('consultantsP', $this->loadClass("user")->getConsultants());

$this->addTwigVars('modeOther', "team");
$template = $twig->loadTemplate("other/team.twig");
echo $template->render($this->twigVars);