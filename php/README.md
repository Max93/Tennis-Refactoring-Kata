# Refactoring
After refactoring the logic are inside an array of Feedbacks. In this way we don't need a lot of controls because we use the player's score like index.
The code now looks more understandable and clear.
Moreover this logic uncouple the string value from logic; this means that in few seconds we can change a feedback text or language without changing the core logic.

# Run the tests
1. Install [composer](https://getcomposer.org) locally:

	`curl -sS https://getcomposer.org/installer | php`
2. Install dependencies:

	`php composer.phar install`
3. Run the tests

	`./vendor/bin/phpunit`