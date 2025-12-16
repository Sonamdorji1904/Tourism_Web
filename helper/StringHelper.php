<?php
class StringHelper
{
    public function safeDisplay($text)
    {
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
        $text = htmlspecialchars($text, ENT_NOQUOTES, 'UTF-8', false);
        return $text;
    }

    /**
     * Create a URL-safe slug from a string
     */
    public function slugify(string $text): string
    {
        $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
        $slug = preg_replace('/[^a-z0-9]+/i', '-', strtolower($text));
        $slug = trim($slug, '-');
        return $slug;
    }
}
