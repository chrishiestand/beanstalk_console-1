#!/bin/bash

if [ -n "$1" ]; then
    server_string="$1"
else
    server_string=
fi

source /etc/apache2/envvars && /usr/bin/env beanstalkd_servers="$server_string" apache2 -DFOREGROUND
