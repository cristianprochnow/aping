<?php

class Uri
{
  static public function getUri(string $requestUri): string
  {
    return parse_url($requestUri, PHP_URL_PATH);
  }

  static public function getResources(string $uri, string $indexFileName): array
  {
    // Remove file path from uri.
    $resources = substr($uri, strpos($uri, $indexFileName) + strlen($indexFileName));
    $resources = self::clearUri($resources);

    return explode('/', $resources);
  }

  // Function to remove `/` in first or last character from uri.
  static public function clearUri(string $uri): string
  {
    $serializedUri = str_split($uri);
    $characterToRemove = '/';

    $firstIndex = 0;
    if ($serializedUri[$firstIndex] == $characterToRemove) {
      array_shift($serializedUri);
    }

    $lastIndex = count($serializedUri) - 1;
    if ($serializedUri[$lastIndex] == $characterToRemove) {
      array_pop($serializedUri);
    }

    return join('', $serializedUri);
  }
}