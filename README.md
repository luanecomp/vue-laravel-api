## Descrição
Crud feito utilizando o Framework Laravel e o frontend em Vue.js. A aplicação permite fazer depósito, saque e consultar saldo de uma conta previamente cadastrada, utilizando Vue.js no frontend e Laravel API no backend do projeto.

## Executando o projeto pela primeira vez

#### Instale as dependências PHP

```bash
composer install
```

#### Instale as dependências JavaScript

```bash
npm install
```

#### Faça o build do projeto

```bash
npm run dev
```

#### Crie uma cópia do arquivo de variáveis .env

```bash
cp .env.example .env
```

#### Preencha o caminho do banco de dados no .env 

```bash
DB_DATABASE=/path-to-your-project/database/database.sqlite
```

* Existe um banco sqlite vazio pronto para uso em database/database.sqlite

#### Crie as tabelas no Banco de Dados

```bash
php artisan migrate
```

#### Popule o Banco de Dados com algumas contas bancárias

```bash
php artisan db:seed
```

#### Execute o servidor local do Laravel

```bash
php artisan serve
```

#### Testando a aplicação

Abra o browser e navegue até http://127.0.0.1:8000/