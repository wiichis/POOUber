from payment import Payment

class Paypal(Payment):
    paypalAccount = str
    ammount       = int

    def __init__(self, id, paypalAccount, ammount):
        super().__init__(id)
        self.paypalAccount = paypalAccount
        self.ammount = ammount