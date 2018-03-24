svn --force add *
svn --force-log commit -m "$*,`date`"
sh compdata.sh
megacopy -l /home/cabox/workspace/billgates.git -r /Root/billgates.git 
