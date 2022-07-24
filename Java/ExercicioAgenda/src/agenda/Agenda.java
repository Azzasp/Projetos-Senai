package agenda;

import java.util.ArrayList;
public class Agenda {
    private int i = 0;
    private ArrayList<Pessoa> armazena = new ArrayList<>();

    public void armazenaPessoa(String nome, int idade, float altura){
        if(i<10){
            armazena.add(new Pessoa(nome, idade, altura));
            i++;
        }
        else
            System.out.println("Agenda Está Cheia!");
    }

    public void imprimeAgenda(){
        for(Pessoa p : armazena){
            System.out.println(p);
        }
    }
}
