package treinandoExceptions;

public class Contato {

    private String nome;
    private String tel;
    private String email;

    private int id;
    private static int contador = 0;

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getTel() {
        return tel;
    }

    public void setTel(String tel) {
        this.tel = tel;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public int getId() {
        return id;
    }

    public Contato(String nome, String tel, String email) {
        this.nome = nome;
        this.tel = tel;
        this.email = email;
        contador();
    }

    public void contador(){
        contador++;
        id = contador;
    }

    @Override
    public String toString() {
        return "Contato{" +
                "nome='" + nome + '\'' +
                ", tel='" + tel + '\'' +
                ", email='" + email + '\'' +
                ", id=" + id +
                '}';
    }
}
