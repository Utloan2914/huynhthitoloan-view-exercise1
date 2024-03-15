<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>

</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1, i {
        display: inline-block;
        vertical-align: middle;
        }

        i {
            margin-left: 600px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }
        .card-header {
            background-color: #f0f0f0;
            padding: 10px;
            font-weight: bold;
        }
        .card-body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary {
            background-color: #007bff;
        }
        .list-group-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: none;
            padding: 10px;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ccc;
        }
        .list-group-item:last-child {
            border-bottom: none;
        }
        .btn-danger {
            background-color: #dc3545;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Task List<i class="fas fa-bars"></i></h1>
        <hr>
        <div class="card">
            <div class="card-header">New Task</div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="task">Task</label>
                        <input type="text" class="form-control" id="task" name="task" placeholder="Enter Task">
                    </div>
                    <button type="submit" class="btn btn-primary">+ Add Task</button>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Current Tasks</div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        First Task
                        <button type="button" class="btn btn-danger">Delete</button>
                    </li>
                    <li class="list-group-item">
                        Second Task
                        <button type="button" class="btn btn-danger">Delete</button>
                    </li>
                    <li class="list-group-item">
                        Third Task
                        <button type="button" class="btn btn-danger">Delete</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
