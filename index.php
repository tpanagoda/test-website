<html>
 <head>
 </head>
 <body>
 <?php
          //URL from which to get webpage contents.
          $url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
          
          // Initialize a CURL session.
          $newCurl = curl_init();
          
          //grab URL and pass it to the variable.
          curl_setopt($newCurl, CURLOPT_URL, $url);

          // Return Page contents.
          curl_setopt($newCurl, CURLOPT_RETURNTRANSFER, true);
          
          $output = curl_exec($newCurl);
          <p>availability-zone</p>
          echo $output;
          ?>
   <div class="form">
    <form method="POST" action="form.php">
      <p>
      <label for="fname">First Name </label>
      <input type="text" name="fname" id="fname">
      </p>
      <p>
      <label for="lname">Last Name </label>
      <input type="text" name="lname" id="lname">
      </p>
      <p>
      <label for="email">Email</label>
      <input type="text" name="email" id="email">
      </p>
      <p>
      <input type="submit" name="submit" id="submit" value="Submit">
      </p>
    </form>
 </body>
</html>