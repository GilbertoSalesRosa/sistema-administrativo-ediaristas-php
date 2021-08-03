## Sistema administrativo da plataforma E-Diaristas

Desenvolvido no curso multi-stack da treinaweb

## Instalando o projeto

#### clonar o reposit�rio

```
git clone https://github.com/GilbertoSalesRosa/sistema-administrativo-ediaristas-php.git
```

#### Instalar depend�ncias

```
composer install
```

Ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar arquivo de configura��es de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto
configurar os detalhes da aplica��o e conex�o com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```
