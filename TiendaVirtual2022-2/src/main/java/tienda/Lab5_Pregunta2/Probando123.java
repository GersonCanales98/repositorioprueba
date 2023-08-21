package tienda.Lab5_Pregunta2;

import java.util.Comparator;
import java.util.LinkedList;

public class Probando123 {

    public static void main(String[] args) {

        LinkedList<PedidoDetallePromocion> pedidoprueba = new LinkedList<>();

        pedidoprueba.add(new PedidoPrueba("Gaseosa", 4, 2.50));
        pedidoprueba.add(new PedidoPrueba("Pan", 3, 1.50));
        pedidoprueba.add(new PedidoPrueba("Huevo", 8, 15.00));
        pedidoprueba.add(new PedidoPrueba("Mantequilla", 1, 3.50));
        pedidoprueba.add(new PedidoPrueba("Jamonada", 7, 20.00));

        System.out.println(pedidoprueba.toString());


            pedidoprueba.stream().sorted(Comparator.comparingDouble(PedidoPrueba::getPrecio)).forEach(System.out::println);

            //pedidoprueba.stream().sorted((x,y)->x.getCantidad() - y.getCantidad()).forEach(System.out::println);



    }

    }




class PedidoPrueba {

    private String nombre;
    private int cantidad;
    private double precio;

    public PedidoPrueba() {
    }

    public PedidoPrueba(String nombre, int cantidad, double precio) {
        this.nombre = nombre;
        this.cantidad = cantidad;
        this.precio = precio;
    }

    public String getNombre() {
        return nombre;
    }

    public int getCantidad() {
        return cantidad;
    }

    public double getPrecio() {
        return precio;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public void setCantidad(int cantidad) {
        this.cantidad = cantidad;
    }

    public void setPrecio(double precio) {
        this.precio = precio;
    }

    @Override
    public String toString() {
        return "PedidoPrueba{" +
                "nombre='" + nombre + '\'' +
                ", cantidad=" + cantidad +
                ", precio=" + precio +
                '}';
    }
}