#sh node.sh
sh atualizador.sh

sh mysql.sh



# openssal
#mbstring
#pdo
#tokenizer
#xml
#php -m | egrep -w "openss"
installlaravel(){
#declare -a plugins
#unset plugins
plugins=(openssl mbstring pdo tokenizer xml)
#for i in ${plugins[@]};do ec^C $i;done;
for i in ${!plugins[@]};
do 
ext=`php -m | egrep -i -w ${plugins[$i]}`
php -m | egrep -w ${plugins[$i]}
if [ $? != 0 ]; then
#echo apt-get install ${plugins[$i]/${plugins[$i]}/$i}:${plugins[$i]} -y;
apt-get install php-$ext -y;
#echo echo $ext
fi
done




php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

php composer.phar global require "laravel/installer"

php composer.phar create-project --prefer-dist laravel/laravel PrjLrvl

php PrjLrvl/artisan serve
sudo chmod 777 -R ./PrjLrvl
}

installlaravel