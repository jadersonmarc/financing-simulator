# Guia de Instalação e Uso da API

Este guia fornece as instruções passo a passo para configurar e utilizar a API, incluindo a preparação do ambiente, execução de migrações, semeadura do banco de dados, inicialização do servidor e execução de testes.

## Pré-Requisitos

Antes de iniciar, certifique-se de que você tem o Docker e o Docker Compose instalados em seu sistema.

## Configuração Inicial

### Criar e Subir o Container

Para criar e subir o container do Docker, execute o seguinte comando no terminal:

docker-compose up -d --build

### Acessar o Container

Para acessar o terminal interno do container `app`, use o seguinte comando:

docker-compose exec app sh

Isso permitirá que você execute comandos dentro do container, como se estivesse operando diretamente no sistema operacional convidado.

## Configuração do Banco de Dados

### Executar Migrações

Dentro do container, execute as migrações para configurar as tabelas do banco de dados:

php artisan migrate

### Rodar Seeds

php artisan db:seed

### Inicialização do Servidor

Para iniciar o servidor da API e disponibilizá-lo na porta 80, utilize:

php artisan serve --host=0.0.0.0 --port=80

### Execução de Testes

php artisan test
