<?php

declare(strict_types=1);

namespace WPZylos\Framework\I18n;

use WPZylos\Framework\Core\Contracts\ContextInterface;

/**
 * I18n loader.
 *
 * Handles loading translation files for a plugin.
 *
 * @package WPZylos\Framework\I18n
 */
class I18n
{
    /**
     * @var ContextInterface Plugin context
     */
    private ContextInterface $context;

    /**
     * @var bool Whether translations have been loaded
     */
    private bool $loaded = false;

    /**
     * Create i18n loader.
     *
     * @param ContextInterface $context Plugin context
     */
    public function __construct(ContextInterface $context)
    {
        $this->context = $context;
    }

    /**
     * Load translations.
     *
     * Calls load_plugin_textdomain with the correct paths.
     *
     * @return bool True if loaded successfully
     */
    public function load(): bool
    {
        if ($this->loaded) {
            return true;
        }

        // Derive languages path relative to the plugin directory
        $domain = $this->context->textDomain();
        $pluginRelPath = dirname(plugin_basename($this->context->file()));
        $languagesPath = $pluginRelPath . '/resources/lang';

        $this->loaded = load_plugin_textdomain(
            $domain,
            false,
            $languagesPath
        );

        return $this->loaded;
    }

    /**
     * Static loader for convenience.
     *
     * @param ContextInterface $context Plugin context
     * @return bool
     */
    public static function loadFor(ContextInterface $context): bool
    {
        return ( new self($context) )->load();
    }

    /**
     * Check if translations are loaded.
     *
     * @return bool
     */
    public function isLoaded(): bool
    {
        return $this->loaded;
    }

    /**
     * Get the MO file path.
     *
     * @param string $locale Locale code (e.g., 'de_DE')
     * @return string Full path to MO file
     */
    public function getMoFilePath(string $locale): string
    {
        return $this->context->path('resources/lang/' . $this->context->textDomain() . '-' . $locale . '.mo');
    }
}
