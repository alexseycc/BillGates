. atualizador.sh
up
#read -p "url:" url
wget -c http://nodejs.org/dist/v0.12.4/node-v0.12.4.tar.gz
nd=`echo 'http://nodejs.org/dist/v0.12.4/node-v0.12.4.tar.gz' | rev | cut -d '/' -f 1 | rev`
tar -xf $nd
cd $nd
#apt-get instal phython3.6 -y
app phython3.6
. /$nd/configure