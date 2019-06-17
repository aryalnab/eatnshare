<?php
 
namespace Drupal\fancy_login\Controller;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormBuilder;
use Drupal\fancy_login\Ajax\FancyLoginLoadFormCommand;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FancyLoginController extends ControllerBase implements FancyLoginControllerInterface
{
	/**
	 * The form buidler service
	 *
	 * @var \Drupal\Core\Form\FormBuilder
	 */
	protected $formBuilder;

	/**
	 * {@inheritdoc}
	 */
	public static function create(ContainerInterface $container)
	{
		return new static
		(
			$container->get('form_builder')
		);
	}

	/**
	 * Constructs the FancyLoginController object
	 *
	 * @param \Drupal\Core\Form\FormBuilder $formBuilder
	 *   The form builder service
	 */
	public function __construct(FormBuilder $formBuilder)
	{
		$this->formBuilder = $formBuilder;
	}

	/**
	 * {@inheritdoc}
	 */
	 public function ajaxCallback($type)
	 {
		 $response = new AjaxResponse();

		switch($type)
		{
			case "password":
				$form = $this->formBuilder->getForm('Drupal\fancy_login\Form\FancyLoginPasswordForm');

				break;

			case "login":
				$form = $this->formBuilder->getForm('Drupal\fancy_login\Form\FancyLoginLoginForm');
				unset($form['#prefix'], $form['#suffix']);

				break;
		}

		$response->addCommand(new FancyLoginLoadFormCommand($form));

		return $response;
	}
}
