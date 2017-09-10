FROM circleci/php:5.6

RUN apt-get update \
    && apt-get install -y \
      libssl-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN sudo pecl install mongodb \
    echo 'extension=mongodb.so' | sudo tee /usr/local/etc/php/conf.d/mongodb.ini
