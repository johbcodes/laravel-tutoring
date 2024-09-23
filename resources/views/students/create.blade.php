<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <form action="{{ route('student.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" name="first_name" class="form-control" id="validationCustom01" value="Mark" required>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
    </form>

    <script>
        var token = $("meta[name=csrf-token]").attr('content');

        $.ajax({
            // add token to headers 
        })
    </script>
</body>

</html>