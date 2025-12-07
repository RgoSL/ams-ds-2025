USE Vendas

SELECT 
    d.NomeDep,
    d.DataNasc,
    f.NomeFun
FROM Dependente d
JOIN Funcionario f ON d.CodFun = f.CodFun;
GO