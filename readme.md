capture_buffer
==============

Capture output buffer from PHP script.

Installation
============

**capture_buffer** lives on [packagist.org][packagist]

```
$ composer require donut/capture_buffer
```

Usage
=====

```php
<?php require "vendor/autoload.php";

$out = \Donut\Util\capture_buffer($filename);
```

API
===

**capture_buffer(** string `$filename` **)**

Uses PHP [ob_start][ob_start] and [ob_get_clean][ob_get_clean] to capture buffer
of a [required][require] script.

Example
=======

**donut.php**

```php
<?php echo "donuts!";
```

**example.php**

```php
<?php

$buffer = capture_buffer("donut.php");

var_dump($buffer);
```

Output

```plain
string(7) "donuts!"
```

Attribution
===========

* duchess <code@donut.club>
* Donut&reg; Club <http://github.com/donutclub>

License
=======

BSD 3-Clause

[packagist]: http://packagist.org/packages/donut/capture_buffer
[ob_start]: http://php.net/manual/en/function.ob-start.php
[ob_get_clean]: http://php.net/manual/en/function.ob-get-clean.php
[require]: http://php.net/manual/en/function.require.php
