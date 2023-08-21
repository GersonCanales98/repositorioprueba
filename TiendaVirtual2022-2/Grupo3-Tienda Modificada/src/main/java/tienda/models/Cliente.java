package tienda.models;


public class Cliente {

    private String id;
    private String nombre;
    private String direccion;
    private String numeroDocumento;
    private Direccion dir;

    public Cliente() {}

    public Cliente(String numeroDocumento) { 
        this.numeroDocumento = numeroDocumento; 
                                            }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public void setNombre(String nombre)    {
        this.nombre = nombre;
    }

    public String getNombre()   {
        return this.nombre;
    }

    public void setDireccion(String direccion)    {
        this.direccion = direccion;
    }

    public String getDireccion()   {
        return this.direccion;
    }

    public void setNumeroDocumento(String numeroDocumento)    {
        this.numeroDocumento = numeroDocumento;
    }

    public String getNumeroDocumento()   {
        return this.numeroDocumento;
    }

    public Direccion getDir() {
        return dir;
    }

    public void setDir(Direccion dir) {
        this.dir = dir;
    }

    public String imprimeDatosCliente(Cliente cli)  {
        StringBuffer salida = new StringBuffer();
        System.out.println("\nDATOS DEL CLIENTE");
        salida.append("Cliente Id: " + cli.numeroDocumento);
        salida.append("\nNombres: " + cli.nombre);
        salida.append("\nDireccion: " + cli.direccion);
        salida.append("\nManzana: " + cli.dir.getManzana());
        salida.append("\nLote: " + cli.dir.getLote());
        return salida.toString(); 
                                                    } 

/* 
    public String imprimeDatosCliente()  {

        StringBuffer salida = new StringBuffer();
        System.out.println("\nDATOS DEL CLIENTE");
        salida.append("Cliente Id: " + this.numeroDocumento);
        salida.append("\nNombres: " + this.nombre);
        salida.append("\nDireccion: " + this.direccion);
        salida.append("\nManzana: " + this.dir.getManzana());
        salida.append("\nLote: " + this.dir.getLote());
        return salida.toString(); 
    } 
*/

}