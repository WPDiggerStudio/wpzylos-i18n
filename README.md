# WPZylos I18n

[![PHP Version](https://img.shields.io/badge/php-%5E8.0-blue)](https://php.net)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)
[![GitHub](https://img.shields.io/badge/GitHub-WPDiggerStudio-181717?logo=github)](https://github.com/WPDiggerStudio/wpzylos-i18n)

Internationalization wrapper for WPZylos framework.

📖 **[Full Documentation](https://wpzylos.com)** | 🐛 **[Report Issues](https://github.com/WPDiggerStudio/wpzylos-i18n/issues)**

---

## ✨ Features

- **Text Domain Loading** — Automatic text domain registration
- **Translation Helpers** — Plugin-scoped `__()` and `_e()` wrappers
- **Context Awareness** — Uses plugin text domain automatically
- **Pluralization** — Handle singular/plural forms

---

## 📋 Requirements

| Requirement | Version |
| ----------- | ------- |
| PHP         | ^8.0    |
| WordPress   | 6.0+    |

---

## 🚀 Installation

```bash
composer require wpdiggerstudio/wpzylos-i18n
```

---

## 📖 Quick Start

```php
use WPZylos\Framework\I18n\Translator;

$translator = new Translator($context);

// Translate strings
echo $translator->__('Hello World');
echo $translator->_n('One item', '%d items', $count);
```

---

## 🏗️ Core Features

### Translation Methods

```php
// Simple translation
$label = $translator->__('Settings');

// Echo translation
$translator->_e('Save Changes');

// Pluralization
$message = $translator->_n(
    'You have %d item',
    'You have %d items',
    $count
);

// With context
$text = $translator->_x('Post', 'noun');
```

### Text Domain Loading

```php
// Automatically loads from languages/ directory
// my-plugin/languages/my-plugin-{locale}.mo
$translator->load();
```

---

## 📦 Related Packages

| Package                                                                | Description            |
| ---------------------------------------------------------------------- | ---------------------- |
| [wpzylos-core](https://github.com/WPDiggerStudio/wpzylos-core)         | Application foundation |
| [wpzylos-scaffold](https://github.com/WPDiggerStudio/wpzylos-scaffold) | Plugin template        |

---

## 📖 Documentation

For comprehensive documentation, tutorials, and API reference, visit **[wpzylos.com](https://wpzylos.com)**.

---

## ☕ Support the Project

If you find this package helpful, consider buying me a coffee! Your support helps maintain and improve the WPZylos ecosystem.

<a href="https://www.paypal.com/donate/?hosted_button_id=66U4L3HG4TLCC" target="_blank">
  <img src="https://img.shields.io/badge/Donate-PayPal-blue.svg?style=for-the-badge&logo=paypal" alt="Donate with PayPal" />
</a>

---

## 📄 License

MIT License. See [LICENSE](LICENSE) for details.

---

## 🤝 Contributing

Contributions are welcome! Please see [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines.

---

**Made with ❤️ by [WPDiggerStudio](https://github.com/WPDiggerStudio)**
