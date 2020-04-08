<?php
    if (isset($_POST['button']))
    {
         exec("python3 /home/pi/ledon.py");
         

    }

    if (isset($_POST['butn']))
    {
         exec("python3 /home/pi/ledoff.py");
         

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
