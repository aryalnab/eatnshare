<?php

namespace Drupal\fancy_login\Ajax;

use Drupal\Core\Ajax\CommandInterface;

class FancyLoginRedirectCommand implements CommandInterface
{
	protected $closePopup;
	protected $destination;

	public function __construct($closePopup, $destination)
	{
		$this->closePopup = $closePopup;
		$this->destination = $destination;
	}

	/**
	* Implements Drupal\Core\Ajax\CommandInterface:render().
	*/
	public function render()
	{
		return [
			'command' => 'fancyLoginRedirect',
			'closePopup' => $this->closePopup,
			'destination' => $this->destination,
		];
	}
}
