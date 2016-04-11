<?php

namespace Markdown\View\Helper;

use Cake\View\Helper;
use Parsedown\Parsedown;

class MarkdownHelper extends Helper
{
    /**
     * Takes a string of markdown-formatted text and returns it as formatted HTML
     * @param $markdown string of markdown-formatted text
     * @return string of HTML
     */
    public function toHtml($markdown)
    {
        $engine = new Parsedown();
        return $engine->text($markdown);
    }
}
