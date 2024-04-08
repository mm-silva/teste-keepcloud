FROM phpdockerio/php:8.3-fpm
WORKDIR "/application"

# Instalação de dependências do sistema para PHP e extensões, Git, e utilitários
RUN apt-get update && apt-get -y --no-install-recommends install \
    git \
    php8.3-mysql \
    curl

# Instalando Node.js e NPM
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Limpeza do cache do APT
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*