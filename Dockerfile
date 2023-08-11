FROM ubuntu:20.04

# Define a variável de ambiente para o fuso horário
ENV timezone="America/Sao_Paulo"

# Atualiza o sistema e configura o fuso horário
RUN apt-get update && \
    ln -snf /usr/share/zoneinfo/${timezone} /etc/localtime && \
    echo ${timezone} > /etc/timezone

# Instala o Apache e o PostgreSQL
RUN apt-get install -y apache2 && \
    apt-get install -y postgresql postgresql-contrib

# Instala o PHP 8.1 e extensões
RUN apt-get install -y php php-xdebug

RUN apt-get install -y git

# Instala o PHP e o Composer
RUN apt-get update && apt-get install -y php && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');"

EXPOSE 80

WORKDIR /var/www/html

ENTRYPOINT /etc/init.d/apache2 start && /bin/bash

CMD ["true"]