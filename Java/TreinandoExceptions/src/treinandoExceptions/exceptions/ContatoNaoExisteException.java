package treinandoExceptions.exceptions;

public class ContatoNaoExisteException extends Exception{
    @Override
    public String getMessage() {
        return "Este contanto n�o existe!";
    }
}
