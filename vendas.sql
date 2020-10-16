
Create Table produtos (
    id integer primary key,
	nome varchar(255) not null,
	referencia varchar(255) unique not null,
	preco varchar(255) not null
);

Create Table fornecedores (
    id integer primary key,
	nome varchar(255) not null
);
Create Table produtos_fornecedores (
    id integer primary key,
	produtos_id integer,
	fornecedores_id integer,
	FOREIGN KEY (produtos_id) REFERENCES produtos(id),
	FOREIGN KEY (fornecedores_id) REFERENCES fornecedores(id)
);

Create Table vendas (
    id integer primary key,
	produtos text,
	fornecedores text,
	preco text,
	precoTotal varchar(255) not null,
	cep varchar(255) not null,
	uf varchar(255) not null, 
	cidade varchar(255) not null, 
	bairro varchar(255) not null,
	rua varchar(255) not null,
	data timestamp
);

