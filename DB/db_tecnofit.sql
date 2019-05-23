-- SUBJECT: DATABASE PROJECT - TECNOFIT
-- AUTHOR: MARCOS FREIRE
-- CREATED ON: 18-MAY-2018, 06:44:56 PM

CREATE DATABASE db_tecnofit;

USE db_tecnofit;

CREATE TABLE tb_produto
(
	produto_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    produto_sku VARCHAR(16) NOT NULL,
    produto_nome VARCHAR(64) DEFAULT NULL,
    produto_descricao TEXT DEFAULT NULL,
    produto_preco VARCHAR(8) DEFAULT NULL,
    
    CONSTRAINT pk_produto_id PRIMARY KEY(produto_id)
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO tb_produto
VALUES
(DEFAULT, "1547", "tenis", "Tenis bão", "R$30,00");

SELECT * FROM tb_produto;

CREATE TABLE tb_pedido
(
	pedido_id INT(11) UNSIGNED NOT NULL,
    pedido_total VARCHAR(16) DEFAULT NULL,
    pedido_data VARCHAR(10) NOT NULL, -- Mudado de DATA para VARCHAR(10),
    pedido_produtos TEXT DEFAULT NULL,
    
    CONSTRAINT pk_pedido_id PRIMARY KEY(pedido_id)
)
ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- DROP TABLE tb_pedido;