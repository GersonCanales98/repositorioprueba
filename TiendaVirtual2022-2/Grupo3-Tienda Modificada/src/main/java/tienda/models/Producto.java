
package tienda.models;

public class Producto {
    private String id, producto, unidadMedida,marca;
    private Double precio;
    private int cantidadMaxima;
    
    public Producto() {}
    public String getId() { return id; }
    public void setId(String id) { this.id = id; }
    public Double getPrecio() { return precio; }
    public void setPrecio(Double precio) { this.precio = precio; }
    public String getUnidadMedida() { return unidadMedida; }
    public void setUnidadMedida(String unidadMedida) { this.unidadMedida = unidadMedida; }
    public String getMarca() { return marca; }
    public void setMarca(String marca) { this.marca = marca; }
    public int getCantidadMaxima() { return cantidadMaxima; }
    public void setCantidadMaxima(int cantidadMaxima) { this.cantidadMaxima = cantidadMaxima; }
    public String getProducto() {  return producto; }
    public void setProducto(String producto) { this.producto = producto; }
    
    public String imprimeDatosProducto(Producto product)  {
        StringBuffer salida = new StringBuffer();
        salida.append("Producto Id: " + product.id);
        salida.append("\nProducto: " + product.producto);
        salida.append("\nPrecio: " + product.precio);
        salida.append("\nUnidad de medida: " + product.unidadMedida);
        salida.append("\nMarca: " + product.marca);
        salida.append("\nCantidad M?xima: " + product.cantidadMaxima);
        return salida.toString();
                                                        }
}
