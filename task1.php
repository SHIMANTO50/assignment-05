<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <form method="post" action="submit-form.php">
            <div class="form-group row mt-5">
                <label for="name" class="col-sm-2 col-md-3 col-form-label">Name:</label>
                <div class="col-sm-10 col-md-9">
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>

            <div class="form-group row mt-5">
                <label for="email" class="col-sm-2 col-md-3 col-form-label">Email:</label>
                <div class="col-sm-10 col-md-9">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="form-group row mt-3">
                <div class="col-sm-10 offset-sm-2 col-md-9 offset-md-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>