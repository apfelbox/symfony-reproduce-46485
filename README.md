Reproducer for #46485
=====================

This is a reproducer for [Symfony Issue #46485](https://github.com/symfony/symfony/issues/46485).

First: Installation
-------------------

```bash
composer install
```

Then configure your DB credentials.


Then: Reproduce
---------------

Start a message consumer

```bash
bin/console messenger:consume app
```

In a second terminal, register two test messages:

```bash
bin/console test
```
