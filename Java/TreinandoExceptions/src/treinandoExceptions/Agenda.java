package treinandoExceptions;

import treinandoExceptions.exceptions.AgendaCheiaException;
import treinandoExceptions.exceptions.ContatoNaoExisteException;

import java.util.ArrayList;

public class Agenda {

    private ArrayList <Contato> agenda;

    public Agenda(){
        agenda = new ArrayList<Contato>();
    }

    public void addContato(String nome, String tel, String email){
        try{
            if(agenda.size() <= 10){
                agenda.add(new Contato(nome, tel, email));
                System.out.println("Contato Adicionado com Sucesso!");
            }else{
                throw new AgendaCheiaException();
            }
        }catch(AgendaCheiaException e){
            System.out.println(e.getMessage());
        }
    }

    public void consultarContato(int id){
        try{
            for(int i = 0; i <= agenda.size(); i++){
                if(agenda.get(i).getId() == id){
                    System.out.println(agenda.get(i));
                    break;
                }
                else if(i == agenda.size()){
                    throw new ContatoNaoExisteException();
                }
            }
        }catch(ContatoNaoExisteException e){
            System.out.println(e.getMessage());
        }

    }
}
