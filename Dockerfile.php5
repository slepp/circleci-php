FROM circleci/php:5.6

RUN sudo apt-get update \
    && sudo apt-get install -y \
      libssl-dev \
    && sudo apt-get clean \
    && sudo rm -rf /var/lib/apt/lists/*

RUN sudo pecl install mongodb \
    && echo 'extension=mongodb.so' | sudo tee /usr/local/etc/php/conf.d/mongodb.ini
