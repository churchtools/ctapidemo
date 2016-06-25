<?
include_once('helper.php');

// Get login token to mghh churchtools
// Use this only one time to get a token. This token can be saved to a file
// so there is no need to put a password in a file!
$url = 'https://mghh.churchtools.de/?q=login/ajax';
$data = array('func' => 'getUserLoginToken', 
              'email' => 'sabine@mghh.churchtools.de', 
              'password' => '1234'); 
$result = sendRequest($url, $data);
$token = $result->data->token;
$id = $result->data->id;

// Now use token to login 
$data = array('func' => 'loginWithToken', 
              'token' => $token,
              'id' => $id,
              'directtool' => 'MyTestAPI'
        );
$result = sendRequest($url, $data);
echo "Login erfolgreich!<br/>";

// Now get all Person data
$url = 'https://mghh.churchtools.de/index.php?q=churchdb/ajax';
$data = array('func' => 'getAllPersonData'); 
$result = sendRequest($url, $data);
echo "Userlist<br/>";
print_r($result->data);

?>
