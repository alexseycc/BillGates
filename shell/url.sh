hello(){
echo im a
}

if [ ! -f alx ]; then
echo no exist file
fi
if [ ! -d alx ]; then
echo no exist dir
fi

url='http://pics.sitename.com/images/191211/mxKL17DdgUhcr.jpg'
file=`basename "$url"`
echo wget "$url" -O "$file"

echo 'http://www.test.com/abc/def/efg/file.jar ' | rev | cut -d '/' -f 1 | rev

echo wget http://pics.sitename.com/images/191211/mxKL17DdgUhcr.jpg -O `basename http://pics.sitename.com/images/191211/mxKL17DdgUhcr.jpg`