拼车网页版——php-mysql入门实例
# 前言
此项目实例主要实现用户拼车网页版的功能，包含登陆、注册、用户信息修改等基本功能，根据高德地图发布自己的空座位、查找墙上的空座位进行拼车、查找自己的行程及拼车记录。所有数据直接链接到数据库。

# 服务器环境要求 （如果是后端）
PHP 5.2.4或更新版本
MySQL 5.0或更新版本（导入carpool_test.sql数据库样式）
Apache mod_rewrite模块（固定链接）
服务器环境选择CentOS6.5版本64位的Linux操作系统

# 浏览器要求 （如果是前端，可能有些浏览器不能正常显示的）
IE6.0或更新版本，firefox，谷歌chrome，苹果safari

# 目录结构
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
目录分为assets、carpool、documentation和examples，其中assets主要包含css、js文件及img；carpool主要是处理前端传递的数据，包含对数据库的增删查改以及检查用户输入的数据；examples主要是作用是将数据结合UI界面进行前端的显示。


# 技术使用
php-mysql、html、CSS、js
