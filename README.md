# Acelera Fatec

## Executando o Ambiente

### Requisitos
Para executar o projeto em sua maquina, é necessario a instalação do `Docker` e `Docker Compose`.

### 1. Criando o ambiente
Na pasta raiz do projeto, abra o terminal e digite `docker-compose up -d` e aguarde. Este comando cria e inicia os containers necessarios.

### 2. Adicionando o arquivo de configuração
Faça uma cópia do arquivo `.env.example` e renomeie a cópia para `.env`. Em seguida, faça a configuração do banco de dados.

### 3. Executando as migrations
Na pasta raiz do projeto, abra o terminal e digite `docker-compose exec app bash`. Este comando abrirá o terminal do container. Em seguida digite `php artisan migrate` e aguarde a execução.

### 4. Executando o ambiente
Este passo não é necessario se você está configurando o ambiente pela primeira vez. Caso você já tenha o ambiente configurado previamente, para inicia-lo basta digitar `docker-compose start` e aguardar a execução.
