sh atualizador.sh
wget --no-check-certificate https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/photon/M6/eclipse-jee-photon-M6-linux-gtk-x86_64.tar.gz

$file=`basename https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/photon/M6/eclipse-jee-photon-M6-linux-gtk-x86_64.tar.gz`

mv $file /opt
cd /opt
tar -xvf $file
#sudo vi /usr/share/applications/eclipse.desktop
echo "[Desktop entry]
Name=Eclipse
Type=Application
Exec=/opt/eclipse/eclipse
Terminal=false
Icon=/opt/eclipse/icon.xpm
Comment=IDE Eclipse
NoDisplay=false
Categories=Development;IDE;
" > /usr/share/applications/eclipse.desktop
desktop-file-install /usr/share/applications/eclipse.desktop
ln -s /opt/eclipse/eclipse /usr/local/bin
cp /opt/eclipse/icon.xpm /usr/share/pixmaps/eclipse.xpm