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

	-> php artisan migrate:rollback
9) 	
	-> php artisan serve
	to see the website
10) install the authentication system

	-> composer require laravel/ui --dev

	-> php artisan ui vue --auth

this will give you the auth interface
to make it live you have to install js module
	
	-> npm install && npm run dev

11) after that you will find the login and registration 
	interface for the laravel page

12) laravel by default create the user database and the regitration will save the user in the user database

13) you dont have to make the user database cause it by default added

14) go to web.php you will see that there are routes in there
means all the route will be in routes/web.php

15) it will make a controller and route for the login and registration for goint to the /home

16) there are comment in the web.php and the HomeControllser.php
	for the explanation

17) now if the authentication is successfull then we have to redirect to home .you can redirect anywhere but 
the redirection is controlled in app/http/Middleware/RedirectifAuthenticated.php file

17) now if we want to add new registration criteria we have to 
	go to the authController 'app/http/Auth/RegisterController'
	but there was nothing there becasue it is inherited from the
	Controller.there is no register user function
	we have to go to the namespace using sublime or vscode
	because the main file is in the vendor directory so hard to find
18) if you go there you will find the function for creating users

19) now to add a field we have to create a field in the
template so go to the register.blade.php file

is under views/auth/register.php

20) adding a  div for the mobile field [just copy and paste and edit an column and rename everything like mobile]

21) go to the controller for that and edit the controller
22) go to validator and then add the column
23) just under the function another function name create add 
a entry to this column too
24) so validation is done create user is done now we have to make change in the database to store the data
	->php artisan make:migration <name>

	if you want to alter the user table then
	the name will be

	add_mobile_to_user_table [this is very very important]

in the name there should be mobile and user part
other wise laravel wont understand the which table altered

24) it will create the a migration file 
this migration file is actually a schema file now add the field

25) and then go to the user.php and add the fillable for mobile and 

you are done