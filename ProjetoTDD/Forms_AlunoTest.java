package Testes;

// Imports das Outras Classes, da Classe de Conexão, e das Anotações Necessárias Para o Teste Funcionar
import Conexao.conexao;
import Forms.Forms_Aluno;
import org.junit.jupiter.api.AfterAll;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;

import java.sql.SQLException;

import static org.junit.jupiter.api.Assertions.assertEquals;
import static org.junit.jupiter.api.Assertions.assertNotNull;

public class Forms_AlunoTest {

    private static Forms_Aluno formsAluno;
    private static conexao con_bancosql;

    @BeforeAll
    public static void setup() {
        // Conectando no Banco 
        con_bancosql = new conexao();
        con_bancosql.conecta();

        // Formulário sem Interface Somente Para o Teste
        formsAluno = new Forms_Aluno(null, "Testes de Aluno", false);
    }

    @AfterAll
    public static void teardown() {
        // Deleta o Usuário de Teste e Encerra a Conexão
        if (con_bancosql != null) {
            try {
                con_bancosql.statement.executeUpdate("DELETE FROM aluno WHERE nome_Aluno = 'Aluno Teste'");
            } catch (SQLException e) {
                e.printStackTrace(); // Para Caso de Erro
            }
            con_bancosql.desconecta();
        }
    }

    @Test
    public void testCadastrarNovoAlunoComSucesso() throws SQLException {
        String nomeTeste = "Aluno Teste";
        String cpfTeste = "111111111-11";
        String emailTeste = "teste@email.com";
        String telTeste = "(11)99999-9999";
        String endTeste = "Rua Teste, 123";
        String cepTeste = "11111-111";

        // Usos do JUnit Para Simular Ações de Usuários
        formsAluno.txNm.setText(nomeTeste);
        formsAluno.CPF.setText(cpfTeste);
        formsAluno.Dt.setText("14/07/2006");
        formsAluno.txEmail.setText(emailTeste);
        formsAluno.Tell.setText(telTeste);
        formsAluno.txEnd.setText(endTeste);
        formsAluno.CEP.setText(cepTeste);

        formsAluno.BtGrv.doClick();

        con_bancosql.executaSQL("SELECT * FROM aluno WHERE nome_Aluno = '" + nomeTeste + "'");

        boolean alunoEncontrado = false;
        while (con_bancosql.resultSet.next()) {
            if (con_bancosql.resultSet.getString("nome_Aluno").equals(nomeTeste) &&
                con_bancosql.resultSet.getString("cpf_Aluno").equals(cpfTeste)) {
                alunoEncontrado = true; 
                break;
            }
        }

        assertEquals(true, alunoEncontrado, "O aluno deveria ter sido cadastrado com sucesso.");
    }
}