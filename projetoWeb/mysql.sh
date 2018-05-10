installmysql(){
apt-get install apache2 -y
apt-get install php5 php5-mcryp libapache2-mod-php5 -y 
service apache2 restart
apt-get install mysql-server -y 
apt-get install php5-mysql phpmyadmin libapache2-mod-auth-mysql -y
#link phpmyadmin apache2
#ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
chmod 777 -R /var/www/
#ln -s /var/www/ .
service apache2 restart
}

