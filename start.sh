#!/bin/bash
docker run -it --rm --name testflight-130-ber -v "$PWD/src/":/usr/src/testflight-a380-ber -w /usr/src/testflight-a380-ber php:7.2-cli php cli.php
