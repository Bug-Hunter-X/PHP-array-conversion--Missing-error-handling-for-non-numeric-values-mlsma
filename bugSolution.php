function foo(array $arr): array {
  if (empty($arr)) {
    return [];
  }

  $result = [];
  foreach ($arr as $value) {
    try {
      if (is_numeric($value)) {
        $result[] = (int)$value;
      } else {
        //Handle the exception and log an error message for debugging
        throw new InvalidArgumentException("Non-numeric value encountered: " . $value);
      }
    } catch (InvalidArgumentException $e) {
      error_log("Error converting array value: " . $e->getMessage());
    }
  }

  return $result;
}