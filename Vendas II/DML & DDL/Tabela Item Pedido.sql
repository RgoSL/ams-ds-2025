USE Vendas;

CREATE TABLE ItemPedido (
    CodPedido INT NOT NULL,
	CONSTRAINT PK_ItemPedido PRIMARY KEY (CodPedido, CodProduto),
    CodProduto INT NOT NULL,
	CONSTRAINT FK_ItemPedido_Produto FOREIGN KEY (CodProduto) REFERENCES Produto(CodProduto),
    QtdeProduto INT NOT NULL,
	CONSTRAINT FK_ItemPedido_Pedido FOREIGN KEY (CodPedido) REFERENCES Pedido(CodPedido)
);
GO
