#permission denied
sed -i '1s/^/x(){ chmod 777 -R \/home\/cabox\/workspace\n}\n\n/' /etc/bashrc

#install sw
sed -i '1s/^/\n\napp(){ yum install $* -y\n}\n\n/' /etc/bashrc

. /etc/bashrc