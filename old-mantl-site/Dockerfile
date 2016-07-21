FROM nginx

MAINTAINER Container Solutions <info@container-solutions.com>

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update && apt-get install -y curl git && \
    curl -sL https://deb.nodesource.com/setup | bash - && \
    apt-get install -y nodejs && \
    npm install -g bower

RUN sed -i /etc/nginx/nginx.conf -e 's/sendfile        on;/sendfile off;/'

ENV APP_ROOT /usr/share/nginx/html

RUN mkdir -p $APP_ROOT

WORKDIR $APP_ROOT

ADD public/ $APP_ROOT

RUN cd $APP_ROOT && \
    bower install --allow-root