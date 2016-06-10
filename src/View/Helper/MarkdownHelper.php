<?php

namespace Markdown\View\Helper;

use Cake\View\Helper;
use Markdown\Engine\Markdown;

class MarkdownHelper extends Helper
{
    /**
     * Takes a string of markdown-formatted text and returns it as formatted HTML
     * @param $markdown string of markdown-formatted text
     * @return string of HTML
     */
    public function toHtml($markdown)
    {
        return Markdown::toHtml($markdown);
    }
}
