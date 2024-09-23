<?php
function gameSystemsSelect($gamesystems) {

  global $pdo;

  //get list
  $sql = "select * from sl_game_system order by game_system_name ASC";
  $q = $pdo->prepare($sql);
  $q->execute(array());
  $r=$q->fetchAll();
  if(empty($r))
  {
    return 0;
  }
  $return .= "<select id=\"sl_game_systems\" name=\"gamesystems[]\" multiple placeholder=\"Select Game Systems\" autocomplete=\"off\" aria-label=\"Game Systems\" class=\"form-select\">\n";
  foreach($r as $row)
  {
    $return .= "<option value=\"".$row['game_system_id']."\"";
    if(is_array($gamesystems)){
    if(in_array($row['game_system_id'], $gamesystems)){$return .= " selected";}
    }
    $return .= ">".$row['game_system_name']."</option>\n";
  }
  $return .= "</select>\n";
  $return .= "<label for=\"sl_game_systems\">Game Systems</label>";

  $return .= "<script>\n";
  $return .= "new TomSelect(\"#sl_game_systems\",{\n";
  $return .= "});\n";
  $return .= "</script>\n";


  return $return;
}
?>
