class CreditCard extends Payment {
    constructor(id, cardNumber, cvv, expirationDate, ammount){
    super(id)
    this.paypalAccount = paypalAccount;
    this.cardNumber = cardNumber;
    this.cvv = cvv;
    this.ammount = ammount;
    }
}