from account import Account

class Car:
    id        = int
    licence   = str
    driver    = str
    passenger = str

    def __init__(self, licence, driver):
        self.licence  = licence
        self.driver   = driver
