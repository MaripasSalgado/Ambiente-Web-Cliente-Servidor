<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Task Manager</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Task Manager</h2>
        <form id="taskForm">
            <div class="form-group">
                <label for="taskName">New Task:</label>
                <input type="text" class="form-control" id="taskName" name="taskName" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
        <hr>
        <h3>Task List</h3>
        <ul id="taskList" class="list-group">
            <!-- Task items will be displayed here -->
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>