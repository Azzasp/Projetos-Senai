
package com.mycompany.composicao;

public class Composicao {

    public static void main(String[] args) {
        Pessoa p1 = new Pessoa("Pedro", 60, 1.80d, 'O', 38173395);
        p1.apresentarPessoa();
        p1.setCoracao(new Coracao());
        
        Pessoa p2 = new Pessoa("Malena", 70, 1.54d, 'A', 29874);
        p2.apresentarPessoa();
        p2.setCoracao(new Coracao());
        
        Pessoa p3 = new Pessoa("Leonardo", 70, 1.74d, 'A', 29874);
        p3.apresentarPessoa();
        p3.setCoracao(new Coracao());
        
        Hospital hospital = new Hospital();
        
        hospital.cadastrarPaciente(p1);
        hospital.cadastrarPaciente(p2);
        hospital.cadastrarPaciente(p3);
        
        hospital.listarNomePacientes();
        System.out.println("Antigo Dono: "+p2.getCoracao().getDono());
        hospital.transplante(p2.getCoracao(), 0);
        System.out.println("Antigo Dono: "+p1.getCoracao().getDono());
        hospital.transplante(p1.getCoracao(), 2); 
    }
}
