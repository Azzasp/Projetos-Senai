package senai.empregado;

public class Empregado {
    private String nome;
    private int anoNasc;
    private int matricula;
    private int anoContrato;
    private boolean apto;

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public int getAnoNasc() {
        return anoNasc;
    }

    public void setAnoNasc(int anoNasc) {
        this.anoNasc = anoNasc;
    }

    public int getMatricula() {
        return matricula;
    }

    public void setMatricula(int matricula) {
        this.matricula = matricula;
    }

    public int getAnoContrato() {
        return anoContrato;
    }

    public void setAnoContrato(int anoContrato) {
        this.anoContrato = anoContrato;
    }

    public boolean isApto() {
        return apto;
    }

    public Empregado(String nome, int anoNasc, int matricula, int anoContrato) {
        this.nome = nome;
        this.anoNasc = anoNasc;
        this.matricula = matricula;
        this.anoContrato = anoContrato;
    }

    
}
