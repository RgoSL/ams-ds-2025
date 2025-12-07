package Testes;

// Imports dos Métodos Assert, da Biblioteca do Swing e da Classe de Conexão
import static org.junit.jupiter.api.Assertions.*;
import org.junit.jupiter.api.*;
import Forms.Forms_Instrumento;
import Conexao.conexao;
import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.lang.reflect.InvocationTargetException;
import java.sql.*;

public class Forms_InstrumentoTest {

    private static conexao con;
    private Forms_Instrumento form;

    // Método que cai na Prova, é Executado Antes das Demais Anotações
    @BeforeAll
    static void setupDatabase() throws SQLException {
        con = new conexao();
        assertTrue(con.conecta(), "Não conseguiu conectar no banco!");

        // "Liberar Cache"
        con.statement.executeUpdate("DELETE FROM instrumento");

        // Criando um Registro Para Editar Depois
        con.statement.executeUpdate(
            "INSERT INTO instrumento (cod_Instrumeto, nome_Instrumento, Dif_instrumento, modelo_Instrumento) " +
            "VALUES (1, 'Violão', '1', 'Yamaha')"
        );
    }

    // Também cai na Prova, Esse é Executado SÓ UMA VEZ Antes
    @BeforeEach
    void setupForm() {
        // Formulário não Visivel 
        form = new Forms_Instrumento(null, "Teste", false);
    }

    // Anotação que Representa um Método de Teste
    @Test
    void testEditarInstrumento() throws SQLException, InvocationTargetException, InterruptedException {
        // Editando as Informações Anteriores
        form.txCodInst.setText("1");     
        form.txNmInst.setText("Guitarra");
        form.txDif.setText("2");         
        form.txModel.setText("Fender");  

        // Listener Para Simular Ação do Usuário
        for (ActionListener al : form.BtAlt.getActionListeners()) {
            al.actionPerformed(new ActionEvent(form.BtAlt, ActionEvent.ACTION_PERFORMED, null));
        }

        // Os Asserts Conferem se Realmente Funcionou
        ResultSet rs = con.statement.executeQuery("SELECT * FROM instrumento WHERE cod_Instrumeto = 1");
        assertTrue(rs.next(), "Registro não encontrado no banco!");
        assertEquals("Guitarra", rs.getString("nome_Instrumento"));
        assertEquals("2", rs.getString("Dif_instrumento"));        
        assertEquals("Fender", rs.getString("modelo_Instrumento"));
    }

    // Não Deve Cair, mas é Basicamente o Contrário dos Outros Métodos
    @AfterAll
    static void cleanup() throws SQLException {
        con.statement.executeUpdate("DELETE FROM instrumento");
        con.desconecta();
    }
}