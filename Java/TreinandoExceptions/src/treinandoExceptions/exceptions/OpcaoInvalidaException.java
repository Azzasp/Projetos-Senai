package treinandoExceptions.exceptions;

public class OpcaoInvalidaException extends Exception{
    @Override
    public String getMessage() {
        return "Opção Invalida!";
    }

}
