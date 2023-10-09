<?php
class PluginStringCsv{
  /**
   * Convert a csv string to array.
   * Separated by ";" or tab.
   * @param string $str String in csv format.
   * @param string $delimiter semicolon (default) or tab.
   * @return array
   */
  public function stringToArray($str, $delimiter = 'semicolon'){
    wfPlugin::includeonce('string/array');
    $sa = new PluginStringArray();
    $rows = $sa->from_br($str);
    $data = array();
    foreach($rows as $v){
      if($delimiter=='semicolon'){
        $data[] = $sa->from_char($v, ';');
      }elseif($delimiter=='tab'){
        $data[] = $sa->from_tab($v);
      }
    }
    return $data;
  }
}