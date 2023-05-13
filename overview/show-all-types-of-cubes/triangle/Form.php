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
        <h1 class="text-center">Form Square Triangle</h1>
        <div class="col"></div>
        <div class="col">
            <form action="Draw.php" method="post">
                <div class="mb-3">
                    <label for="inputWidth" class="form-label">Width</label>
                    <input type="text" class="form-control" id="inputWidth" name="width">
                </div>
                <div class="mb-3">
                    <label for="inputCorner" class="form-label">The corner is square at 4 different angles</label>
                    <select id="inputCorner" class="form-select" aria-label="Default select example" name="corner">
                        <option selected>Please select corner</option>
                        <option value="1">The square triangle bottom-left</option>
                        <option value="2">The square triangle top-left</option>
                        <option value="3">Isosceles triangle</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Draw</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>