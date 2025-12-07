USE Vendas

SELECT 
    p.CodPedido,
    p.DataPedido,
    f.NomeFun
FROM Pedido p
JOIN Funcionario f ON p.CodFun = f.CodFun
JOIN ItemPedido ip ON p.CodPedido = ip.CodPedido
JOIN Produto pr ON ip.CodProduto = pr.CodProduto
WHERE pr.NomeProduto = 'Fogão Consul';
GO