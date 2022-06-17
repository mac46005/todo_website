<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current List</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/components/_nav.css">
    <link rel="stylesheet" href="./css/components/_table.css">
    <link rel="stylesheet" href="./css/sections/currentList.css">
</head>

<body>
    <div class="main-container">

        <nav>
            <div class="nav-container">
                <a href="./index.html">
                    <h4>ToDo List</h4>
                </a>
                <ul class="nav-menu">
                    <li><a href="./currentList.html">Current List</a></li>
                    <li><a href="./history.html">History</a></li>
                    <li><a id="addBtn" href="./add.html">Add</a></li>
                </ul>
            </div>
        </nav>




        <header>
            <div class="header-container">
                <h1>
                    Your ToDo List
                </h1>
            </div>
        </header>

        <main>
            <div class="content-container">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Desctiption</th>
                            <th scope="col">Due</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Completed</th>
                            <th scope="col">Completed date</th>
                            <th scope="col">Edit</a></th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $conn;
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbName = "todolistdb";

                        $conn = new mysqli($servername,$username,$password,$dbName);
                        $sql = "SELECT description, duedate, importanceLevel FROM todo_items";

                        if($result = $conn->query($sql)){
                            while($row = $result->fetch_row()){
                                echo $row[0]. " " . $row[1] . " " . $row[2] . "<br/>";
                            }
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </main>

        <footer>
            <div class="footer-container">

            </div>
        </footer>

    </div>
</body>

</html>