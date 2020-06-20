FROM ubuntu:latest
MAINTAINER MAINTAINER Mike Peters "mike@skylake.me"
RUN apt-get update && apt-get -y install cron curl
COPY access_page_cron /etc/cron.d/access_page_cron
RUN chmod 0644 /etc/cron.d/access_page_cron
RUN crontab /etc/cron.d/access_page_cron
RUN touch /var/log/cron.log
CMD cron && tail -f /var/log/cron.log
