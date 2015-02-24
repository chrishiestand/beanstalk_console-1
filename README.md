# beanstalkd_docker_console
Beanstalk Console docker image

This is to create a docker image based on ptrofimov/beanstalk_console (PHP) which views and interacts with a beanstalkd queue.
My minor modifications from michaloo/beanstalk_console allow you to create a docker image to which you may pass as a docker argument, the hostname/ip and port of the beanstalkd server.

e.g.
`docker run -t -i -p 9999:80 5361 dockerbox:11300`
  where dockerbox:11300 is the hostname:port for your beanstalkd server

You can find the docker image on dockerhub: https://registry.hub.docker.com/u/chrishiestand/beanstalkd-console/
