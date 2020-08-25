<?php

?>

<html>
<head>
    <script src="js/angular1-8-0.js"></script>
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div ng-app="CreditCalcul" ng-controller="CalculatorController as calculator">
    <div id="header">
        Credit Calculator
    </div>
    <div id="content">
        <div id="input">
            <form>
                <table>
                    <tr>
                        <td>
                            <label for="amount">Montant :</label>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="number" step="1000"
                                       class="form-control"
                                       placeholder="Montant"
                                       id="amount"
                                       ng-model="calculator.credit.amount">
                                <div class="input-group-append">
                                    <span class="input-group-text">€</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="rate">Taux :</label>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="number" step="0.01" class="form-control"
                                       placeholder="Taux"
                                       id="rate"
                                       ng-model="calculator.credit.rate"
                                >
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="duration">Durée :</label>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control"
                                       placeholder="Durée"
                                       id="duration"
                                       ng-model="calculator.credit.duration"
                                >
                                <div class="input-group-append">
                                    <span class="input-group-text">ans</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
        </div>
        <div id="result">

        </div>
    </div>
</div>
</body>
</html>
