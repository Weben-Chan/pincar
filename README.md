# The ABC of PHP-MYSQL example

This project mainly realizes the user carpool web version of the function, contains the basic functions of login, registration, modify user information, according to the high moral map publishing, find the empty seat empty seat of your carpool, find their own travel and carpool records. All data is directly linked to the database.

## Links:

+ [Live Preview](http://119.29.190.31:8084/material-dashboard-master/examples/login.html)
+ [carpool official website(test)](http://119.29.190.31:8084/sbtp_16_blueapp/)

## What's included

Within the download you'll find the following directories and files:

```
material-dashboard/
├── assets/
|   ├── css/
|   |   ├── bootstrap.min.css
|   |   ├── material-dashboard.css
|   |   └── demo.css
|   ├── js/
|   |   ├── bootstrap-notify.js
|   |   ├── bootstrap.min.js
|   |   ├── chartist.min.js
|   |   ├── demo.js
|   |   ├── jquery-3.1.0.min.js
|   |   ├── material-dashboard.js
|   |   └── material.min.js
|   ├── sass/
|   |    ├── md
|   |    └── material-dashboard.scss
|   └── img/
├── carpool/
|   ├── addseats.php/
|   ├── delseats.php/
|   ├── editseats_server.php/
|   ├── edituser_server.php/
|   ├── logincheck.php/
|   ├── pincar.php/
|   ├── pincar_server.php/
|   ├── regcheck.php/
|   ├── sqlconfig.php/
├── documentation/
├── examples/
|   ├── addseats.php/
|   ├── allseats.php/
|   ├── down_app.php/
|   ├── editseats.php/
|   ├── login.html/
|   ├── maps.php/
|   ├── my_car.php/
|   ├── reguser.html/
|   ├── schedule.php/
|   ├── seats_supply.php/
|   ├── sqlconfig.php/
|   ├── user.php/
├── carpool_test.sql

```
The directory is divided into assets、carpool、documentation and examples, assets of which mainly contains CSS,js documents and img; carpool is the main processing front-end transfer data, including the database crud and check the data input by the user; examples is the main function is to display the data with UI interface for front-end,mainly for html display show.

### Version Requirement

PHP, 5.2.4, or newer version
MySQL 5 or newer version(Import carpool_test.sql database styles)
Apache mod_rewrite module (fixed link)
The server environment selects the CentOS6.5 version of the 64 bit Linux operating system

### browser request 

IE6.0 or newer version, Firefox, Google chrome, apple Safari  (if it is the front, there may be some browsers can't display properly)

### engineering service

php-mysql、html、CSS、js
For beginners to learn and to use.

### License

- Copyright 2017 esquel GEK/PE (http://www.esquel.com/en/)


