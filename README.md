# Artisan
CLI do php. 
Trabalhar com linha de comandos.

## Comandos base
Controller: ``` php aryisan make:controller ProdutoController --resource``` - Nome no singular

Todas Rotas: ``` pghp artisan route:list ```

Migrations: 
* ```php artisan migrate  ```: executar todas as migrations
* ```php artisan make:migration create_produto_table  ```: Cria a migrations com as funcoes e um modelo basico
* ```php artisan migrate:reset  ```: reseta as migrations
* ```php artisan make:model Produto  ```: Criar um modelo
* ```php artisan make:seeder ProdutosSeeder```: Criar Seeder
* ```php artisan make:factory ProdutoFactory```: Criar Factory ou seja valores aleatorios
* ```php artisan make:model Teste -mfscr``` migration - factory - seeder - controler - resorcer

# Factory
Os factories no Laravel são uma ferramenta poderosa para geração de dados de teste ou seeder, facilitando a criação de 
instâncias de modelos de forma programática para testes e preenchimento da base de dados. Eles ajudam a manter
os testes e o desenvolvimento mais organizados, eficientes e menos propensos a erros manuais na criação de dados.

Basicamente criacao de dados fakers.

# MVC
Controller - Responsavel por receber todas as requisicoes do usuario

* Realizar apenas operações relacionadas a Request e Response (HTTP)
* Não possuir "conhecimento" sobre regras de negócios, ou acesso ao DB
* Formada quase que exclusivamente por Middlewares

Services - responsável por abstrair as regras de negócio e controlar o acesso aos dados.
* Centralizar o acesso aos dados e funções externas
* Abstrair regras de negócios
* Não ter nenhum "conhecimento" sobre a camada Model (EX: Query SQL)
* Não receber nada relacionada ao HTTP (Request ou Response)

Model - Responsavel pela manipulacao dos dados

View - Responsavel pelo visual
Responsabilidade de redenrizar o HTML




