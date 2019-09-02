# Only runtime is built here
FROM composer

RUN wget http://robo.li/robo.phar && chmod +x robo.phar && mv robo.phar /usr/bin/robo
RUN composer global require codeception/robo-paracept:dev-master
RUN composer global require codeception/codeception

COPY RoboFile.php /app/RoboFile.php

WORKDIR /app
