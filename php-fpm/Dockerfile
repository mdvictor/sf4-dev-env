FROM alpine:3.8

RUN apk add --update --no-cache \
    vim \
    zsh \
    bash \
    coreutils \
    php7-fpm \
    php7-apcu \
    php7-ctype \
    php7-curl \
    php7-dom \
    php7-gd \
    php7-iconv \
    php7-imagick \
    php7-json \
    php7-intl \
    php7-mcrypt \
    php7-fileinfo\
    php7-mbstring \
    php7-opcache \
    php7-openssl \
    php7-pdo \
    php7-pdo_mysql \
    php7-mysqli \
    php7-xml \
    php7-zlib \
    php7-phar \
    php7-tokenizer \
    php7-session \
    php7-simplexml \
    php7-xdebug \
    php7-zip \
    php7-xmlwriter \
    make \
    curl \
    git

RUN sh -c "$(curl -fsSL https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"

RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN echo "$(curl -sS https://composer.github.io/installer.sig) -" > composer-setup.php.sig \
        && curl -sS https://getcomposer.org/installer | tee composer-setup.php | sha384sum -c composer-setup.php.sig \
        && php composer-setup.php && rm composer-setup.php* \
        && chmod +x composer.phar && mv composer.phar /usr/bin/composer

COPY symfony.ini /etc/php7/conf.d/
COPY symfony.ini /etc/php7/cli/conf.d/
COPY xdebug.ini  /etc/php7/conf.d/
COPY setup.sh /

COPY symfony.pool.conf /etc/php7/php-fpm.d/

ENV PROJECT_NAME symfony
ENV PROJECT_TYPE --full
ENV GIT_EMAIL john.smith@email.com
ENV GIT_NAME John Smith

CMD ["/setup.sh"]

WORKDIR /var/www/projects
EXPOSE 9001
