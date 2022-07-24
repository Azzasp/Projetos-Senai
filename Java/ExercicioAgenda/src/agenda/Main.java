package agenda;

public class Main {

    public static void main(String[] args) {
        Agenda agenda = new Agenda();

        agenda.armazenaPessoa("Pedro", 18, 180);
        agenda.armazenaPessoa("Sueli", 43, 177);
        agenda.armazenaPessoa("Malena", 28, 165);
        agenda.armazenaPessoa("Orlando", 37, 162);

        agenda.removePessoa("Sueli");
        agenda.imprimeAgenda();

        agenda.buscaPessoa("Orlando");
    }
}
