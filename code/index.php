<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/todo.css" />
    <link rel="icon" href="img/icon.png" />
    <title>Todo-List</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> <a class="navbar-brand" href="index.php">Sign Up</a>
    <button class="navbar-toggler"
            type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"> <a class="nav-link" href="about.php">Login</a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container mt-5">
    <div class="row">
        <div class="col-8">
            <div class="card p-3 ">

                <div class="todoContainer">
                    <p>
                        <label for="addTask">Add Item</label><input id="addTask" type="text" placeholder="Add Task"><button>Add</button>
                    </p>

                    <h3>Todo</h3>
                    <ul id="incomplete-tasks">
                        <li class="editTask"><input type="checkbox"><label>Task One</label><input type="text" value="Task 1"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                        <li class="editTask"><input type="checkbox"><label>Task Two</label><input type="text" value="Task 2"><button class="edit">Edit</button><button class="delete">Delete</button></li>

                    </ul>

                    <h3>Completed</h3>
                    <ul id="completed-tasks">
                        <li><input type="checkbox" checked><label>Task Three</label><input type="text" value="Task 3"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card mb-5 shadow-sm bg-white rounded p-3">
                <div class="card-body">
                    <h3><a class="nav-link" href="about.php">Log Out</h3>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
<script type="text/javascript" src="js/taskjs.js"></script>
</body>
</html>
<!-- /.container -->
<html>
<p>the page to redirected to after login</p>
<script type="text/javascript" src="js/taskjs.js"></script>
</html>
