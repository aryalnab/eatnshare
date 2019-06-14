<?php

namespace Drupal\fancy_login\Form;

use Drupal\user\Form\UserLoginForm;
use Drupal\Core\Form\FormStateInterface;

class FancyLoginLoginForm extends UserLoginForm
{
	
	/**
	 * {@inheritdoc}
	 */
	public function getFormID()
	{
		return 'fancy_login_user_login_form';
	}
}
