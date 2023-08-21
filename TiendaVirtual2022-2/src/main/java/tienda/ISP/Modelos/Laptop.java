
package tienda.ISP.Modelos;

import org.bson.types.ObjectId;
import tienda.models.Producto;

public class Laptop extends Producto{
    
    private String serie;
    private double peso;
    private int anio;


    
    public Laptop(String marca, double peso, int anio) {
        this.serie = marca;
        this.peso = peso;
        this.anio = anio;
    }

    public double getPeso() {
        return peso;
    }

    public void setPeso(double peso) {
        this.peso = peso;
    }
 
    
    public String getSerie() {
        return serie;
    }

    public void setSerie(String serie) {
        this.serie = serie;
    }


    public int getAnio() {
        return anio;
    }

    public void setAnio(int anio) {
        this.anio = anio;
    }

    @Override
    public String toString() {
        return "Laptop{" + "serie=" + serie + ", peso=" + peso + ", a�o lanzamiento=" + anio + '}';
    }
    
    
    
}
