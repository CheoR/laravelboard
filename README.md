
# Laravelboard

A web application aimed at assisting truck owners get loads and dispatchers find reliable trucks to transport loads.




## Installation

Install [Docker](https://docs.docker.com/get-docker/) if you don't already have it.

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file in the **root** and **src** directories.

```
// root
APP_PORT=INT
MYSQL_PORT=INT
MYSQL_DATABASE=STRING
MYSQL_USER=STRING
MYSQL_PASSWORD=STRING
MYSQL_ROOT_PASSWORD=STRING
PHP_PORT=INT
REDIS_PORT=INT
PHP_ADMIN=INT
PHP_PORT=INT
REDIS_PORT=INT
PMA_USER=STRING
PMA_PASSWORD=STRING
PMA_ROOT_PASSWORD=STRING
PMA_PORT=INT

// src
DB_HOST=STRING
DB_PORT=INT
DB_DATABASE=STRING
DB_USERNAME=STRING
DB_PASSWORD=STRING
```

## Run Locally

Clone the project

```bash
  git clone git@github.com:CheoR/laravelboard.git
```

If building project from scratch for the first time

```zsh
  $ [sudo] make setup
```

If already built project, to run

```zsh
  $ [sudo] make up
```

To down the images and delete containers

```zsh
 $ [sudo] make down
```

To stop the images but not delete the containers

```zsh

  $ [sudo] make stop
```


**To interact with images, first confirm containers are running.**

Typical way to interact with image is

```zsh
  $ [sudo] docker exec -it [imageName] bash
```

To interact with php/artisan e.g. make:model

```zsh
  $ [sudo] docker exec -it laravelboard-php-1 sh
  $ php artisan make:model <Name>
```

To interact with DB from command line

```zsh
  $ [sudo] docker exec -it laravelboard-mysql-1 bash
  # mysql -u workgigs -p

  Welcome to the MariaDB monitor.  Commands end with ; or \g.
  Your MariaDB connection id is
  Server version: 10.6.13-MariaDB-1:10.6.13+maria~ubu2004 mariadb.org binary distribution


  MariaDB [(none)]> SHOW DATABASES;
  +--------------------+
  | Database           |
  +--------------------+
  | information_schema |
  | workgigs           |
  +--------------------+
  2 rows in set (0.001 sec)
```
## Tech Stack

**Client:** Laravel, TailwindCSS

**Database:** MariaDB

**Framework:** Laravel

**Language:** PHP

**Tool:** Docker

## License

[MIT](https://choosealicense.com/licenses/mit/)


## Feedback

Feedbacks always welcomed! It's how I learn!

## 🔗 Links
[![portfolio](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://cheor.github.io/)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/cheo-roman/)
