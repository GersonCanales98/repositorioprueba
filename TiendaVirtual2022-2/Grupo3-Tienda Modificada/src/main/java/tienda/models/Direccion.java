package tienda.models;

public class Direccion {
    
    private String lote;
    private String manzana;

    public Direccion() { }

    public Direccion(String lote, String manzana) {
        this.lote = lote;
        this.manzana = manzana;   }

    
    public String getLote() {
        return lote;
    }
    public void setLote(String lote) {
        this.lote = lote;
    }
    public String getManzana() {
        return manzana;
    }
    public void setManzana(String manzana) {
        this.manzana = manzana;
    }


}
