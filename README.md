# Installation Guide

## Requirements

- Git
- PHP
- Composer
- NPM
- MySQL

## Obtaining source code

1. In your terminal, change directories to where you'd like to save the project
2. Once in your desired directory, run “git clone https://github.com/prestonfoshee/dig4104-cbv.git"
3. run "cd dig4104-cbv" to switch to the project directory

## Starting the development server on your local machine

1. In the root of the project directory, create a .env file
2. Paste the following into the .env file:  

APP_NAME=Laravel  
APP_ENV=local  
APP_KEY=base64:W2Dy7doduWxthXaKVwC3abh1jzksk1aKzGxXhpOjcbI=  
APP_DEBUG=true  
APP_URL=http://localhost  

LOG_CHANNEL=stack  
LOG_DEPRECATIONS_CHANNEL=null  
LOG_LEVEL=debug  

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=cbv  
DB_USERNAME=root  
DB_PASSWORD=  

BROADCAST_DRIVER=log  
CACHE_DRIVER=file  
FILESYSTEM_DRIVER=local  
QUEUE_CONNECTION=sync  
SESSION_DRIVER=file  
SESSION_LIFETIME=120  

MEMCACHED_HOST=127.0.0.1  

REDIS_HOST=127.0.0.1  
REDIS_PASSWORD=null  
REDIS_PORT=6379  

MAIL_MAILER=smtp  
MAIL_HOST=mailhog  
MAIL_PORT=1025  
MAIL_USERNAME=null  
MAIL_PASSWORD=null  
MAIL_ENCRYPTION=null  
MAIL_FROM_ADDRESS=null  
MAIL_FROM_NAME="${APP_NAME}"  

AWS_ACCESS_KEY_ID=  
AWS_SECRET_ACCESS_KEY=  
AWS_DEFAULT_REGION=us-east-1  
AWS_BUCKET=  
AWS_USE_PATH_STYLE_ENDPOINT=false  

PUSHER_APP_ID=  
PUSHER_APP_KEY=  
PUSHER_APP_SECRET=  
PUSHER_APP_CLUSTER=mt1  

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"  
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"  

3. In your terminal, run "composer install"
4. run "npm install"
5. run "npm run dev" or "npm run watch"
6. run "php artisan db"
7. In the MySQL shell, run "create database cbv", then press CTRL + D to exit the shell
8. run "php artisan migrate --seed"
9. run "php artisan serve"