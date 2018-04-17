#sed -i '1s/^/#permission denied\nx(){ chmod 777 -R \/home\/cabox\/workspace\n}\n\n' /etc/bashrc



echo "
#permission denied
x(){ 
chmod 777 -R /home/cabox/workspace
}

#sw  instalation
app(){ 
yum install $* | tee ./pckgLinux/$*.txt
}

`cat /etc/bash.bashrc`" > /etc/bash.bashrc
. /etc/bash.bashrc
if [ -f pckgLinux ]; then
mkdir ./pckgLinux/
fi
#sudo yum install java-1.7.0-openjdk.x86_64 