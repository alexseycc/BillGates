#alexsey rebouças
dt=`date +%d_%m_%y.php`
arquivos=(`ls *.php *.sh`);tamanhoarray=${#arquivos[*]}
arq=`ls *.php *.sh`

arqflt=(`gd list | egrep -w 'php.|sh.' | cut -d' ' -f1 | sort -r`);arqcont=${#arqflt[*]}
arqfilter=(`gd list | egrep -w 'php.|sh.' | cut -d' ' -f4 | sort | uniq`);arqcount=${#arqfilter[@]}

 gd mkdir echo `cd ..;pwd`
#for x in $(eval echo {0..$((arqcont-1))});do
#if [ "${arquivos[$x]}" == "${arqfilter[$x+1]}" ]; then 
#echo ${arqfilter[(($x+1))]}"="${arquivos[$x]}
#echo ${arqfilter[(($x-1))]}"="${arquivos[$x]}
#gd update ${arqfilter[(($i-1))]} ${arquivos[$i]}
#fi
#done
#done
clear
echo "##list existents files remotlly"
if [ $arqcount -gt 0 ]; then
for x in $(eval echo {0..$((arqcount-1))});do
echo ${arqfilter[(($x))]} 
done
else
echo
fi


echo -e "\n\n\n"
echo "#list existents files locally"
if [ $tamanhoarray > 0 ]; then
for x in $(eval echo {0..$((tamanhoarray-1))});do
echo ${arquivos[$x]}
done
else
echo
fi


echo -e "\n\n\n"
echo "#list id gdrive from files"
if [ $arqcont -gt 0 ]; then
for x in $(eval echo {0..$((arqcont-1))});do
echo ${arqflt[$x]}
done
else
echo
fi


echo -e "\n\n\n"
#condition test
for x in $(eval echo {0..$((tamanhoarray-1))});do
if [ "${arqfilter[$x]}" == "${arquivos[$x]}" ]; then
gd update ${arqflt[$x]} ${arquivos[$x]}
else
gd upload ${arquivos[$x]}
fi
done
#fi
