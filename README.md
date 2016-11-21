# docker-simplesamlphp

simpleSAMLphp installed on hosted Docker.


##Introduction

This is plug and play, it create a Docker image with SimpleSAMLphp configured and run.

## Prerequisites

Docker installed and running.

## Installation

The following commands will download the Ubuntu Images and provision the Docker image. All software will be installed and once completed SimpleSAMLphp will be ready to use. 

``` bash
git clone https://github.com/kuisathaverat/docker-simplesamlphp.git
cd docker-simplesamlphp
sh run.sh
```

## Usage

From the host machine the following ports are forwarded to the Vagrant VM.

- 58080
- 58443

To get to either the HTTP or HTTPS setup hit the following endpoints:

  - http://DOCKER_HOST:58080/simplesaml
  - https://DOCKER_HOST:58443/simplesaml

To access simpleSAMLphp from the browser:

```
username: admin
password: password
```

There are three users configured on Idp named simpleSAMLphpIdpHosted

username: tesla, password: password
username: curie, password: password
username: nobel, password: password

### Cleanup

This will clean up any old images built

``` bash
docker stop SimpleSAMLphp
docker rm SimpleSAMLphp
docker rmi SimpleSAMLphp
```

### References

[simpleSAMLphp Installation and Configuration](https://simplesamlphp.org/docs/stable/simplesamlphp-install)

[How To Install Linux, Apache, MySQL, PHP (LAMP) stack on Ubuntu](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu)

[Using SimpleSAMLphp to Authenticate against ADFS 2.0 IdP](https://groups.google.com/forum/#!msg/simplesamlphp/I8IiDpeKSvY/URSlh-ssXQ4J)

[Configuring HTTPS on Apache with GnuTLS](https://help.ubuntu.com/community/GnuTLS)

This is a fork from [docker-simplesamlph](https://github.com/jnyryan/docker-simplesamlph)
