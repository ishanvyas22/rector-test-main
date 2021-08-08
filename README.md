# My first rector test rule

**Reference:** https://github.com/rectorphp/rector/blob/main/docs/create_own_rule.md

## Installation

```sh
git clone git@github.com:ishan-biztech/rector-test.git
cd rector-test
composer install
```

## Refactor Your Code with Rector

```sh
# see the diff first
vendor/bin/rector process src --dry-run

# if it's ok, apply
vendor/bin/rector process src
```