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
        <h1 class="text-center">Form Rectangle</h1>
        <div class="col"></div>
        <div class="col">
            <form action="Draw.php" method="post">
                <div class="mb-3">
                    <label for="inputLength" class="form-label">Length</label>
                    <input type="text" class="form-control" id="inputLength" name="length">
                </div>
                <div class="mb-3">
                    <label for="inputWidth" class="form-label">Width</label>
                    <input type="text" class="form-control" id="inputWidth" name="width">
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