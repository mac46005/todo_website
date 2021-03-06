<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/components/_nav.css">
    <link rel="stylesheet" href="./css/components/_table.css">
    <link rel="stylesheet" href="./css/sections/history.css">
</head>
<body>
    <div class="main-container">
        <nav>
            <div class="nav-container">
                <a href="./index.html">
                    <h4>ToDo List</h4>
                </a>
                <ul class="nav-menu">
                    <li><a href="./currentList.php">Current List</a></li>
                    <li><a href="./history.php">History</a></li>
                    <li><a id="addBtn" href="./add.html">Add</a></li>
                </ul>
            </div>
        </nav>
        <header>
            <h1>
                Your Completed List
            </h1>
        </header>
        <main>
            <div class="content-container">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Desctiption</th>
                            <th scope="col">Due</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Completed date</th>
                            <th scope="col">Mark as Uncomplete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php




                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $dbName = "todolistdb";
                        try {
                            $conn = new mysqli($server,$username,$password,$dbName);
                            $sql = "SELECT id,description, dueDate, dateCreated, dateCompleted FROM todo_items WHERE isDone = TRUE ";

                            if($result = $conn->query($sql)){
                                while($row = $result->fetch_row()){
                                    echo "<tr>";
                                    echo "<td>$row[1]</td>";
                                    echo "<td>$row[2]</td>";
                                    echo "<td>$row[3]</td>";
                                    echo "<td>$row[4]</td>";
                                    echo "<td><a href='./script/chngToInComplete.php?id=$row[0]'>Chng</a></td>";
                                    echo "</tr>";
                                }
                            }

                        } catch (\Throwable $th) {
                            //throw $th;
                        }



                        ?>
                    </tbody>

                </table>
            </div>
        </main>
    </div>
</body>
</html>