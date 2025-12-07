SELECT p.CodPedido, p.DataPedido,c.NomeCliente,f.NomeFun AS Funcionario
FROM Pedido p
INNER JOIN Cliente c ON p.CodCliente = c.CodCliente
INNER JOIN Funcionario f ON p.CodFun = f.CodFun;
GO