SELECT Frete, COUNT(*) AS Ocorrencias FROM dbo.Envio
GROUP BY Frete;
GO