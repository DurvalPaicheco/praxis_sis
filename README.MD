#Sistema para gestão de alunos com Laravel, jQuery e bootstrap


#Utilização - Primeiro é nescessário configurar o arquivo .env na raiz do projeto para se possa utilizar o banco de dados.
- na linha:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=banco
DB_USERNAME=userBanco
DB_PASSWORD=senhaBanco



Alterar userBanco e senhaBanco

#Utilização -- Criação de tabelas no banco:
- php artisan migrate


#agora basta criar o usuário e utilizar


#Usuarios cadastrados na tela de register são ADM e possuem total acesso
-- Usuario(aluno) cadastrado pelo Usuario(ADM) dentro do sistema possui acesso de aluno

