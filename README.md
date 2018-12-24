# mued-react-laravel

After cloning, run:

## 1.Setup project 


```bash
composer install
```

```bash
npm install
```

```bash
php artisan key:generate
```

## 2.Docker Mongo 

### Install docker image

```bash
docker run -d --name mongo -p 27017:27017 mongo
```

For run again:
```bash
docker up -d mongo
```

### Mongo GUI

go to url : https://adminmongo.markmoffat.com/docs/ 

go to title  `Using Git`

After Visit http://127.0.0.1:1234 in your browser

Add kbms(up to you) at Connection name  

Add mongodb://127.0.0.1:27017/kbms  at Connection string

Click button Add connection


## 3.Connect database 

in your `.env` file Add:

DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=kbms
DB_USERNAME=
DB_PASSWORD=

run command :

```bash
php artisan migrate
```

```bash
php artisan db:seed
```
refresh url http://127.0.0.1:1234 in your browser. see all table.

run command :

```bash
php artisan serve
``` 

go to url:  http://127.0.0.1:8000/login

user: choose one email in table users

password : secret
