<?php

namespace Markdown\View\Helper;

use Cake\View\Helper;
use Markdown\Engine\Markdown;

class MarkdownHelper extends Helper
{
    /**
     * Takes a string of markdown-formatted text and returns it as formatted HTML
     *
     * @param string|null $markdown string of markdown-formatted text
     * @return string of HTML
     */
    public function toHtml(?string $markdown): string
    {
        return Markdown::toHtml((string)$markdown);
    }
}
