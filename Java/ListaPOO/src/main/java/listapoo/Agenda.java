/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package listapoo;

import java.util.ArrayList;


/**
 *
 * @author Pedro Erick
 */
public class Agenda {
    
    
    private ArrayList<Pessoa> armazena = new ArrayList<>();
    private static int i =0;
    
    
    public void armazenaPessoa(Pessoa pessoa, int idade, int altura){
        if(i<10){ //Nos vetores, utilizamos a posição 0
            
            armazena.add(pessoa);
            armazena.get(i).setAltura(altura);
            armazena.get(i).setIdade(idade);
            i++;  
        }
        else
            System.out.println("Agenda Cheia!");
    }
    /*
    public void removePessoa(String nome){
        for(int index =0; index<10; index++){
            if(armazena.equals(nome)){
                armazena.remove(nome);
            }
        }
    }
    
    public void buscarPessoa(String nome){   //tipo de retonro alterado p void (questão pede retorno int)
        for(int index =0; index<10; index++){
            if(armazena[index].equals(nome)){
                System.out.println(index);
            }
        }
        
    }
    */
    public void imprimirAgenda(){
        for(Pessoa p : armazena){
            System.out.println(p);
        }
    }
    
    public void imprimePessoa(int index){
        System.out.println(armazena.get(index));
    }
}
