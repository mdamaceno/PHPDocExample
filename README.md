# PHPDocExample

## Usage

Firstly, run ``composer install`` to install the dependencies ([PHPDoc](https://www.phpdoc.org/) and [PHPUnit](https://phpunit.de/)).

## Tests

``
vendor/phpunit/phpunit/phpunit -c phpunit.xml
``

## Docs

To generate docs, run

``
vendor/phpdocumentor/phpdocumentor/bin/phpdoc -d ./src -t ./docs/app
``

## Contribution workflow

Here’s how we suggest you go about proposing a change to this project:

1. Fork this project to your account.
2. Create a branch for the change you intend to make.
3. Make your changes to your fork.
4. Send a pull request from your fork’s branch to our master branch.

Using the web-based interface to make changes is fine too, and will help you by automatically forking the project and prompting to send a pull request too.
