<!DOCTYPE html>
<html>
<head>
  <title>SEDO Dictionary words</title>
</head>
<body>

<?PHP
$signkey='';
$partnerid='317279';

// Include the NuSOAP library.
require_once('nusoap/nusoap.php');

// Create a new client by providing the endpoint to the constructor.
$client = new nusoap_client('https://api.sedo.com/api/sedointerface.php');

// Check for errors
$error = $client->getError();
if ($error){echo $error;}

$domains = array();


$domains = array(
  'able.com',
  'about.com',
  'absence.com'
);

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
       for ($i = 0; $i<count($result); $i++)
       {
           $domainforsale = ($result[$i]['forsale'] == true) ? 'Yes' : 'No';
           echo 'Domain: '. $result[$i]['domain'] .'<br />';
           echo 'Forsale: '. $domainforsale .'<br />';
           echo 'Type: '. $result[$i]['type'] .'<br />';
           echo 'Price: '. $result[$i]['price'] .'<br />';
           echo 'Currency: '. $result[$i]['currency'] .'<br />';
           echo 'Visitors: '. $result[$i]['visitors'] .'<br />';
           echo 'Status: '. $result[$i]['domainstatus'] .'<br />';
           echo '---------------<br />';
       }

    }
}
?>

</body>
</html>
