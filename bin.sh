svn --force add *
svn --force-log commit -m "$*,`date`"
sh compdata.sh
megacopy -l /home/cabox/workspace/billgates.git/trunk -r /Root/billgates.git/trunk 
