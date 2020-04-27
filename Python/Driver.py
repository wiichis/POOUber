from account import Account

class Driver(Account):
    driverslicense = int
    driverscore = int

    def __init__(self, name, document, email, password, driverslicense, driverscore):
        super().__init__(name, document, email, password)
        self.driverslicense = driverslicense
        self.driverscore = driverscore