package senai.empregado;

public class Main {

    public static void main(String[] args) {
        Empregado empregado1 = new Empregado("Pedro", 1994, 12345, 2005);

        empregado1.isApto();
        System.out.println(empregado1);
    }
}
