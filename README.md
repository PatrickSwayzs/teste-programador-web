# Teste prático para Programador Web Home Office.

O objetivo deste teste é conhecer suas habilidades em:

* PHP, MySQL ou PostgreSQL, HTML, CSS e JavaScript;
* Entendimento e análise dos requisitos;
* Modelagem de banco de dados;
* Integração com WebServices;

A aplicação pode ser feita em PHP puro ou você pode utilizar algum framework conhecido no mercado.
## Problema

### Sistema de Vendas

* O cliente quer registrar a venda de produtos com a data da venda e endereço de entrega;
* Deve ser possível buscar produtos pelo nome ou referência;
* Na medida que vai adicionando os produtos na tela de venda, o sistema deverá listar em uma tabela  como o exemplo abaixo, o nome, preço e nome do(s) fornecedor(es) dos produtos adicionados. Deve também atualizar o valor total da venda. Exemplo:

|  Nome  |  Preço  |  Fornecedor(es)  |
| ------ | ------- | -----------------|
| Prod A | 5,60    |  Sarandi, Fruki  |
| Prod B | 20,00   |  Nestle          |
| Prod C | 120,00  |  Santa Clara     |

**Total: R$ 145,60**


* Deve ter um campo de CEP do endereço de entrega. Ao preencher esse campo busque automaticamente a UF, nome da cidade, bairro e rua de entrega.
* Não pode salvar a venda sem informar o endereço completo de entrega;
* O cliente necessita ter o o histórico completo das vendas, com seus itens, valor total, data e endereço de entrega completo;

## Requisitos

* A única tela de cadastro que você precisa fazer é a de vendas, não precisa criar as telas de cadastro de produtos e fornecedores, somente suas tabelas no ER e banco de dados. Popule as tabelas diretamente no banco com INSERT's;
* Criar um Modelo ER;
* O cadastro de produtos deve conter nome, referência e preço.  Todos obrigatórios (lembrando que você não vai criar a tela de cadastro, mas deve tratar isso no banco de dados);
* O banco de dados deve tratar a questão de um produto ter vários fornecedores, você deve criar campos/tabelas para tal;
* O cadastro de fornecedores só precisa ter nome;
* O banco de dados não pode permitir 2 produtos com mesma referência;
* Usar AJAX para buscar produtos e JavaScript para atualizar a tabela de produtos da venda;
* Considere sempre quantidade 1 para cada item adicionado na tela de venda;
* Deve usar o webservice da ViaCEP para completar o endereço após preencher o campo CEP;
* Os preços dos produtos sofrem atualização semanal, isso não pode interferir no valor das vendas registradas e de seus produtos. Modele o banco de dados de tal forma a tratar essa questão;
* Faça fork desse projeto e edite este README explicando como devo fazer para criar as tabelas e testar a tela de venda;
* Todos os arquivos necessários para rodar o projeto devem estar no repositório do github;


## Diferenciais

* Fazer a tela de venda responsiva (que se adapta a diferentes dispositivos);
* Usar testes unitários para qualquer parte do sistema;
* Fazer commits claros, evidenciando o que realmente foi desenvolvido, pois seu código será revisado e validado por nossa equipe de desenvolvedores;


-- 
## Teste

* Para usar o php usei o xampp (ultima versão disponivel) - para fazer o projeto funcionar só precisa colocar a pasta do projeto na pasta 'htdocs' do xampp e iniciar o Apache

* Estava usando o PostgreSQL mas alterei para o Mysql por problemas de conexão, usei o Mysql que vem com o xampp
* Os sqls para criar as tabelas e inserir dados no banco estão na raiz do projeto (venda.sql e inserts.sql)
* Os dados do mysql são:
       HOST = 'localhost' 
       NAME/DB = 'vendas'
       USER = 'root'
       PASS = ' '