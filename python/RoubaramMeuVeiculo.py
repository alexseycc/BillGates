
import os;
import MySQLdb; # para o MySQL
DB="alx";
userDB="root";
passwdDB="";
hostDB="localhost";

con = MySQLdb.connect(hostDB, userDB, passwdDB, DB);
con.select_db(DB);


consulta = con.cursor();
consulta.execute("SELECT * FROM roubo");

'''

curr.execute('INSERT INTO roubo VALUES (?)', ('lancha'));

con = MySQLdb.connect(userDB, DB);
'''
os.system('cls||clear');
os.system("cat /etc/issue | cut -d' ' -f1,2");
print "Bem Vindos ao RobaramMeuVeiculo!.\nAqui vc podera ajudar a recuperar seu veculo roubado com alguns simples clicks.";


print" @@@@@@@@@@@@@@@@@";
print"@                 @";
print"@  1-cadastrar    @";
print"@  2-consultar    @";
print"@                 @";
print" @@@@@@@@@@@@@@@@@";
opt=input();
print "Let's talk about %s." % opt;
print'\n';
for row in consulta.fetchall():
    print row[0]

consulta.close();
