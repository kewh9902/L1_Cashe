<?php

include "header.php";
myHeader("Solve the Puzzle!");

if (!currentUser()) {
    header("Location: /");
    exit;
}

echo "<h1>" . $_GET['correct'] . "</h1>";

?>

<div style="padding: 50px; width: 400px; background-color: #13c6ba; margin: auto; color: white; cursor: pointer;" id="solve-hints-treasure">
    <h3>Check for Hints or Treasure</h3>
</div>

<div id="answerForm">
</div>

<?php

include "footer.php";
/* End of file <`2solve`>.php */
