<?php

namespace Drupal\fancy_login\Form;

use Drupal\user\Form\UserPasswordForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\AppendCommand;
use Drupal\fancy_login\Ajax\fancyLoginClosePopupCommand;

class FancyLoginPasswordForm extends UserPasswordForm
{
	
	/**
	 * {@inheritdoc}
	 */
	public function getFormID()
	{
		return 'fancy_login_user_pass';
	}
}
