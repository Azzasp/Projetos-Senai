/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package listapoo;

/**
 *
 * @author Pedro Erick
 */
public class ListaPOO {

    public static void main(String[] args) {
        Agenda agenda = new Agenda();
        Pessoa pedro = new Pessoa();
        
        agenda.armazenaPessoa(pedro, 18, 180);
        agenda.imprimirAgenda();
        
    }
}
