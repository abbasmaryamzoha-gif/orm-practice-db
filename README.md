#INSTRUCTIONS
1 install laravel globally with Composer:
composer global require laravel/installer

2 create a laravel project

3 start mysql

4 configure new project's env file to use mysql
these are mysql's default ip and credentials
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306
DB_DATABASE=orm_practice_db
DB_USERNAME=root
DB_PASSWORD=

5 php artisian migrate
this command allows you to modify the mysql database using program code instead of writing it manually