package Testes;

// Esse Teste Mexe Diretamente com o Nosso Código Principal, Pouco Útil Para a Prova 

import Forms.LoginPag;
import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;

public class LoginPagTest {

    @Test
    void testLoginSucesso() {
        LoginPag login = new LoginPag();
        boolean resultado = login.autenticar("usuario_correto", "senha_correta");
        assertTrue(resultado);
    }

    @Test
    void testLoginFalha() {
        LoginPag login = new LoginPag();
        boolean resultado = login.autenticar("usuario_errado", "senha_errada");
        assertFalse(resultado);
    }
}