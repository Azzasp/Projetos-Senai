/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package listapoo;

/**
 *
 * @author Pedro Erick
 */
public class Pessoa {
    
    private String nome;
    private int dataNasc;
    private int altura;
    private int idade;

    public String getNome() {
        return nome;
    }

    public int getDataNasc() {
        return dataNasc;
    }

    public int getAltura() {
        return dataNasc;
    }
    
    public int getIdade(){
        return idade;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setDataNasc(int dataNasc) {
        this.dataNasc = dataNasc;
    }

    public void setAltura(int dataNasc) {
        this.dataNasc = dataNasc;
    }
    
    public void setIdade(int idade){
        this.idade = idade;
    }
    
    public void imprimir(){
        System.out.println("Nome: " +getNome());
        System.out.println("Nome: " +getAltura()+"cm");
        System.out.println("Nome: " +getDataNasc());
    }
    
    public void calcularIdade(){
        idade = 2022 - getDataNasc();
        System.out.println("Idade: " +idade);
    }

    @Override
    public String toString() {
        return "Nome: " +getNome() + " Idade: " +getIdade() +"  Altura: " +getAltura();
    }
    
    
    
}
