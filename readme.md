# cakephp-markdown
View Helper Plugin for CakePHP 4.x that enables conversion of Markdown into HTML

***WHY?***

Because Markdown is super sexy and is a great way to allow for user-friendly editing with the HTML generated at runtime (or cached, or whatever you want to do)

***HOW?***

Just add the `Markdown.Markdown` Helper to your view and use it. Easy peasy.

## Requirements

* PHP 7.2+
* [CakePHP 4.x](https://cakephp.org)
* [erusev/Parsedown](https://github.com/erusev/parsedown)

## TOC
1. [Plugin Installation]()
2. [Usage]()
4. [Contributing]()

## Plugin Installation

This plugin is on Packagist which means it can be easily installed with Composer.

```
composer require cwbit/cakephp-markdown "~2.0"
```
Then simply load the plugin normally in your `config/bootstrap.php` file

```php
# in ../config/bootstrap.php - right after Plugin::load('Migrations') is fine!
Plugin::load('Markdown');
```

> Manual installation is neither supported nor recommended - just drop the `MarkdownHelper` in your `src\View\Helper` and change the namespaces and stuff.

## Usage

First, make sure you loaded the plugin (see above)

Then, Add the `MarkdownHelper` thru `AppView` or however you prefer to load helpers

```php
namespace App\View;

use Cake\View\View;

class AppView extends View
{
    public function initialize()
    {
        parent::initialize();
		# ..
        $this->loadHelper('Markdown.Markdown');
    }
}
```

Then, in a `Template` file, use the helper

```php
<div class="description">
	<?= $this->Markdown->toHtml($entity->description); ?>
</div>
```

## Contributing

If you'd like to contribute, please submit a PR with your changes!

Requests will be accepted more readily if they come complete with **TESTS** :D
