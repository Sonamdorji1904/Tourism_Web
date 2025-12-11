<?php
class StringHelper
{
    public function safeDisplay($text)
    {
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
        $text = htmlspecialchars($text, ENT_NOQUOTES, 'UTF-8', false);
        return $text;
    }
}
