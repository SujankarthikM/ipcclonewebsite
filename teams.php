<?php
    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function fetchTeamsFromDatabase($conn) {
        $sql = "SELECT teams.team_id, teams.team_name, teams.team_description, GROUP_CONCAT(team_members.member_name SEPARATOR ', ') AS members
                FROM teams
                LEFT JOIN team_members ON teams.team_id = team_members.team_id
                GROUP BY teams.team_id";

        $result = $conn->query($sql);

        $teams = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $teams[] = $row;
            }
        }

        return $teams;
    }

    $teams = fetchTeamsFromDatabase($conn);

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Create Team</h2>
    <form action="create_team.php" method="post">
        <label for="teamName">Team Name:</label>
        <input type="text" id="teamName" name="teamName" required>

        <label for="teamDescription">Team Description:</label>
        <textarea id="teamDescription" name="teamDescription" required></textarea>

        <button type="submit">Create Team</button>
    </form>

    <h2>Add Member to Team</h2>
<form action="add_member.php" method="post">
    <label for="teamID">Team ID:</label>
    <input type="number" id="teamID" name="teamID" required>

    <label for="userID">User ID:</label>
    <input type="number" id="userID" name="userID" required>

    <button type="submit">Add Member</button>
</form>

    <h2>Teams</h2>
    <table>
        <thead>
            <tr>
                <th>Team ID</th>
                <th>Team Name</th>
                <th>Team Description</th>
                <th>Members</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($teams as $team) {
                echo "<tr>";
                echo "<td>{$team['team_id']}</td>";
                echo "<td>{$team['team_name']}</td>";
                echo "<td>{$team['team_description']}</td>";
                echo "<td>{$team['members']}</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>

</body>
</html>
