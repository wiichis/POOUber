import java.util.ArrayList;
import java.util.Map;

class UberVan extends Car {
    Map<String, ArrayList<String,Integer>> typeCarAccepted;
    ArrayList<String> seatMeterial;

    public UberVan(String license, Account driver,Map<String, ArrayList<String,
    Integer>> typeCarAccepted, ArrayList<String> seatMeterial){
        super(license, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatMeterial = seatMeterial;
    }
}