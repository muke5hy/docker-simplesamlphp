#!/bin/sh

docker stop SimpleSAMLphp
docker rm SimpleSAMLphp
docker build -t jnyryan/simplesamlphp .
docker run --name SimpleSAMLphp -d -p 58080:80 -p 58443:443 jnyryan/simplesamlphp
