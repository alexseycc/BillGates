
#sudo apt-get install python-software-properties
echo "Dpkg::Options {
--force-confnew
#--force-confold
#--force-confdef
}
" > /etc/apt/apt.conf.d/local


up(){
apt-get update -y
#apt-get upgrade -y
#sudo apt-get dist-upgrade -y
apt-get install nano bc -y
}


up