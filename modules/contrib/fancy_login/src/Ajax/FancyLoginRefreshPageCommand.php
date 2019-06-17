<?php

namespace Drupal\fancy_login\Ajax;

use Drupal\Core\Ajax\CommandInterface;

class FancyLoginRefreshPageCommand implements CommandInterface
{
	protected $closePopup;

	public function __construct($closePopup)
	{
		$this->closePopup = $closePopup;
	}

	/**
	* Implements Drupal\Core\Ajax\CommandInterface:render().
	*/
	public function render()
	{
		return [
			'command' => 'fancyLoginRefreshPage',
			'closePopup' => $this->closePopup,
		];
	}
}
