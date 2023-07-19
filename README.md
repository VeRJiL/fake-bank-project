<style>
li {
    margin-top: 1rem;
}
</style>

## Fake Bank Project based on Laravel & MySQL

### Requirements

- PHP > 8.1.11
- mysql v8.0.27

### how to run the project

- If you are using Wamp/Xamp then you need to downlaod the folder to your www/htdocs respectively otherwise you can
  run `php artisan serve` in order to run the project
- Run `php artisan key:generate` to create a key for your project
- Copy `.env.example` and rename it to `.env` and `.env.testing` and change the content of them based on your local
  requriements. please consider using different database for testing. you can name the main database `fake-bank` and the
  test database `fake-bank-test`. You just need to put `DB_DATABASE=fake-bank` in the `.env` file
  and `DB_DATABASE=fake-bank-test` in the `.env.testing` file.
- There is a file name `Fake Bank Project.postman_collection.json`. Import this file to your post man collection and you
  can start using the apis. Don't forget to set the `IP` address ,which project is running, in the postman enviroment
  variable section. name of the enviroment variable is `fake-bank-url` which has a default value of `localhost`.
- in order to run the test, you need to run `php artisan test`.
- in order to migrate the tables and have fake data inside DB please run `php artisan migrate --seed`. if you want to
  create a specific user then you have to change the `DatabaseSeeder` class inside `database/seeders` folder. By default
  you can login with `username: 1234567890` and `password: admin1234` after running seeders. You will receive one custom
  user and 9 random user and each user has 3 bank accounts and each bank account has 5 transactions.
- you can run application using `php artisan serve` or create a Virtual Host.

### what should You look for!

- As a test project, I am trying to indicate how to handle basic scenarios, so you may find one example for some of the
  concepts
- you can find exception handling concept in `App\Excpetion\Handler`. I am customizing how to render
  a `NotFoundHttpException`.
- This folder structure is for medium size application and for larger applications I prefer `Domain` folder for
  handling `modular` approach
- This project is fully developed using TDD however there is no unit test because of time limit.
-

### future features

- Dockerise project.
- 100% test coverage.
- Include Unit test.
- Implement CI/CD using github actions or TravisCI.
- Optimize database structure for Transactions table.