#!/usr/bin/env bash 

if [ -f "/var/lib/docker/volumes" ]; then
    echo "$FILE exists."
else
    ln -s /var/lib/docker/volumes /home/ivan
fi
rm -rf /var/lib/docker/volumes/srcs_db-data
cp -r /home/ivan/Рабочий\ стол/inception/srcs/srcs_db-data /var/lib/docker/volumes/srcs_db-data
chmod 777 /var/lib/docker/volumes