# 💻 Random password generator service


### Installation
`composer require rawelja/password-generator`

🚀 Once done, use PasswordGenerator::type($type)->generate() in your code.


You can use 3 different password types:
1. Weak and pass 1 to type()
2. Medium and pass 2 to type()
2. Strong and pass 3 to type()



## Tests

Tests are located under the `tests/` directory and are split into:

- Unit tests - Tests a single class or function
- Feature tests - Tests a feature (one or more classes/functions together)

Tests are run using the [PHPUnit](https://phpunit.de/) library.
[PCOV](https://github.com/krakjoe/pcov) is used for coverage report.
(PCOV is used instead of Xdebug for speed).

`composer test` or
`composer test-coverage`

