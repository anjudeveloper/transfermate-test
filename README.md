# PHP MVC TEST FOR TRANSFERMATE

1. Implement the coding in MVC Pattern or use design patterns 

2. Preferably Core PHP or any PHP frameworks 

3. Maintaining coding standards using Oops concept, adding XML comments, and implementing security is an added advantage.  


## Installing

Installation is simple. 
Run `composer install`
Add Database in PHP Myadmin, database file is in root folder with database.sql name
Add Database detials in config.php file inside config folder



## Explanation
To Create the table you can check the database.php inside the config folder function is created so if you want you can create table by funtion or i also attached the database.sql file so that you can import in PHPMyadmin
XML files are inside the assets/xml folder. 
Created a simple page with a search form (should search by author only from data base). 
Result printed right after search form. Search word populated to the input after submitting for better user experience. Result design requirements: rows slide from left to right one after another with some small animated delay. 
Data grid (result) display the author and assigned books. Please use single sql query.
For Cron job the route is created in web.php file inside the route folder with fetchxmlfeed named, that we can use for cron job with time. EX. *       *       *       *       *       /usr/bin/php path/to/function &> /dev/null

## Demo 
https://bitpixelguru.com/transfermate/?s=a