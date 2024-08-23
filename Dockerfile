# Use a imagem oficial do PHP com FPM
FROM php:8.1-cli

# Instale as extensões PHP necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie o código da aplicação para o diretório padrão
COPY . /var/www/html/

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Exponha a porta 8080 para acesso externo
EXPOSE 8080

# Comando para iniciar o servidor embutido PHP
CMD ["php", "-S", "0.0.0.0:8080"]