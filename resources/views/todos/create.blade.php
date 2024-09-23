<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo create</title>
</head>

<body>
    <form action="{{ route('todos.store')}}" method="post" class="row g-3 needs-validation" novalidate>
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="validationCustom01" value="Mark" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</body>

</html>