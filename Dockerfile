FROM php:7.2-cli
COPY ./src /usr/src/testflight-a380-ber
WORKDIR /usr/src/testflight-a380-ber
CMD [ "php", "./cli.php" ]
