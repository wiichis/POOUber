from account import Account

class User(Account):
    userScore = int

    def __init__(self, name, document, email, password, userScore):
        super().__init__(name, document, email, password)
        self.userScore = userScore
