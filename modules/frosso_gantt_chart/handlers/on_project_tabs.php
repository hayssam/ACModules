<?php

  /**
   * Frosso Project Tab module on_project_tabs event handler
   */
  
  /**
   * Handle on prepare project overview event
   *
   * @param NamedList $tabs
   * @param User $logged_user
   * @param Project $project
   * @param array $tabs_settings
   * @param string $interface
   */
function frosso_gantt_chart_handle_on_project_tabs(&$tabs, &$logged_user, &$project, &$tabs_settings, $interface) {
    if($interface == AngieApplication::INTERFACE_DEFAULT && Tasks::canAccess($logged_user, $project, false) && in_array('fred_gc', $tabs_settings)) {
	  	$tabs->addBefore('fred_gc', array(
	  			'text'	=> "FRosso GC",
	  			'url'	=> Router::assemble('frosso_gc_route', array('project_slug' => $project->getSlug())),
	  			'icon' => $interface == AngieApplication::INTERFACE_DEFAULT ?
	  			AngieApplication::getImageUrl('icons/16x16/tasks-tab-icon.png', TASKS_MODULE) :
	  			AngieApplication::getImageUrl('icons/listviews/tasks.png', TASKS_MODULE, AngieApplication::INTERFACE_PHONE)
	  			),
	  			'calendar'
	  			);
    } // if
} // frosso_gantt_chart_handle_on_project_tabs