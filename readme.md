# Projeto de Cadastro de Cidadão

Foi desenvolvido um sistema simples de cadastro de cidadãos que gera automaticamente um identificador único atribuído pela Caixa Econômica Federal aos cidadãos, o NIS (Número de Identificação Social). Esse mesmo sistema permite o cadastro de cidadãos e a busca de informações usando o seu NIS.

## Tecnologias
- PHP 8.3.12
- HTML/CSS
- JSON (usado para armazenar os dados dos usuários)

## Execução

1. Clone o repositório: git clone https://github.com/Juniorsollar/cadastrocidadao
2. Abrir a pasta do projeto e executar no terminal: php -S localhost:8000 -t public
3. Abrir o navegador e acessar: http://localhost:8000/index.html

## Uso

1. Cadastro de Cidadão: Preencha o nome no formulário de cadastro e clique em "Cadastrar". Será redirecionado para uma página confirmando o cadastro e gerando um NIS, que será salvo automaticamente no arquivo 'cidadaos.json'.
2. Buscar Cidadão: Insira o NIS o formulário de busca e clique em "Buscar". Se houver um usuário com esse NIS, os dados serão exibidos.
