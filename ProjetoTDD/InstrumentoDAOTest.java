package Testes;

// De Diferente é só o Import da Classe DAO Criada Para Esse Teste que Fizemos, Normalmente não é Assim.
import DAO.InstrumentoDAO;
import Conexao.conexao;
import org.junit.jupiter.api.*;
import static org.junit.jupiter.api.Assertions.*;
import java.sql.*;

public class InstrumentoDAOTest {
    private static conexao con;
    private static InstrumentoDAO dao;

    @BeforeAll
    static void setupDatabase() throws SQLException {
        con = new conexao();
        assertTrue(con.conecta(), "Falha ao conectar no banco!");
        dao = new InstrumentoDAO(con);

        con.statement.executeUpdate("DELETE FROM instrumento");

        con.statement.executeUpdate(
            "INSERT INTO instrumento (cod_Instrumeto, nome_Instrumento, Dif_instrumento, modelo_Instrumento) " +
            "VALUES (1, 'Violão', '1', 'Yamaha')"
        );
    }

    @Test
    void testAtualizarInstrumento() throws SQLException {
        dao.atualizar(1, "Guitarra", "2", "Fender");
        ResultSet rs = dao.buscarPorId(1);
        assertTrue(rs.next(), "Registro não encontrado!"); 
        assertEquals("Guitarra", rs.getString("nome_Instrumento")); 
        assertEquals("2", rs.getString("Dif_instrumento"));        
        assertEquals("Fender", rs.getString("modelo_Instrumento")); 
    }

    @AfterAll
    static void cleanup() throws SQLException {
        con.statement.executeUpdate("DELETE FROM instrumento");
        con.desconecta();
    }
}