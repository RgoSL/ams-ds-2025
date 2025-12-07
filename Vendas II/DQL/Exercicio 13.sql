USE Vendas

SELECT 
    f.NomeFun,
    pr.NomeProduto
FROM Funcionario f
JOIN Pedido p ON f.CodFun = p.CodFun
JOIN ItemPedido ip ON p.CodPedido = ip.CodPedido
JOIN Produto pr ON ip.CodProduto = pr.CodProduto
ORDER BY f.NomeFun;
GO