<?php
function regionsSelect($rid) {

  global $pdo;

  //get list
  $sql = "select * from sl_geoloc order by geoloc_country_name ASC, geoloc_state_name ASC";
  $q = $pdo->prepare($sql);
  $q->execute(array());
  $r=$q->fetchAll();
  if(empty($r))
  {
    return 0;
  }

  $selected = 0;
  $return = "";
  //check for selected country/region
  if($rid <> 0)
  {
    $sql = "select * from sl_geoloc where geoloc_id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($rid));
    $r2=$q->fetchAll();
    if(!empty($r2))
    {
      $selected = $r2[0]['geoloc_id'];
    }
  }


  //check for auto-suggested country/region
  if($selected == 0)
  {
    $ip = $_SERVER['REMOTE_ADDR']; // the IP address to query
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    if($query && $query['status'] == 'success') {
      $country = $query['countryCode'];
      $region = $query['regionName'];
    }

    $sql = "select * from sl_geoloc where geoloc_country_code = ? and geoloc_state_name = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($country, $region));
    $r2=$q->fetchAll();
    if(!empty($r2))
    {
      $selected = $r2[0]['geoloc_id'];
    }
  }


  $return .= "<select class=\"form-select\" aria-label=\"Region / Country \" id=\"sl_region\" name=\"region\">\n";
  $return .= "<option value=\"0\">SELECT</option>";
  foreach($r as $row)
  {
    $return .= "<option value=\"".$row['geoloc_id']."\"";
    if($selected == $row['geoloc_id']){ $return .= " selected";}
    $return .= ">".$row['geoloc_state_name']." / ".$row['geoloc_country_name']."</option>\n";
  }
  $return .= "</select>\n";
  $return .= "<label for=\"sl_region\">Region / Country</label>";
  $return .= "<script>\n";
  $return .= "new TomSelect(\"#sl_region\",{\n";
  $return .= "	create: false,\n";
  $return .= "});\n";
  $return .= "</script>\n";

  return $return;
}
?>
