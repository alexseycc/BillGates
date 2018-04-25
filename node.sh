#read -p "url:" url
wget -c http://nodejs.org/dist/v0.12.4/node-v0.12.4.tar.gz
nd=`echo 'http://nodejs.org/dist/v0.12.4/node-v0.12.4.tar.gz' | rev | cut -d '/' -f 1 | rev`
tar -xf $nd
cd $nd
sudo apt-get install build-essential
#sudo apt-get install software-properties-common
#sudo add-apt-repository ppa:jonathonf/python-3.6
apt-get install phython3.6 -y
. /$nd/configure