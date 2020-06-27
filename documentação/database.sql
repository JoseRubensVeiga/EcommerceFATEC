DROP DATABASE IF EXISTS ecommerce;

CREATE DATABASE ecommerce;

use ecommerce;

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    fl_cliente BOOLEAN DEFAULT TRUE,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE produtos (
	id INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(255) NOT NULL,
    preco DECIMAL(8, 2) NOT NULL,
    img VARCHAR(255) NOT NULL,
    fl_destaque BOOLEAN DEFAULT FALSE
);

CREATE TABLE comentarios (
	id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    texto LONGTEXT NOT NULL,
    data_criacao DATETIME DEFAULT NOW(),
    usuario_id INT NOT NULL
);

ALTER TABLE comentarios
ADD FOREIGN KEY(usuario_id)
REFERENCES usuarios(id);

INSERT INTO usuarios (nome, fl_cliente, email, senha)
VALUES
('Rogério', true, 'rogerio@email.com', 'rogerio123'),
('Roger', false, 'roger@email.com', 'roger123'),
('Rogerinho', true, 'rogerinho@email.com', 'rogerinho123'),
('Rogenildo', false, 'rogenildo@email.com', 'rogenildo123'),
('Rogelsom', true, 'rogelsom@email.com', 'rogelsom123'),
('Rogeraldo', false, 'rogeraldo@email.com', 'rogeraldo123'),
('Rogeria', true, 'rogeria@email.com', 'rogeria123'),
('Rogenelson', false, 'rogenelsom@email.com', 'rogenelsom123'),
('Rogenilce', true, 'rogenilce@email.com', 'rogenilce123'),
('Rogerim', false, 'rogerim@email.com', 'rogerim123');

/* SELECT * FROM usuarios */

INSERT INTO produtos (descricao, preco, img, fl_destaque)
VALUES
('Produto 01', 9.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TAI_CHI_REMIX_D3030M_BWT__1_68680ccc-2826-4dd1-8cbe-3e6fbe6c4937_540x.jpg?v=1574815960', true),
('Produto 02', 19.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TAI_CHI_REMIX_D3030M_RRN__1_2e57c399-4f7c-4498-af6a-9acd29ddd94d_540x.jpg?v=1574815979', false),
('Produto 03', 29.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TAI_CHI_REMIX_D3030M_VVS__1_540x.jpg?v=1574816003', true),
('Produto 04', 19.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/ATTACK_LOW_D0262M_KMP__1_540x.jpg?v=1582128712', false),
('Produto 05', 29.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/ATTACK_LOW_D0260M_POK__1_4318d6d2-a705-40ad-b32f-d5f856d8cafc_540x.jpg?v=1574814841', true),
('Produto 06', 19.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/ATTACK_LOW_D0260M_WWT_1_540x.jpg?v=1582677051', false),
('Produto 07', 39.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/ICON_D3053M_BWB_4_9bfab122-8aaa-4dd3-98c1-b5683396920d_540x.jpg?v=1574815318', true),
('Produto 08', 49.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/ATTACK_LOW_D0260M_BBW_Lateral_1_540x.jpg?v=1582655360', false),
('Produto 09', 29.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/ATTACK_LOW_D0260M_RZW_Lateral_1_540x.jpg?v=1582655360', true),
('Produto 10', 19.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TAI_CHI_LX_D1055M_WRS__1_1215cdd6-06cd-4425-b226-f453471e7661_540x.jpg?v=1585686429', false),
('Produto 11', 59.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TAI_CHI_LX_D1055M_BBY__1_540x.jpg?v=1585686430', true),
('Produto 12', 69.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TAICHI_LX_D1055M_GBT__1_8a912df1-0964-449c-bf58-7e6a41fa8f0e_540x.jpg?v=1585686430', false),
('Produto 13', 29.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TAI_CHI_LX_D1055M_ZOB__1_8185f902-4781-4edb-84ea-65df0f364373_540x.jpg?v=1574815691', true),
('Produto 14', 79.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TAICHI_LX_D1055M_WZT__1_f5851758-2a51-4510-b576-d32f55af4c38_540x.jpg?v=1574815721', false),
('Produto 15', 29.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/TC_RACER_D3059M_BZT__1_540x.jpg?v=1574816149', true),
('Produto 16', 39.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/RACER_D3059M_WBP__1_8dbd7953-583b-4453-b04d-2a2ffbce15b9_540x.jpg?v=1574815921', false),
('Produto 17', 49.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/RACER_D3059M_BBB__1_1f225889-7270-4cd9-b923-f8a4aec34a01_540x.jpg?v=1574815945', true),
('Produto 18', 59.99, 'https://cdn.shopify.com/s/files/1/0008/1798/7645/products/RACER_D3059M_CQC__1_6882df62-2b7b-495d-93f7-31a426a33ffe_540x.jpg?v=1574815952', false);


SELECT * FROM produtos;

INSERT INTO comentarios (usuario_id, titulo, texto)
VALUES
(2, 'Muito massa!', 'Gostei bastante, muito confortável.'),
(6, 'Show de bola!', 'Achei um produto impecável.'),
(7, 'Não gostei!', 'Odiei o design. Muito feito.'),
(3, 'Mais ou menos!', 'Resolve o problema. Nada mais.');

SELECT * FROM comentarios;
