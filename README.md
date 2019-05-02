# CRUD-PHP-MVC-OOP-PDO
Projeto de aplicação simples em php utilizando os conceitos de Programação Orientada a Objetos - OOP, o padrão MVC e o uso do PDO

### Objetivo: 

>Desenvolver um sistema CRUD simples em PHP 7 (sem frameworks) em Postgresql para a administração de clientes de uma loja.


### Detalhes sobre o programa:

1.  diretório "view" se encontram as telas do sistema, que permitem a interatividade com o sistema.
2.  diretório "controller" estão os arquivos PHP que executam as funcionalidades do sistema.
3.  diretório "model" é onde ficam os arquivos de conexão com o banco de dadose e as classes do sistema.

No diretório "view" existem 3 páginas principais: editar.php, adicionar.php e index.php. a página head,footer e mensagem são os escopos do HTML e Menu do sistemas respectivamente.


#### use o código abaixo para criar a tabela cliente
> `CREATE TABLE public.cliente
    (
       cliente_id SERIAL PRIMARY KEY,
       nome character(45) COLLATE pg_catalog."default",
       cpf character varying(30) COLLATE pg_catalog."default" NOT NULL,
       email character varying(60) COLLATE pg_catalog."default",
       idade integer,
       endereco character varying(100) COLLATE pg_catalog."default"
    )`


