#sed -i '1s/^/#permission denied\nx(){ chmod 777 -R \/home\/cabox\/workspace\n}\n\n' /etc/bashrc


case $1 in
debian|ubuntu)
echo "
#atualizacso sw
up(){
apt-get update -y
}

dep(){
apt-get install -f -y

}
#permission denied
x(){ 
chmod 777 -R /home/cabox/workspace
}

#sw  instalation
app(){ 
apt-get install $* | tee ./pckgLinux/$*.txt
}

`cat /etc/bash.bashrc`" > /etc/bash.bashrc
. /etc/bash.bashrc
;;
centos)
echo "
#atualizacso sw
up(){
yum update -y
}

dep(){
yum install -f -y

}
#permission denied
x(){ 
chmod 777 -R /home/cabox/workspace
}

#sw  instalation
app(){ 
yum install $* | tee ./pckgLinux/$*.txt
}

`cat /etc/bash.bashrc`" > /etc/bashrc
. /etc/bashrc
;;


if [ -d pckgLinux ]; then
mkdir ./pckgLinux/
fi
#sudo yum install java-1.7.0-openjdk.x86_64 
