<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <h1>
        Tasks
    </h1>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Due</th>
                        <th>Assigned To</th>
                        <th>Completed</th>
                    </th>
                </thead>
                <tbody>
                    <?php foreach($tasks as $task) : ?>
                        <tr>
                            <td><?= $task->title; ?></td>
                            <td><?= $task->due; ?></td>
                            <td><?= $task->assignedTo; ?></td>
                            <td><?= $task->isComplete()? "Yes" : "No"; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>