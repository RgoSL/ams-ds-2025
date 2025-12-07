USE Vendas

SELECT 
    p.CodPedido,
    p.DataPedido,
    pr.NomeProduto
FROM Pedido p
JOIN ItemPedido ip ON p.CodPedido = ip.CodPedido
JOIN Produto pr ON ip.CodProduto = pr.CodProduto;
GO