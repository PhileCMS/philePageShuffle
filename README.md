philePageShuffle
================

Creates a new template variable, pages_shuffled, which contains a randomized array of pages.

### 1.1 Installation (composer)
```
php composer.phar require phile/pageshuffle:*
```

### 1.2 Installation (Download)

* Install the latest version of [Phile](https://github.com/PhileCMS/Phile)
* Clone this repo into `plugins/phile/pageShuffle`

### 2. Activation

After you have installed the plugin. You need to add the following line to your `config.php` file:

```
$config['plugins']['phile\\pageShuffle'] = array('active' => true);
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
