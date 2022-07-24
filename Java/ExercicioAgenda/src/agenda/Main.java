package agenda;

public class Main {

    public static void main(String[] args) {
        Agenda agenda = new Agenda();

        agenda.armazenaPessoa("Pedro", 18, 180);
        agenda.armazenaPessoa("Sueli", 43, 177);
        agenda.imprimeAgenda();

        agenda.removePessoa("Sueli");
        agenda.imprimeAgenda();
    }
}
