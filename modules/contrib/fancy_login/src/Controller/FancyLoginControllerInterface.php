<?php
 
namespace Drupal\fancy_login\Controller;

use Drupal\Component\Serialization\Json;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

interface FancyLoginControllerInterface
{
	/**
	 * Provides the ajax callback response for the Fancy Login module
	 */
	 public function ajaxCallback($type);
}
