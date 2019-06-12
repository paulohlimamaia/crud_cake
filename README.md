# CakePHP CRUD Application

A small CRUD with CSV export application with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Pré requisitos:

- PHP >= 7.2
- PDO PHP Extension
- PostgreSQL User postgres with password 'senha'

## Installation (Dev Server)
Run commands bellow in order.

1. git clone git@github.com:paulohlimamaia/crud_cake.git
2. cd crud_cake
3. sudo -u postgres psql

After Entering pgSql:

4. CREATE DATABASE crud_tmx OWNER postgres ENCODING 'UTF-8';

5. \c crud_tmx

6. \i crud_tmx.sql

7. exit


After Exiting pgSql:

8. composer install

9. bin/cake server

Check the PORT of the server.
Acess in browser http://localhost:PORT/
