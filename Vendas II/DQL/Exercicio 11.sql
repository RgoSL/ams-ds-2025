USE Vendas

SELECT DISTINCT
    pr.NomeProduto
FROM Pedido p
JOIN Funcionario f ON p.CodFun = f.CodFun
JOIN ItemPedido ip ON p.CodPedido = ip.CodPedido
JOIN Produto pr ON ip.CodProduto = pr.CodProduto
WHERE f.NomeFun = 'Fernanda Costa';
GO