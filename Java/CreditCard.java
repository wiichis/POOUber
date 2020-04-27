import java.sql.Date;

class CreditCard extends Payment{
    Integer cardNumber;
    Integer cvv;
    Date expirationDate;
    Integer ammount;

    public CreditCard(Integer id, Integer cardNumber, Integer cvv, Date expirationDate, Integer ammount){
        super(id);
        this.cardNumber = cardNumber;
        this.cvv = cvv;
        this.expirationDate = expirationDate;
        this.ammount = ammount;
        
    }
}