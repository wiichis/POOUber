from payment import Payment

class CreditCard(Payment):
    cardNumber     = int
    cvv            = int
    dateExpiration = str
    ammount        = str

    def __init__(self, id, cardNumber, cvv, dateExpiration, ammount):
        super().__init__(id)
        self.cardNumber = cardNumber
        self.cvv = cvv
        self.dateExpiration = dateExpiration
        self.ammount = ammount