SELECT c.NomeCliente, conj.NomeConj
FROM Cliente c
INNER JOIN EstadoCivil ec ON c.CodEstCiv = ec.CodEstCiv
INNER JOIN Conjuge conj ON c.CodCliente = conj.CodCliente
WHERE ec.DescEstCiv = 'Casado';
GO