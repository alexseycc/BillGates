: '
cat a | head -2 | tail -1
head -2 shell/comment | tail -1
or 
sed -n 2p a.sh
sed -n 2p


'

case "$1" in
ubuntu | debian)
echo alx
;;
esac