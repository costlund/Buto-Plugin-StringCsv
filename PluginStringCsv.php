<?php
class PluginStringCsv{
  /**
   * Convert a csv string to array.
   * Separated by ";".
   * @param string $str String in csv format.
   * @return array
   */
  public function stringToArray($str){
    wfPlugin::includeonce('string/array');
    $sa = new PluginStringArray();
    $rows = $sa->from_br($str);
    $data = array();
    foreach($rows as $v){
      $data[] = $sa->from_char($v, ';');
    }
    return $data;
  }
}