philePageShuffle
================

Creates a new template variable, pages_shuffled, which contains a randomized array of pages.

### Installation

*Download*

* Install [Phile](https://github.com/PhileCMS/Phile)
* [Download this repo](https://github.com/PhileCMS/philePageShuffle/archive/master.zip)
* Place it in the plugins folder
* Rename it to `philePageShuffle`

*git*

In the root of your Phile install:

`git clone https://github.com/PhileCMS/philePageShuffle plugins/philePageShuffle`

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins'] = array(
  'philePageShuffle' => array('active' => true)
);
```

### Usage

This plugin exposes a new variable to templates called, `pages_shuffled`. This array contains a shuffled (randomized) version of `pages`.

```html
<ul class="posts">
  {% for page in pages_shuffled %}
    <li><a href="{{ page.url }}">{{ page.title }}</a></li>
  {% endfor %}
</ul>
```
