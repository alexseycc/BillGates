if [ -z $1]
  echo entre com o tipo de pacote a ser baixado(rpm,deb,tar.gz)
else
  sh atualizador.sh
   case $1 in 
    deb)
      wget https://go.microsoft.com/fwlink/?LinkID=760680
      dpkg -i code*.deb
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
      ;;
    esac
fi