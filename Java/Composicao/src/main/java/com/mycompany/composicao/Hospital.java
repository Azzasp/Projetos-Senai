
package com.mycompany.composicao;

import java.util.ArrayList;

public class Hospital {
    private String nome;
    private int cnpj;
    private static int i = 0;
        
    ArrayList<Pessoa> paciente = new ArrayList();
    
    

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getCnpj() {
        return cnpj;
    }

    public void setCnpj(int cnpj) {
        this.cnpj = cnpj;
    }
    
    public void cadastrarPaciente(Pessoa pessoa){
        if(i<10){
           paciente.add(pessoa);
           i++;
        }
        else
            System.out.println("Limite de Paciente cadastrado atingido!");
        
    }
    public void listarNomePacientes(){
        for(int d = 0; d<paciente.size(); d++){
            System.out.println(paciente.get(d).getNome());
        }
    }
    
    public void transplante(Coracao coracao, int id){
        paciente.get(id).setCoracao(coracao);
        coracao.setDono(paciente.get(id).getNome());
        System.out.println("Dono Atual: "+coracao.getDono());
    }
}
