package treinandoExceptions;

import treinandoExceptions.exceptions.OpcaoInvalidaException;

import java.util.Scanner;
import java.lang.Exception;

public class Main {

    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        boolean loop = true;
        Agenda agenda = new Agenda();
        while (loop) {
            try{
                System.out.println("===== Menu ===== " + "\n 1 - Consultar um contato da agenda" + "\n 2 - Adicionar um contato na agenda");
                int escolha = scan.nextInt();
                if (escolha != 1 || escolha != 2) {
                    throw new OpcaoInvalidaException();
                } else {
                    switch (escolha) {
                        case 1:
                            System.out.println("Informe Identificador do Contato: ");
                            int id = scan.nextInt();
                            agenda.consultarContato(id);
                            break;
                        case 2:
                            System.out.println("Nome: ");
                            String nome = scan.next();
                            System.out.println("E-mail: ");
                            String email = scan.next();
                            System.out.println("Telefone: ");
                            String tel = scan.next();

                            agenda.addContato(nome, tel, email);

                            break;
                    }
                }
            }catch(OpcaoInvalidaException e){
                System.out.println(e.getMessage());
            }
            try{
                System.out.println("\n Deseja continuar operação? " + "\n 1 - Sim " + "\n 2 - Não");
                int escolha = scan.nextInt();
                if (escolha != 1 || escolha != 2) {
                    throw new OpcaoInvalidaException();

                } else {
                    switch (escolha) {
                        case 1:
                            break;
                        case 2:
                            System.out.println("Finalizando Operação");
                            loop = false;
                            break;
                    }
                }
            }catch(OpcaoInvalidaException e){
                System.out.println(e.getMessage());
                break;
            }
        }
    }
}
