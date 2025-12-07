USE Vendas

SELECT 
    p.CodPedido,
    p.DataPedido,
    f.NomeFun
FROM Pedido p
JOIN Funcionario f ON p.CodFun = f.CodFun
JOIN Cliente c ON p.CodCliente = c.CodCliente
WHERE c.NomeCliente = 'Felipe Oliveira';
GO