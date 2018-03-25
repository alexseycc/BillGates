#atualizar arquivos no googledrive

dt=`date +%d_%m_%y.php`
arquivos=(`ls *.php`)
arq=`ls *.php`
tamanhoarray=${#arquivos[*]}

arqfilter=(`gd list | egrep -w php. | cut -d' ' -f1-5`)
arqcont=${#arqfilter[*]}

idgoogle=`gd list | grep -w "php." | cut -d' ' -f4`
echo $idgoogle $arq > files.txt
tr " " "\n" < files.txt > file.txt 
sort file.txt > files.txt
uniq -u files.txt > file.txt

idgooglefilter=(`gd list | egrep $dt | cut -d' ' -f1-5`)

if [ -f "$dt" ]; then
clear
gd upload $dt
else
clear
echo $((arqcont/2))

#controle dos arquivos existentes no drive
#se forem iguais atuale caso contrario
#upload

for i in $(eval echo {0..$((tamanhoarray-1))});do
for x in $(eval echo {0..$((arqcont-1))});do
if [ "${arquivos[$i]}" == "${arqfilter[(($x+1))]}" ]; then 
echo ${arqfilter[(($x))]} ${arquivos[$i]}
gd update ${arqfilter[(($x))]} ${arquivos[$i]}
fi
done
done
fi