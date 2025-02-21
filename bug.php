function foo(array $arr): array {
  if (empty($arr)) {
    return [];
  }

  $result = [];
  foreach ($arr as $value) {
    if (is_numeric($value)) {
      $result[] = (int)$value;
    } else {
      //This is where the bug could occur
      //Error Handling missing
      $result[] = $value;
    }
  }

  return $result;
}