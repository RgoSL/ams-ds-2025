USE Vendas

SELECT 
    p.CodPedido,
    p.DataPedido,
    pr.NomeProduto
FROM Pedido p
JOIN Cliente c ON p.CodCliente = c.CodCliente
JOIN ItemPedido ip ON p.CodPedido = ip.CodPedido
JOIN Produto pr ON ip.CodProduto = pr.CodProduto
WHERE c.NomeCliente = 'Felipe Oliveira';
GO