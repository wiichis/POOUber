class Paypal extends Payment{
    String paypalAccount;
    Integer ammount;

    public Paypal(Integer id, String paypalAccount, Integer ammount){
        super(id);
        this.paypalAccount = paypalAccount;
        this.ammount = ammount;
        
    }
}