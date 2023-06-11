<?php

class FormatHtml implements FormatterInterface
{

    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}