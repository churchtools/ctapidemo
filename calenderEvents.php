<?

include_once('helper.php');

// Get Calendar events. Make sure the calendar is available for public user
// otherwise login before
$url = 'https://mghh.church.tools/index.php?q=churchcal/ajax';
$data = array('func' => 'getCalendarEvents', 
		'category_ids[]' => '1',
	      	'category_ids[]' => '2',
	    	'category_ids[]' => '3',
            	'from' => 0,  
            	'to' => '10'); 
$result = sendRequest($url, $data);
if ($result->status == "fail") {
  echo $result->data;
  return;
}
print_r($result->data);

?>
