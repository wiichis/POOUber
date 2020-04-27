class Paypal extends Payment {
    constructor(id, paypalAccount, ammount){
    super(id)
    this.paypalAccount = paypalAccount;
    this.ammount = ammount;
    }
}