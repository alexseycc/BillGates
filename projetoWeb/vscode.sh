file=`basename https://download.microsoft.com/download/3/7/1/37189942-C91D-46E9-907B-CF2B2DE584C7/dotnet-sdk-2.1.200-linux-x64.tar.gz`

if [ -z $1]
  echo entre com o tipo de pacote a ser baixado(rpm,deb,tar.gz)
else
  sh atualizador.sh
   case $1 in 
    deb)
 :'wget https://go.microsoft.com/fwlink/?LinkID=760680
      dpkg -i code*.deb
      wget https://download.microsoft.com/download/3/7/1/37189942-C91D-46E9-907B-CF2B2DE584C7/dotnet-sdk-2.1.200-linux-x64.tar.gz
      '   
      wget -O vscode-amd64.deb "https://go.microsoft.com/fwlink/?LinkID=760868"
sudo dpkg -i vscode-amd64.deb

      ;;
    rpm)
      wget https://go.microsoft.com/fwlink/?LinkID=760867
      rpm code*.rpm
      ;;
    tar|gz)
      wget https://go.microsoft.com/fwlink/?LinkID=620884
      tar xvf code*.tar
      sudo apt-get install gnome-panel 
      udo gnome-desktop-item-edit /usr/share/applications/ --create-new
      wget https://download.microsoft.com/download/3/7/1/37189942-C91D-46E9-907B-CF2B2DE584C7/dotnet-sdk-2.1.200-linux-x64.tar.gz
      tar xvf $file
    
    <<InstalacaoPackoteDotNet
    sudo sh -c 'echo "deb [arch=amd64] https://apt-mo.trafficmanager.net/repos/dotnet/ trusty main" > /etc/apt/sources.list.d/dotnetdev.list'
sudo apt-key adv --keyserver apt-mo.trafficmanager.net --recv-keys 417A0893
sudo apt-get -y update
sudo apt-get -y install dotnet-dev-1.0.0-preview2-003121
  InstalacaoPackoteDotNet
 :'
 sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys 417A0893
 ' 
  
      ;;
    esac
fi