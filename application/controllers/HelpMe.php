<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Helpme extends Application
{
	/**
	 * Helpwelcome page for this controller.
	 * Converts the MD file to html
	 *
	 * Maps to the following URL
	 * 		http://example.com/helpme
	 */
	public function index() {
		$this->data['pagetitle'] = 'Help Wanted!';
		$stuff = file_get_contents('../data/jobs.md');
		$this->data['content'] = $this->parsedown->parse($stuff);
		$this->render();
	}

}
