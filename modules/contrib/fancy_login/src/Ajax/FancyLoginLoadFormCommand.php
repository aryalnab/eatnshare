<?php

namespace Drupal\fancy_login\Ajax;

use Drupal\Core\Ajax\CommandInterface;

class FancyLoginLoadFormCommand implements CommandInterface
{
	protected $form;

	public function __construct(array $form)
	{
		$this->form = $form;
	}

	/**
	* Implements Drupal\Core\Ajax\CommandInterface:render().
	*/
	public function render()
	{
		return [
			'command' => 'fancyLoginLoadFormCommand',
			'form' => render($this->form),
		];
	}
}
