SELECT p.CodPedido, p.DataPedido,c.NomeCliente
FROM Pedido p
INNER JOIN Cliente c ON p.CodCliente = c.CodCliente
WHERE p.CodFun = 1;
GO