<!DOCTYPE html>
<html>
<head>
  <title>SEDO Dictionary words</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<?php

error_reporting(E_ALL);

require_once('soap/nusoap/nusoap.php');

function create_domains($text)
{
    $lines = preg_split("/\s/", $text);

    $domains = array();
    foreach ($lines as $line) {
       
        $line = trim($line);
        $line = preg_replace('/[^a-z0-9\-]/i', '', $line);

        if ($line) {
          $extensions = array('com', 'net', 'io', 'co');
          foreach ($extensions as $ext) {
            $domains[] = $line . '.' . $ext;
          }
        }
    }

    return $domains;
}

$text = isset($_POST['text']) ? $_POST['text'] : null;

?>

<form method="post">
  <div class="form-group">
    <label>Input</label>
    <textarea class="form-control" name="text"><?php echo htmlentities($text); ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Go</button>
</form>

<?php

if ($text) {

    $domains = create_domains($text);

    $signkey='';
    $partnerid='317279';

    // Create a new client by providing the endpoint to the constructor.
    $client = new nusoap_client('https://api.sedo.com/api/sedointerface.php');

    // Check for errors
    $error = $client->getError();
    if ($error){echo $error;}

    // Set the values for the array
    $params = array('domainlist' => $domains,
                    'partnerid' => $partnerid,
                    'signkey' => $signkey
                    );

    // Call the SOAP method
    $result = $client->call('DomainStatus', array('name' => $params), 'urn:SedoInterface');

    // Check for a fault
    if ($client->fault)
    {
        // Error Code
        echo 'Faultcode: '.$result['faultcode'].'<br />';
        // Error description
        echo 'Faultstring: '.$result['faultstring'].'<br />';
    }
    else
    {
        // Check for errors
        $err = $client->getError();
        if ($err)
        {
            // Display the error
            echo $err;
        }
        else
        {
           ?>
           <table class="table table-striped">
             <tr>
               <th>Domain</th>
               <th>Type</th>
               <th>Price</th>
               <th>Currency</th>
               <th>Visitors</th>
               <th>Status</th>
             </tr>
           <?php
           $count = 0;
           for ($i = 0; $i<count($result); $i++)
           {
               if ($result[$i]['forsale'] == true) {
                 echo '<tr>';
                 echo '<td>'. $result[$i]['domain'] .'</td>';
                 echo '<td>'. $result[$i]['type'] .'</td>';
                 echo '<td>'. $result[$i]['price'] .'</td>';
                 echo '<td>'. $result[$i]['currency'] .'</td>';
                 echo '<td>'. $result[$i]['visitors'] .'</td>';
                 echo '<td>'. $result[$i]['domainstatus'] .'</td>';
                 echo '</tr>';
                 $count++;
               }
           }

           if ($count == 0) {
             echo '<tr><td colspan="6">No domains for sale. :(</td></tr>';
           }
           ?>
             </table>
           <?php
        }
    }
}

?>
</div>
</body>
</html>