<?php
$Geography = 0;
$Maths = 0;
$Physics = 0;
$History = 0;
$English = 0;
$Economy = 0;
$Culture = 0;
$Current_Affairs = 0;
$General_Science = 0;
$Literature = 0;
$PrevYearQuestion = 0;
$Reasoning = 0;
$Aptitude = 0;
?>
<script>
    document.getElementById("Geography").onclick = function() {
        <?php if ($Geography == 1) {
            $Geography = 0;
        } else $Geography = 1  ?>
        if (document.getElementById("Geography").style.backgroundColor != "green")
            document.getElementById("Geography").style.backgroundColor = "green";
        else
            document.getElementById("Geography").style.backgroundColor = "";
    }
    document.getElementById("Maths").onclick = function() {
        <?php if ($Maths == 1) {
            $Maths = 0;
        } else $Maths = 1  ?>
        if (document.getElementById("Maths").style.backgroundColor != "green")
            document.getElementById("Maths").style.backgroundColor = "green";
        else
            document.getElementById("Maths").style.backgroundColor = "";
    }

    document.getElementById("Physics").onclick = function() {
        <?php if ($Physics == 1) {
            $Physics = 0;
        } else $Physics = 1  ?>
        if (document.getElementById("Physics").style.backgroundColor != "green")
            document.getElementById("Physics").style.backgroundColor = "green";
        else
            document.getElementById("Physics").style.backgroundColor = "";
    }

    document.getElementById("History").onclick = function() {
        <?php if ($History == 1) {
            $History = 0;
        } else $History = 1  ?>
        if (document.getElementById("History").style.backgroundColor != "green")
            document.getElementById("History").style.backgroundColor = "green";
        else
            document.getElementById("History").style.backgroundColor = "";
    }

    document.getElementById("Maths").onclick = function() {
        <?php if ($Maths == 1) {
            $Maths = 0;
        } else $Maths = 1  ?>
        if (document.getElementById("Maths").style.backgroundColor != "green")
            document.getElementById("Maths").style.backgroundColor = "green";
        else
            document.getElementById("Maths").style.backgroundColor = "";
    }
</script>