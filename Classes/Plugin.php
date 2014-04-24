<?php
/**
 * Plugin class
 */
namespace Phile\Plugin\Phile\PageShuffle;

/**
 * Shuffle all the pages
 */
class Plugin extends \Phile\Plugin\AbstractPlugin implements \Phile\Gateway\EventObserverInterface {

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
