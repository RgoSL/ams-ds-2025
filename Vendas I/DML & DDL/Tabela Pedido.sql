USE Vendas

CREATE TABLE Pedido (
CodPedido INT NOT NULL PRIMARY KEY,
DataPedido DATE NOT NULL,
CodCliente INT NOT NULL,
FOREIGN KEY (CodCliente) REFERENCES Cliente(CodCliente),
CodFun INT NOT NULL,
FOREIGN KEY (CodFun) REFERENCES Funcionario(CodFun)
);
GO