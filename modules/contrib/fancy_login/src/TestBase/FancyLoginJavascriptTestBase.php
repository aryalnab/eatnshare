<?php

namespace Drupal\fancy_login\TestBase;

use Drupal\FunctionalJavascriptTests\JavascriptTestBase;

/**
 * @group fancy_login
 */
class FancyLoginJavascriptTestBase extends JavascriptTestBase
{
	public function assertStatusCodeEquals($statusCode)
	{
		$this->assertSession()->statusCodeEquals($statusCode);
	}

	public function assertElementExists($selector)
	{
		$this->assertSession()->elementExists('css', $selector);
	}

	public function assertElementExistsXpath($selector)
	{
		$this->assertSession()->elementExists('xpath', $selector);
	}

	public function getHtml()
	{
		$this->assertEquals('', $this->getSession()->getPage()->getHTML());
	}

	public function clickByXpath($path)
	{
		$this->getSession()->getPage()->find('xpath', $path)->click();
	}

	public function fillTextValue($htmlID, $value)
	{
		if(preg_match('/^#/', $htmlID))
		{
			$htmlID = substr($htmlID, 1);
		}

		$this->getSession()->getPage()->fillField($htmlID, $value);
	}
}
