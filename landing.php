<?php
$categories_menu = $this->loadClass("category")->getList('a-z'); 
$this->addTwigVars("categories_menu", $categories_menu);
$cat = $this->loadClass('category');
$this->addTwigVars('cat', $cat);

// Render popular
$popular = $this->loadClass('project')->getHighlightedProject(3);
$popularProjects = array();
if (@$popular) {
    foreach ($popular as $k => $project) {
    	$popularProjects[] = $project->getProjectBox();
    	$_starred = $project->id;
    }
}

// Render projects
$this->addTwigVars('popularProjects', $popularProjects);


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
$this->addTwigVars('analytics', $analytics);
$this->addTwigVars('teamMembers', $this->loadClass("user")->getTeamMembers());


$template = $twig->loadTemplate('landing.twig');
echo $template->render($this->twigVars);

?>