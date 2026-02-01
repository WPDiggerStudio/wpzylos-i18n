<?php

/**
 * PHPUnit bootstrap for i18n package.
 *
 * @phpcs:disable PSR1.Files.SideEffects
 */

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

// Mock WordPress i18n functions
if (!function_exists('__')) {
    function __(string $text, string $domain = 'default'): string
    {
        return $text;
    }
}

if (!function_exists('_e')) {
    function _e(string $text, string $domain = 'default'): void
    {
        echo $text;
    }
}

if (!function_exists('_n')) {
    function _n(string $single, string $plural, int $count, string $domain = 'default'): string
    {
        return $count === 1 ? $single : $plural;
    }
}

if (!function_exists('_x')) {
    function _x(string $text, string $context, string $domain = 'default'): string
    {
        return $text;
    }
}

if (!function_exists('load_plugin_textdomain')) {
    function load_plugin_textdomain(string $domain, bool $deprecated = false, string $path = ''): bool
    {
        return true;
    }
}

// Escaping functions
if (!function_exists('esc_html')) {
    function esc_html(string $text): string
    {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('esc_html__')) {
    function esc_html__(string $text, string $domain = 'default'): string
    {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('esc_attr__')) {
    function esc_attr__(string $text, string $domain = 'default'): string
    {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
}
