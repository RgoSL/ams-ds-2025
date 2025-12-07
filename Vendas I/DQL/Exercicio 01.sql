SELECT c.NomeCliente, t.NumFone
FROM Cliente c
INNER JOIN Telefone t ON c.CodCliente = t.CodCliente;
GO