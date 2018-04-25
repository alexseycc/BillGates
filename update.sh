#escrito por alexy mostovik
#atualizar packote
add(){
sudo apt-get install software-properties-common
sudo apt-get install python-software-properties
sudo apt-get install build-essential
#sudo add-apt-repository ppa:jonathonf/python-3.6

}

updt(){
echo "Dpkg::Options {
--force-confnew
#--force-confold
#--force-confdef
}
" > /etc/apt/apt.conf.d/local

apt-get update -y
#apt-get upgrade -y
sudo apt-get dist-upgrade -y
apt-get install nano -y
}




install(){
echo "#app install
app(){
apt-get install $* -y 
}

#permissao da pasta home
x(){
chmod 777 -R /home
} 

`cat /etc/bash.bashrc`" > /etc/bash.bashrc
. /etc/bash.bashrc
}


add
updt
install