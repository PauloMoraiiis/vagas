#Listar
![listar](https://user-images.githubusercontent.com/87495655/154093442-0baf2635-1c8c-4f06-b3ac-51062653c1ab.png)

#Cadastrar
![cadastrar](https://user-images.githubusercontent.com/87495655/154093974-ecb0de7c-d784-4327-9da5-c8aa036437c5.png)

#Editar
![editar](https://user-images.githubusercontent.com/87495655/154094069-6eb228e3-fadf-40e8-ac8e-3ff63f73b444.png)

#Excluir
![excluir](https://user-images.githubusercontent.com/87495655/154094161-af514097-93dc-4f3b-a5e6-0cd033eacfa5.png)

#Filtrar
![Filtrar](https://user-images.githubusercontent.com/87495655/154137643-68073f63-4ba3-4217-adaf-42bb8dc715d1.png)

#Paginação
![Paginacao](https://user-images.githubusercontent.com/87495655/154316187-94450613-8933-4547-9bc5-a120cde132b8.png)

#Login
![login](https://user-images.githubusercontent.com/87495655/154959999-bfd851c1-6143-4197-b5f3-f897a5361ced.png)








## CRUD com PHP orientado a objetos, PDO e MySQL
Este código foi feito apenas para demonstração de habilidades e aprendizado, não recomendado o uso em produção ou comercial. 

## Banco de dados
Crie um banco de dados e execute as instruções SQLs abaixo para criar a tabela `vagas`:
```sql
  CREATE TABLE `vagas` (
  	`id` INT(11) NOT NULL AUTO_INCREMENT,
  	`titulo` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  	`descricao` TEXT(65535) NOT NULL COLLATE 'utf8_general_ci',
  	`ativo` ENUM('s','n') NOT NULL COLLATE 'utf8_general_ci',
  	`data` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  	PRIMARY KEY (`id`) USING BTREE
  )
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB
  AUTO_INCREMENT=1;
```

Crie um banco de dados e execute as instruções SQLs abaixo para criar a tabela `usuarios`:
```sql
  CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
```

## Configuração
As credenciais do banco de dados estão no arquivo `./app/Db/Database.php` e você deve alterar para as configurações do seu ambiente (HOST, NAME, USER e PASS).

## Composer
Para a aplicação funcionar, é necessário rodar o Composer para que sejam criados os arquivos responsáveis pelo autoload das classes.

Caso não tenha o Composer instalado, baixe pelo site oficial: [https://getcomposer.org/download](https://getcomposer.org/download/)

Para rodar o composer, basta acessar a pasta do projeto e executar o comando abaixo em seu terminal:
```shell
 composer install
```

Após essa execução uma pasta com o nome `vendor` será criada na raiz do projeto e você já poderá acessar pelo seu navegador.

## WDEV
Código da implementação de um CRUD com PHP orientado a objetos e MySQL apresentado no canal [WDEV](http://wstore.io/wdev).
Para assistir o vídeo dessa implementação, acesse: [CRUD com PHP orientado a objetos, PDO e MySQL (YouTube)](https://www.youtube.com/watch?v=uG64BgrlX7o)

