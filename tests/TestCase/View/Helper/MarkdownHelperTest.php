<?php

namespace Markdown\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Markdown\View\Helper\MarkdownHelper;

class MarkdownHelperTest extends TestCase
{
  public $helper = null;

  public function setUp(): void
  {
    parent::setUp();
    $view = new View();
    $this->helper = new MarkdownHelper($view);
  }

  public function testBasicToHtml()
  {
    $this->assertEquals("<p>This is <strong>bold</strong></p>", $this->helper->toHtml('This is **bold**'));
    $this->assertEquals("<p>This is <em>italic</em></p>", $this->helper->toHtml('This is *italic*'));
    $this->assertEquals("<p>This is plain</p>", $this->helper->toHtml('This is plain'));
    $this->assertEquals('', $this->helper->toHtml(null));
  }

  public function testMultiLineToHtml()
  {
    $multiLineIn = <<<EOT
Hello,

World!
EOT;
    $multiLineOut = <<<EOT
<p>Hello,</p>
<p>World!</p>
EOT;
    $this->assertEquals($multiLineOut, $this->helper->toHtml($multiLineIn));
  }
}
