
package com.mycompany.composicao;

public class Pessoa {
    private String nome;
    private int peso;
    private double altura;
    private int cpf;
    private char tipo;
    private Coracao coracao;

    public Coracao getCoracao() {
        return coracao;
    }

    public void setCoracao(Coracao coracao) {
        this.coracao = coracao;
        coracao.setDono(nome);
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getPeso() {
        return peso;
    }

    public void setPeso(int peso) {
        this.peso = peso;
    }

    public double getAltura() {
        return altura;
    }

    public void setAltura(double altura) {
        this.altura = altura;
    }

    public int getCpf() {
        return cpf;
    }

    public void setCpf(int cpf) {
        this.cpf = cpf;
    }

    public char getTipo() {
        return tipo;
    }

    public void setTipo(char tipo) {
        this.tipo = tipo;
    }
    
    public void andar(){
        System.out.println("Estou andando!");
    }
    
    public void falar(String fala){
        System.out.println(nome+ " : "+fala);
    }
    
    public Pessoa(){
        
    }
    public Pessoa(String nome, int peso, double altura, char tipo, int cpf){
        this.nome = nome;
        this.peso = peso;
        this.altura = altura;
        this.cpf = cpf;
        this.tipo = tipo;
    }
    public void apresentarPessoa(){
        
        System.out.println("Nome: " +nome);
        System.out.println("Peso: "+peso);
        System.out.println("Altura: " +altura);
        System.out.println("Tipo Sanguineo: "+tipo);
        System.out.println("CPF: " +cpf);
        
        System.out.println("###############################");
    }
}
