<?php


namespace BridgePattern;


class HtmlFormatter implements FormatterInterface
{
    public function format(string $text)
    {
        // TODO: Implement format() method.
        return sprintf('<p>%s</p>',$text);
    }
}