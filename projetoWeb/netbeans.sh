sh java.sh

#sudo add-apt-repository ppa:webupd8team/java -y
#sudo apt-get update -y
#sudo apt-get install oracle-java8-installer -y
#curl -O http://download.netbeans.org/netbeans/8.0/final/bundles/netbeans-8.0-linux.sh
wget -c --no-check-certificate https://dl.dropboxusercontent.com/content_link/VZQpQer2lmJ0eILRY2jxRrDt2q2PXuA8FPjb3MenhvUHjeE4wyscoQAlqkniNR1P/file?_download_id=176546459817299930347610339937584567393199849785550321128821858&_notify_domain=www.dropbox.com&dl=1
file=`http://download.netbeans.org/netbeans/8.0/final/bundles/netbeans-8.0-linux.sh | rev | cut -d/ -f1 | rev`
sh $file