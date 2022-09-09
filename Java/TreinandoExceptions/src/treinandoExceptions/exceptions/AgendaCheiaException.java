package treinandoExceptions.exceptions;

public class AgendaCheiaException extends Exception{

    @Override
    public String getMessage() {
        return "Agenda se encontra cheia!";
    }
}
