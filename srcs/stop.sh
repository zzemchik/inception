#!/usr/bin/env bash 

if [ -d "/var/lib/docker/volumes/srcs_db-data" ]; then
rm -rf /home/ivan/Рабочий\ стол/inception/srcs/srcs_db-data
cp -r /var/lib/docker/volumes/srcs_db-data /home/ivan/Рабочий\ стол/inception/srcs/srcs_db-data
fi