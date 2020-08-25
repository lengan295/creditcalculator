angular.module("CreditCalcul", [])
    .controller("CalculatorController", function () {
        var calculator = this;

        calculator.credit = {
            amount : 0.00,
            rate : 1.00,
            duration: 20
        }
    });
