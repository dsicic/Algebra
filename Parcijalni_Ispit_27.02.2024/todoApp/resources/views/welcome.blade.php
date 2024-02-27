<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
        }
        .task-table {
            margin-top: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .task-table th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .task-table td {
            border: 1px solid #ddd;
            padding: 12px;
        }
        .task-table tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">TODO List</h2>
        <table class="table task-table">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Task 1</td>
                    <td><span class="badge badge-success">Completed</span></td>
                </tr>
                <tr>
                    <td>Task 2</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>Task 3</td>
                    <td><span class="badge badge-success">Completed</span></td>
                </tr>
                <!-- Dodajte više redova ovdje ako je potrebno -->
            </tbody>
        </table>
    </div>
</body>
</html>
