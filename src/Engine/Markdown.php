<?php

namespace Markdown\Engine;

use Parsedown;

class Markdown
{
  public static function toHtml($text)
  {
    return (new Parsedown())->text($text);
  }
}
