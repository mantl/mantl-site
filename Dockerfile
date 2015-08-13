FROM nginx

MAINTAINER Container Solutions <info@container-solutions.com>

ENV DEBIAN_FRONTEND noninteractive
ENV APP_ROOT /usr/share/nginx/html
WORKDIR ${APP_ROOT}

RUN sed -i /etc/nginx/nginx.conf -e 's/sendfile        on;/sendfile off;/'

ADD public/ ${APP_ROOT}

RUN apt-get update && apt-get install -y curl git && \
    curl -sL https://deb.nodesource.com/setup | bash - && \
    apt-get install -y nodejs && \
    npm install -g bower && \
    cd ${APP_ROOT} && \
    bower install --allow-root