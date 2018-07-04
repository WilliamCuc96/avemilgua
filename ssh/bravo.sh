#!/bin/bash
#ssh -p 1022 cert@190.99.117.194
#/home/cert/opt/test/amm
#sshpass -p '123456' scp prueba@200.30.140.92:/var/log/top10/* ~/opt/test/amm/
#six@jammer:~/public_html# rsync -ave ssh  --delete greendome:~one/reports .
#sshpass -p 'sshpassword' rsync --progress -avz -e ssh test@remhost:~/something/ ~/bak/
#ssh host -l user “`cat cmd.txt`”
.
#sshpass -p '123456' rsync --progress -avz -e ssh prueba@200.30.140.92:/var/log/top10/ /home/cert/opt/a/

cd /home/pdaniels/opt

if [ -f /home/pdaniels/opt/inicio ];
  then
    echo "Sí, sí existe."
  else
    echo "No, no existe"
    touch inicio

    if ! $(ping -c 1 190.99.117.194 > /dev/null); then
        echo La máquina 190.99.117.194 no responde
    else
        echo La máquina 190.99.117.194 está ahí!
        sshpass -p '1q2w3e4r' scp -p 1022 cert@190.99.117.194:/home/cert/opt/test/amm/* /home/pdaniels/opt/a/
        sleep 2
        echo Termino de copiar!

        for archivos in /home/pdaniels/opt/a/*
        do
          mv $archivos /home/pdaniels/opt/b/.
          chmod 777 $archivos
        done
    fi


    rm inicio

fi

#--------------------------
#!/bin/bash

cd /home/cert/opt

if [ -f /home/cert/opt/inicio ];
  then
    echo "Sí, sí existe."
  else
    echo "No, no existe"
    touch inicio

    if ! $(ping -c 1 200.30.140.92 > /dev/null); then
        echo "La máquina 200.30.140.92 no responde"
    else
        echo "La máquina 200.30.140.92 está ahí!"
        sshpass -p '123456' rsync -e ssh -avzc prueba@200.30.140.92:/var/log/top10/ /home/cert/opt/a/
        echo "Termino de copiar!"
        #sshpass -p '123456' ssh prueba@200.30.140.92 -l user "mv /var/log/top10/* /var/log/top10/.procesados/."
        for archivos in /home/cert/opt/a/*
        do
          echo "!"
          mv $archivos /home/cert/opt/b/.
        done
        echo "Termino de mover!"
    fi

    rm inicio
    echo "Termono el proceso!"

fi


-----------------------
sed "1,16d" a.old > b.txt
sed -i "11,15d" b.txt
cut -c 1-10 b.txt > b1.txt
cat b1.txt | sed 's/^ *//g' > b1.txt
cat b1.txt | sed 's/ *$//g' > b1.txt
cut -c 12-23 b.txt > b2.txt
cat b2.txt | sed 's/^ *//g' > b2.txt
cat b2.txt | sed 's/ *$//g' > b2.txt
cut -c 25-33 b.txt > b3.txt
cat b3.txt | sed 's/^ *//g' > b3.txt
cat b3.txt | sed 's/ *$//g' > b3.txt
cut -c 35-37 b.txt > b4.txt
cat b4.txt | sed 's/^ *//g' > b4.txt
cat b4.txt | sed 's/ *$//g' > b4.txt
cut -c 39-56 b.txt > b5.txt
cat b5.txt | sed 's/^ *//g' > b5.txt
cat b5.txt | sed 's/ *$//g' > b5.txt
cut -c 58-62 b.txt > b6.txt
cat b6.txt | sed 's/^ *//g' > b6.txt
cat b6.txt | sed 's/ *$//g' > b6.txt
cut -c 67-82 b.txt > b7.txt
cat b7.txt | sed 's/^ *//g' > b7.txt
cat b7.txt | sed 's/ *$//g' > b7.txt
cut -c 84-88 b.txt > b8.txt
cat b8.txt | sed 's/^ *//g' > b8.txt
cat b8.txt | sed 's/ *$//g' > b8.txt
cut -c 90-97 b.txt > b9.txt
cat b9.txt | sed 's/^ *//g' > b9.txt
cat b9.txt | sed 's/ *$//g' > b9.txt
cut -c 99-106 b.txt > b10.txt
cat b10.txt | sed 's/^ *//g' > b10.txt
cat b10.txt | sed 's/ *$//g' > b10.txt
cut -c 108-112 b.txt > b11.txt
cat b11.txt | sed 's/^ *//g' > b11.txt
cat b11.txt | sed 's/ *$//g' > b11.txt
paste -d '|' b1.txt b2.txt b3.txt b4.txt b5.txt b6.txt b7.txt b8.txt b9.txt b10.txt b11.txt > b-1.txt
