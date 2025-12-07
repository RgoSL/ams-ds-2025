SELECT c.NomeCliente, t.NumFone, tf.DescFone
FROM Cliente c
INNER JOIN Telefone t ON c.CodCliente = t.CodCliente
INNER JOIN TipoFone tf ON t.CodFone = tf.CodFone;
GO