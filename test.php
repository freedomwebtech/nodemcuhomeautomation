<?php
    if (isset($_POST['button']))
    {
         system("gpio -g mode 0 out");
        system("gpio -g write 23 1");

    }

    if (isset($_POST['butn']))
    {
         system("gpio -g mode 0 out");
        system("gpio -g write 23 0");

    }

?>
<html>
<body>
    <form method="post">
    <p>
        <button name="button">On</button>
    </p>
    <p>
      <button name="butn">Off</button>
    </form>
</body>
</html>
