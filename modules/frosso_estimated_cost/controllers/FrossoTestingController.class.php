<?php
// Build on top of reports module
AngieApplication::useController('reports', REPORTS_FRAMEWORK_INJECT_INTO);

class FrossoTestingController extends ReportsController {

	/**
	 * Index action
	 */
	function index() {
		$mil = new RemediaMilestone(47985);

// 		$defJobType = JobTypes::findById(1);
// 		$mil->tracking()->setEstimate(2, $defJobType, "Commento", $this->logged_user);


		print_r($mil->tracking()->getEstimate());
		$this->smarty->assign(array('val'=>$mil->tracking()->getEstimate()->getValue()));

	}

}