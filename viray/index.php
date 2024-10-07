<?php require_once 'dbconfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--SHOW CODE DEMONSTRATING FETCH_ALL(). USE PRINT_R(). WITH “<pre>” TAG IN BETWEEN-->
    
<!--     <?php
    $stmt = $pdo -> prepare("SELECT * FROM members");

    if ($stmt -> execute()) {
        echo "<pre>";
        print_r($stmt -> fetchAll());
        echo "<pre>";
    }
    ?> -->

<!--SHOW CODE DEMONSTRATING HOW FETCH() IS USED. USE PRINT_R(). WITH “<pre>” TAG IN BETWEEN-->
    
<!--     <?php
    $stmt = $pdo -> prepare("SELECT * FROM members");

    if ($stmt -> execute()) {
        echo "<pre>";
        print_r($stmt -> fetch());
        echo "<pre>";
    }
    ?> -->

<!--SHOW CODE DEMONSTRATING INSERTION OF RECORD TO YOUR DATABASE-->

<!--    <?php
    $query = "INSERT INTO members (member_id, name, address, contact_number, join_date) VALUES (?,?,?,?,?)";
    
    $stmt = $pdo -> prepare($query);
    $executeQuery = $stmt -> execute(
        [6, "Alexander Briggs", "Dasma, Cavite", '091234567890', '10-01-2024']);

        if ($executeQuery) {
            echo "Query successful!";
        }else {
            echo "Query failed!";
        }
    ?> -->

<!--SHOW CODE DEMONSTRATING DELETION OF RECORD TO YOUR DATABASE-->

<!--     <?php
        $query = "DELETE FROM members WHERE id = 6";
        $stmt = $pdo -> prepare($query);

        $executeQuery = $stmt -> execute();

            if ($executeQuery) {
                echo "Deletion Successful!";
            }else {
                echo "Query failed!";
            }
    ?> -->

<!--SHOW CODE DEMONSTRATING UPDATING OF RECORD FROM YOUR DATABASE-->

<!--     <?php
            $query = "UPDATE members 
                    SET name = ?
                    WHERE member_id = 1
                    ";

            $stmt = $pdo->prepare($query);

            $executeQuery = $stmt->execute(
                ["Peter Griffin"]
            );

            if ($executeQuery) {
                echo "Update successful!";
            }
            else {
                echo "Query failed";
            }
    ?> -->

<!--SHOW CODE DEMONSTRATING AN SQL QUERY’S RESULT SET IS RENDERED ON AN HTML TABLE-->

<!--     <?php
            $query = "SELECT name, join_date FROM members";

        $stmt = $pdo->prepare($query);
        $executeQuery = $stmt->execute();

        if ($executeQuery) {
            $members = $stmt->fetchAll();
        }

        else {
            echo "Query failed";
        }
    ?> -->

    	<table>
		<tr>
			<th>Name</th>
			<th>Join Date</th>
		</tr>
		<?php foreach ($members as $row) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['join_date']; ?></td>
		</tr>
		<?php } ?>
	</table> 
</body>
</html>
