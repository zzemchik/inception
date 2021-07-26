all:
	chmod +x /home/ivan/Рабочий\ стол/inception/srcs/start.sh
	/home/ivan/Рабочий\ стол/inception/srcs/start.sh &
	docker-compose -f /home/ivan/Рабочий\ стол/inception/srcs/docker-compose.yml up --build
	
	

down:
	chmod +x /home/ivan/Рабочий\ стол/inception/srcs/stop.sh
	/home/ivan/Рабочий\ стол/inception/srcs/stop.sh &
	docker-compose -f  /home/ivan/Рабочий\ стол/inception/srcs/docker-compose.yml down

clean: down
	docker-compose -f /home/ivan/Рабочий\ стол/inception/srcs/docker-compose.yml down --rmi all -v
	rm -rf /home/ivan/volumes
re: clean all

.PHONY: all clean re down