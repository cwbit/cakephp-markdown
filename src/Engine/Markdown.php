<?php

namespace Markdown\Engine;

use Parsedown;

class Markdown
{
  public static function toHtml(string $text): string
  {
    return (new Parsedown())->text($text);
  }
}
