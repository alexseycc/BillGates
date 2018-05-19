sh java.sh

#sudo add-apt-repository ppa:webupd8team/java -y
#sudo apt-get update -y
#sudo apt-get install oracle-java8-installer -y
#curl -O http://download.netbeans.org/netbeans/8.0/final/bundles/netbeans-8.0-linux.sh
wget --no-check-certificate -c https://www.dropbox.com/s/uadiiguv19tu9r9/netbeans-8.0-linux.sh
file=`http://download.netbeans.org/netbeans/8.0/final/bundles/netbeans-8.0-linux.sh | rev | cut -d/ -f1 | rev`
sh $file