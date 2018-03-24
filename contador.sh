dt=`date +%d_%m_%y.php`
arquivos=(`ls *.php`)
tamanhoarray=${#arquivos[*]}

arqfilter=(`gd list | egrep -w php. | cut -d' ' -f1-5`)
arqcont=${#arqfilter[*]}

idgoogle=(`gd list | egrep ${arquivos[tamanhoarray-2]} | cut -d' ' -f1-5`)
idgooglefilter=(`gd list | egrep $dt | cut -d' ' -f1-5`)


if [ -f "a.php" -eq 0]; then
clear
echo existe
else
echo noexiste
fi
