<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name" class="form-label">
                        Name:
                    </label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="photo" class="form-label">
                        Photo:
                    </label>
                    <input type="file" name="photo" id="photo">
                </div>
                <div>
                    <button type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>
