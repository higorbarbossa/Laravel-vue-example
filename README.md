# Laravel-vue-example
Projeto desenvolvido como um dos métodos de avaliação na seleção de um emprego
# 

 - instalar pacotes
```
composer install
```
- gerar chave
```
php artisan key:generate
```

- atualize as informações do arquivo .env de acordo com o necessário.
Para um bom funcionamento das funções do storage edite a informação do APP_URL trocando o link e botando a porta utilizada.
```
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bancoDeDados
DB_USERNAME=usuario
DB_PASSWORD=senha
```

 - popular o banco de dados com alguns dados
```bash
php artisan migrate:fresh --seed
```
- usuario padrão
>**email:** `admin@admin.com`   
>**password:** `123456`

- criar link simbólico do storage para a pasta public
```
php artisan storage:link
``` 

- rode o servidor
```bash
php artisan serve
```
