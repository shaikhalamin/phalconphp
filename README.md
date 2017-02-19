# phalconphp installation in ubuntu

//apache mysql environment setup in ubuntu
```
1.sudo apt-get install apache2
2.mysql-->sudo apt-get install mysql-server
3.php-->sudo apt-get install php5 libapache2-mod-php5
4.phpmyadmin-->sudo apt-get install phpmyadmin
5.sudo apt-get install curl
6.sudo apt-get install git
7.sudo apt-get install php5-curl
8.curl -sS https://getcomposer.org/installer | php
9.sudo mv composer.phar /usr/local/bin/composer
10.sudo chmod +x /usr/local/bin/composer
11.sudo php5enmod mcrypt //do not need for ubuntu 16.04
12.sudo service apache2 restart
```
#how to use .htaccess file in your php project or how to enable rewrite mode in ubuntu
```
sudo a2enmod rewrite
sudo service apache2 restart
```
//now open default.conf file and put all content including directory tag on it.
```
sudo gedit /etc/apache2/sites-available/000-default.conf

<Directory /var/www/>
            Options Indexes FollowSymLinks MultiViews
            # changed from None to FileInfo
            AllowOverride FileInfo
            Order allow,deny
            allow from all
</Directory>

sudo service apache2 restart
```



#phalcon environment setup in ubuntu
```
1.sudo apt-get install php5-dev libpcre3-dev gcc make php5-mysql
2.git clone git://github.com/phalcon/cphalcon.git     [this will take time and be patient]
3.cd cphalcon/build
4.sudo ./install
```
//now create the following file with the following content
```
1. sudo gedit /etc/php5/apache2/conf.d/30-phalcon.ini
 now put extension=phalcon.so in /etc/php5/apache2/conf.d/30-phalcon.ini

2. sudo service apache2 restart
```
//phalcon dev tools install ubuntu
```
cd /opt/
git clone https://github.com/phalcon/phalcon-devtools.git
cd phalcon-devtools
./phalcon.sh
```
//now create a 30-phalcon.ini for php cli as following
```
sudo gedit /etc/php5/cli/conf.d/30-phalcon.ini
and put extension=phalcon.so  in 30-phalcon.ini
sudo service apache restart
phalcon commands
```

#N.B: make sure give the following command after creating phalcon project using dev-tools
```
cd "projectdir"
sudo chmod 777 -R cache/

``` 
