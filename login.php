<?

include_once('helper.php');

// Login with email and password
$url = 'https://mghh.churchtools.de/index.php?q=login/ajax';
$data = array('func' => 'login', 
              'email' => 'sabine@mghh.churchtools.de', 
              'password' => '1234'); 
$result = sendRequest($url, $data);
if ($result->status == "fail") {
  echo $result->data;
  return;
}
echo "Login erfolgreich!<br/>";

// Now get all Person data
$url = 'https://mghh.churchtools.de/index.php?q=churchdb/ajax';
$data = array('func' => 'getAllPersonData'); 
$result = sendRequest($url, $data);
echo "Userlist<br/>";
print_r($result->data);

?>
