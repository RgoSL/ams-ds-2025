USE Vendas

CREATE TABLE Premio (
ValorPremio DECIMAL(8,2) NOT NULL,
CodFun INT NOT NULL,
FOREIGN KEY (CodFun) REFERENCES Funcionario(CodFun)
);
GO