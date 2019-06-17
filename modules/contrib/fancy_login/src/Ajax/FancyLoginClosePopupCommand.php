<?php

namespace Drupal\fancy_login\Ajax;

use Drupal\Core\Ajax\CommandInterface;

class FancyLoginClosePopupCommand implements CommandInterface
{
	/**
	* Implements Drupal\Core\Ajax\CommandInterface:render().
	*/
	public function render()
	{
		return [
			'command' => 'fancyLoginClosePopup',
		];
	}
}
