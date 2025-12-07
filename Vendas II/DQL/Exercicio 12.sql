USE Vendas

SELECT 
    c.NomeCliente,
    pr.NomeProduto
FROM Cliente c
JOIN Pedido p ON c.CodCliente = p.CodCliente
JOIN ItemPedido ip ON p.CodPedido = ip.CodPedido
JOIN Produto pr ON ip.CodProduto = pr.CodProduto
ORDER BY c.NomeCliente;
GO