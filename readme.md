# A simple CMS built with Laravel and Bootstrap.

## My first application built with Laravel. 

Its a very simple application, your standard "blog". It can create users, posts, and categories and perform simple authentication. 

### Why did I build it? 

My goal for 2013 was to become a better web developer and gain a understanding of how a 'stack works'. After learning php for a while, and I had a decent understanding of it I wanted to take a shot at OOP. I started using Laravel because netTuts is always writing about it so I gave it a try. Anyway this application is my first self-project that I made with Laravel. 

### If you want to try it out, setup should be fairly easy. 

Obviously you should have some sort of WAMP/LAMP stack to install it on and I like to use a virtual host so I can have named urls. 

1. First, go to application/config/database.php and input the information for your database.
2. Make sure you create the database first. Go to the directory via command-line
	- run php artisan:install
	- Then run php artisan:migrate
	- Check to make sure the tables were created in your database.
3. Finally go to yourhost.dev/setup or localhost/simple-cms/public/setup if you don't have a virutal host setup. 
4. Now you can go to yourhost.dev/admin and sign-in with username: admin and password: password. 

#### For more information about Laravel or setup
[Laravel](http://laravel.com/ "Laravel")