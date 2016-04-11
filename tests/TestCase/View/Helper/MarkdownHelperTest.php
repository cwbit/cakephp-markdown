<?php

namespace Markdown\Test\TestCase\View\Helper;

use Markdown\MarkdownHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

class MarkdownHelperTest extends TestCase
{
  public $helper = null;

  public function setUp()
  {
    parent::setUp();
    $view = new View();
    $this->helper = new MarkdownHelper($view);
  }

  public function testToHtml()
  {
    $this->assertEquals("<p>This is <strong>bold</strong></p>", $this->helper()->toHtml('This is **bold**'));
    $this->assertEquals("<p>This is <em>italic</em></p>", $this->helper()->toHtml('This is *italic*'));
    $this->assertEquals("<p>This is plain</p>", $this->helper()->toHtml('This is plain'));
    $this->assertEquals("<p>Hello,</p><p>World!</p>", $this->helper()->toHtml('Hello,\n\nWorld!'));
  }
}
