#!/bin/sh
cd /home/cert/opt/insayd_ssh
wget -O data1.txt "http://localhost/cyberseg/data1.txt"

sleep 40

sed -e '1d' data1.txt > data2.txt
sed -e '/^$/d' data2.txt > data3.txt
tr -s " " < data2.txt > data3.txt
tr ' ' '|' < data3.txt > data4.txt
cut -d '|' -f 7 data4.txt > inicio.txt
cut -c 1 inicio.txt > 1.txt
tr '-' '8' < 1.txt > 3.txt
paste -d '|' 3.txt data4.txt > data1.csv
mv data1.txt data5.csv
rm -rf *.txt
mv data5.csv data1.txt
#uniq nombres.txt
#IGNORE 1 ROWS

mysql --local-infile=1 -uroot -p1q2w3e4r cyberseg_base <<QUERY_INPUT
load data local infile 'data1.csv' into table cy_topten
fields terminated by '|'
lines terminated by '\n'
(perfil, inicio_fecha, inicio_hora, duracion, protocolo, ip_origen, puerto_origen, direccion, ip_destino, puerto_destino, packets, bytes, medida, flows)
QUERY_INPUT

mv data1.* /home/cert/opt/insayd_ssh/procesado/.
echo 'Proceso terminado!'





cut -c 108-112 b.txt > b12.txt
          sed 's/^ *//g' b12.txt > xx
          mv xx b12.txt
