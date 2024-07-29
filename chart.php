<?php
// Assuming you have a database connection established

$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the rankings table and join with teams table
$sql = "SELECT r.ranking, t.team_name
        FROM rankings r
        JOIN teams t ON r.team_id = t.team_id
        ORDER BY r.ranking DESC";

$result = $conn->query($sql);

$dataPoints = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $teamName = $row["team_name"];
        $ranking = $row["ranking"];

        // Add each data point to the array
        $dataPoints[] = array("label" => $teamName, "y" => $ranking);
    }
}

$conn->close();
?>

<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Team Rankings"
                },
                axisY: {
                    title: "Ranking",
                    suffix: "",
                    scaleBreaks: {
                        autoCalculate: true
                    }
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
        }
    </script>
</head>
<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
