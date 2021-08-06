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

#### Criar o usu�rio admin

```
php artisan db:seed
```

Usu�rio criado admin@admin.com
Senha : 12345678

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```
