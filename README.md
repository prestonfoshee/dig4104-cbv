# Installation Guide

## Requirements

- [PHP]
- [NPM]
- [MySQL]
- [GIT]

## Obtaining source code

1. In your terminal, change directories to where you'd like to save the project
2. Once in your desired directory, run “git clone https://github.com/prestonfoshee/dig4104-cbv.git”
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

3. In your terminal, run "npm install"
4. In your terminal, run "npm run dev" or "npm run watch"
5. To connect to the database, run "mysql -uroot -p" in your terminal, then press enter again when prompted for the password
6. Once inside the MySQL shell, run "create database cbv;"
7. Press CTRL + D to exit the MySQL shell
8. In your terminal, run "php artisan migrate" to create the tables in the DB

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
