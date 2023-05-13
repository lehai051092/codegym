<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <h1 class="text-center">Simple Calculator</h1>
        <div class="col"></div>
        <div class="col">
            <form action="Calculator.php" method="post">
                <div class="mb-3">
                    <label for="inputFirstOperand" class="form-label">First operand</label>
                    <input type="text" class="form-control" id="inputFirstOperand" name="first_operand">
                </div>
                <div class="mb-3">
                    <label for="inputOperator" class="form-label">Operator</label>
                    <select id="inputOperator" class="form-select" aria-label="Default select example" name="operator">
                        <option selected>Please select menu</option>
                        <option value="1">+</option>
                        <option value="2">-</option>
                        <option value="3">*</option>
                        <option value="4">/</option>
                        <option value="5">%</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputSecondOperand" class="form-label">Second operand</label>
                    <input type="text" class="form-control" id="inputSecondOperand" name="second_operand">
                </div>
                <button type="submit" class="btn btn-primary">Calculator</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>