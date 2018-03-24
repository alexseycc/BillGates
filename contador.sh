dt=`date +%d_%m_%y.php`
arquivos=(`ls *.php`)
tamanhoarray=${#arquivos[*]}

arqfilter=(`gd list | egrep -w php. | cut -d' ' -f1-5`)
arqcont=${#arqfilter[*]}

idgoogle=(`gd list | egrep ${arquivos[tamanhoarray-2]} | cut -d' ' -f1-5`)
idgooglefilter=(`gd list | egrep $dt | cut -d' ' -f1-5`)


for i in $(eval echo {0..$((tamanhoarray-1))});do
for x in $(eval echo {0..$((arqcont-1))});do
if [ ${arquivos[$i]} == ${arqfilter[$x]} ]; then 
gd update ${arqfilter[(($x-1))]} ${arquivos[$i]}
fi
done
done
