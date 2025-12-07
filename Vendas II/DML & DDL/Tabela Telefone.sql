USE Vendas

CREATE TABLE Telefone (
NumFone INT NOT NULL PRIMARY KEY,
CodCliente INT NOT NULL,
FOREIGN KEY (CodCliente) REFERENCES Cliente(CodCliente),
CodFone INT NOT NULL,
FOREIGN KEY (CodFone) REFERENCES TipoFone(CodFone)
);
GO