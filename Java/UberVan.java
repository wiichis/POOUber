import java.util.ArrayList;
import java.util.Map;

class UberVan extends Car {
    Map<String, Map<String,Integer>> typeCarAccepted;
    ArrayList<String> seatMeterial;
    private Integer passenger;

    public UberVan(String license, Account driver,Map<String, ArrayList<String,
    Integer>> typeCarAccepted, Map<String> seatMeterial){
        super(license, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatMeterial = seatMeterial;
    }
    @Override
    public void setPassenger(Integer passenger) {
        if(passenger == 6){
            this.passenger = passenger;
            }else{
                System.out.println("Necesitas asignar 4 pasajeros");
            }
    }
    public UberVan(String license, Account driver){
        super(license, driver);
    }

}