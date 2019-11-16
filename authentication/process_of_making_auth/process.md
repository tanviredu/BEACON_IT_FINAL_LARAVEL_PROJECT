1) make the database manually name the lara_class
2) and then install the laravel inside the project in home directory
3) you have to create the database manually
4) database name is your choide in this project is 'lara_class'
5) make in php myadmin
6) go to the .env file and then set the database name
	DB_DATABSE =lara_class 
7) then immidiately migrate the database
	=>php artisan migrate
8) if you want to rollback
	->php artisan migrate:rollback
9) 	->php artisan serve
	to see the website
10) install the authentication system

	->composer require laravel/ui --dev

	->php artisan ui vue --auth

this will give you the auth interface
to make it live you have to install js module
	
	->npm install && npm run dev

11) after that you will find the login and registration 
	interface for the laravel page

12) laravel by default create the user database and the regitration will save the user in the user database

13) you dont have to make the user database cause it by default added

14) go to web.php you will see that there are routes in there
means all the route will be in routes/web.php

15) it will make a controller and route for the login and registration for goint to the /home