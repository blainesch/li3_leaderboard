<?php

namespace li3_leaderboard\controllers;

use lithium\core\Libraries;
use li3_leaderboard\models\StatsPresenter;

class LeaderboardController extends \lithium\action\Controller {

	/**
	 * Define application view paths
	 */
	protected function _init() {
		$this->_render['renderer'] = 'File';
		$this->_render['paths']['template'] = '{:library}/views/{:controller}/';
		$this->_render['paths']['template'] .= '{:template}.{:type}.php';
		$this->_render['paths']['layout'] = '{:library}/views/layouts/default.{:type}.php';
		$this->_render['paths']['element'] = '{:library}/views/elements/{:template}.html.php';
		parent::_init();
	}

	public function index() {

		$title = 'Testing Leaderboard';

		$options = Libraries::get('li3_leaderboard');

		$data = StatsPresenter::find('all', $options);

		return compact('data', 'title');
	}

}

?>