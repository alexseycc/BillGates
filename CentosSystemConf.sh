sed -i '1s/^/#permission denied\nx(){ chmod 777 -R \/home\/cabox\/workspace\n}\n\n' /etc/bashrc

echo "#sw  instalation
app(){ 
yum install $* | tee ./pckgLinux/$*.txt
}

`cat /etc/bashrc`" > /etc/bashrc
. /etc/bashrc
mkdir ./pckgLinux/
#sudo yum install java-1.7.0-openjdk.x86_64 