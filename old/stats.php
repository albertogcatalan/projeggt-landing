<?php
// get all categories
$categories_menu = $this->loadClass("category")->getList('a-z'); 
$this->addTwigVars("categories_menu", $categories_menu);
$analytics = $this->loadClass('base_analytics');
				
// Render counters
$statsProjects = $analytics->getStatsProjects();
$this->addTwigVars('statsProjects', $statsProjects);

$statsPercent = $analytics->getStatsPercent();
$statsView = $analytics->getStatsView();
$statsPerContribution = $analytics->getStatPerContribution();
$this->addTwigVars('statsPercent', $statsPercent);
$this->addTwigVars('statsView', $statsView);
$this->addTwigVars('statsPerContribution', $statsPerContribution);

$statsALL = $analytics->getAllStats();
$this->addTwigVars('statsALL', $statsALL);

$cat = $this->loadClass('category');
$this->addTwigVars('cat', $cat);
$this->addTwigVars('analytics', $analytics);



$this->addTwigVars('modeOther', "stats");
$template = $twig->loadTemplate("other/stats.twig");
echo $template->render($this->twigVars);

?>