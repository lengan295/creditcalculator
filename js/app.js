angular.module("CreditCalcul", [])
    .controller("CalculatorController", function () {
        var calculator = this;

        calculator.credit = {
            amount : 100000,
            rate : 1.00,
            duration: 20
        };

        calculator.result = {
            per_month: 0,
            rows: [],
            cost: 0
        };

        calculator.calculate = function () {
            var months = calculator.credit.duration * 12;
            var rest = calculator.credit.amount;
            var total_interest = 0;
            calculator.result.rows = [];
            for (var month = 1; month <= months; month++) {
                var result = calculateRow(month, months, rest, calculator.credit.rate);
                rest -= result.principal;
                total_interest += result.interest;
                calculator.result.rows.push(result);
            }
            calculator.result.cost = total_interest;
            calculator.result.per_month = round(total_interest / months, 2);
        };

        function round(value, decimals) {
            return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
        }

        function calculateRow(month, months, rest, rate) {
            var year = Math.ceil(month / 12);

            return {
                year : year,
                month : month,
                rest : new_rest,
                principal : principal,
                interest : interest
            }
        }
    });
