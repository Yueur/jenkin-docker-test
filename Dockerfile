FROM ubuntu

RUN echo 'Hello container'
RUN apt-get update && \
	apt-get -y install phpunit && \
	phpunit --version

ENV myCustomDockerEnvVar='custom docker var indeed'

