#permission denied
sed -i '1s/^/x(){ chmod 777 -R \/home\/cabox\/workspace\n}/' /etc/bashrc

#install sw
sed -i '1s/^/app(){ yum install $* -y\n}/' /etc/bashrc
