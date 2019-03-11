Sorter
======

[![Sorter](https://img.shields.io/badge/PHP%20Advanced-ITEA-red.svg)](#sorter)

This is simple library for sorting array of data.

Usage
-----

Basic

```php
$sorter = SorterFactory::create();
$sorter->sort($data),
```

Different sort strategies

```php
$factory = new StrategyFactory();

$sorter->setSortStrategy($factory->createAsc());
$sorter->sort($data);

$sorter->setSortStrategy($factory->createDesc());
$sorter->sort($data);
```

Tests
-----

You can run tests with following command

```bash
$ ./tests/run
```


Code style fixer
----------------


To fix the code style just run the following command

```
$ composer cs-fix
```

License
-------

[![license](https://img.shields.io/github/license/greeflas/default-project.svg)](LICENSE)

This project is released under the terms of the BSD-3-Clause [license](LICENSE).

Copyright (c) 2020, Volodymyr Kupriienko
