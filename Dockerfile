FROM ubuntu:16.04
MAINTAINER Jaouad E. <jaouad.elmoussaoui@gmail.com>

ENV DEBIAN_FRONTEND noninteractive

# Install our application code into the container
RUN mkdir -pv /apps/mantl
COPY . /apps/mantl

# Install Laravel tooling and install scripts packages
ADD provision.sh /provision.sh
ADD serve.sh /serve.sh
ADD supervisor.conf /etc/supervisor/conf.d/supervisor.conf

RUN chmod +x /*.sh

RUN ./provision.sh
RUN apt-get install -y ruby
RUN gem install sass
RUN /usr/local/bin/composer install -n -d /apps/mantl
RUN /serve.sh mantl.io /apps/mantl/public
RUN /serve.sh www.mantl.io /apps/mantl/public
RUN cd /apps/mantl && php artisan key:generate
RUN cd /apps/mantl/resources/assets && npm update && bower --allow-root install && grunt build
RUN chown -R homestead /apps/mantl
RUN chown -R homestead /home/homestead

EXPOSE 80 22 35729 9876
CMD ["/usr/bin/supervisord"]
