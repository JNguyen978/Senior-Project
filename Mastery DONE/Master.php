<?PHP
$server = "localhost";
$username = "S0245819";
$password = "Nguyen1992";
$database = "S0245819";

$db = new mysqli($server,$username,$password,$database);
if ($db -> connect_error) die ("Connection Failed");
	//echo "Connected ";
	
//mysqli_select_db($db, "NarakaPain");
	
$RiotAPI = file_get_contents("https://global.api.pvp.net/api/lol/static-data/na/v1.2/mastery?api_key=RGAPI-9f105d8f-e469-4e5e-bf31-1d2be6fd6763");	
	//echo $RiotAPI; summoner-spell

$data = json_decode($RiotAPI, true);
		
	//var_dump($data);
	
$itemid = array(
'6121','6261','6122','6123',
'6141','6142','6162','6143',
'6161','6323','6341','6164',
'6342','6241','6321','6242',
'6322','6243','6262','6263',
'6343','6352','6351','6212',
'6211','6111','6134','6114',
'6151','6131','6231','6311',
'6154','6232','6312','6331',
'6332','6251','6252','6221',
'6362','6361','6363','6223',
'6222');

	//echo $spells[0]; 
	
for ($i = 0; $i<=45;$i++){
	
$id = $data["data"][$itemid[$i]]['id'];	
	echo "id = ($id)";
$name = $data["data"][$itemid[$i]]['name'];	
	echo "name = ($name)";
//$plaintext = $data["data"][$itemid[$i]]['plaintext'];
	//echo "plaintext =($plaintext)";
$description = $data["data"][$itemid[$i]]['description'][0];
	echo "description = ($description)";
	
	
$stmt = $db->prepare("INSERT INTO Mastery(id,description,name) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $id, $description, $name);

$stmt->execute();



$result = $db->query($sql);
echo $db->error;
echo $result;

}

?>
