# shopping24 tests for potentially new employees

Welcome! This project contains some challenges for testing the skills of developers.

## Setup

### Clone the git repository to your machine

```bash
$ git clone git@github.com:shopping24/web-exercises-for-new-employees.git
```

### Install dependencies
The project is a laravel project. Install dependencies with composer and npm.

```bash
$ composer install
$ npm i
```

### Run Tests
This project validates your work with unit tests for both PHP and JS.

We created these handy npm scripts

```bash
$ npm run phpunit
$ npm run mocha
```


## Tasks

### PHP

#### FizzBuzz

##### Implement the methods
The class `App\FizzBuzz\FizzBuzz` extends the interface `App\FizzBuzz\FizzBuzzInterface`,
but the methods are not implemented yet.

FizzBuzz is a game at which people one after another count up a number,
but each time a number is dividable
- by 3 you say "Fizz"
- by 5 you say "Buzz"
- by both 3 and 5, you say "FizzBuzz"

Validate your the implementation with help of `Tests\Unit\FizzBuzzTest`.

#### Extend Collection Class with a `countBy` method
Implement a `countBy` method to Laravel's Collection Class
via a macro in the `App\Providers\CollectionMacrosServiceProvider`.

Validate your implementation with help of `Tests\Unit\CollectionMacrosTest`.

Useful resources:
- https://laravel.com/docs/5.7/providers
- https://laravel.com/docs/5.7/collections#extending-collections

##### REST API
To create a simple public REST API add a controller and its routes.  

Useful resources:
- https://laravel.com/docs/5.7/controllers
- https://laravel.com/docs/5.7/routing


### JS

#### Implement a `getUserEmails` function
When implemented correctly the js Unit Test `mailing.spec.js` should pass.

#### Implement a `transpose` function
When implemented correctly the JS Unit Test `arrayHelper.spec.js` should pass.
