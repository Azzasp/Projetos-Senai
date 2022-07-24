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

    public void removePessoa(String nome){
        for(Pessoa p : armazena){
            if(p.getNome().equals(nome)) {
                armazena.remove(p);
                break;
            }
        }
    }

    public int buscaPessoa(String nome){
        int b = 0;
        for(int a = 0; a<armazena.size(); a++){
            if(armazena.get(a).getNome().equals(nome)){
              b = armazena.indexOf(armazena.get(a));
              break;
            }
        }
        System.out.println(nome+" está na posição: " +b);
        return b;
    }

    public void imprimePessoa(int index){
        System.out.println(armazena.get(index));
    }
}
