<?php
$client = new SoapClient(null, array(
      'location' => "http://localhost/kuis/lib/server.php",
      'uri'      => "http://localhost/kuis/lib/server.php",
      'trace'    => 1 
    )
);
