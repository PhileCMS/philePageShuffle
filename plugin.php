<?php

/**
 * Shuffle all the pages
 */

class PhilePageShuffle extends \Phile\Plugin\AbstractPlugin implements \Phile\EventObserverInterface {

	public function __construct() {
		\Phile\Event::registerEvent('template_engine_registered', $this);
	}

	private function shuffle_assoc($array) {
		$keys = array_keys($array);
		shuffle($keys);
		foreach($keys as $key) {
			$new[$key] = $array[$key];
		}
		return $new;
	}

	public function on($eventKey, $data = null) {
		if ($eventKey == 'template_engine_registered') {
			$data['data']['pages_shuffled'] = $this->shuffle_assoc($data['data']['pages']);
		}
	}
}
