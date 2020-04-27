from payment import Payment

class Paypal(Payment):
    ammount = str

    def __init__(self, id, ammount):
        super().__init__(id)
        self.ammount = ammount