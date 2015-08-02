<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 02.08.2015
 * Time: 10:32
 */

ini_set('display_errors', 1);

include "./vendor/autoload.php";

// make some custom exceptions
class HttpRedirectException extends Exception {}
class HttpClientException extends Exception {}
class HttpServerException extends Exception {}

function fetchHttpBody($url)
{
    $browser = new Buzz\Browser();
    $response = $browser->get($url);

    $content = $response->getContent();
    $statusCode = $response->getStatusCode();

    $statusGroup = substr((string) $statusCode, 0, 1);

    switch ($statusGroup) {
        case '2':
            return $content;
        case '3':
            throw new HttpRedirectException('HTTP request was redirected', $statusCode);
        case '4':
            throw new HttpClientException('You made a bad request', $statusCode);
        case '5':
            throw new HttpServerException('The server you tried calling is not ok', $statusCode);
        default:
            throw new Exception('Got an unexpected status code of '.$statusCode);
    }
}

// now try the request
try{
    echo fetchHttpBody('http://example.org/');
} catch(HttpRedirectException $e) {
    printf('Redirect Error: %s (code %d)', $e->getMessage(), $e->getCode());
} catch(HttpClientException $e) {
    printf('Client Error: %s (code %d)', $e->getMessage(), $e->getCode());
} catch(HttpServerException $e) {
    printf('Server Error: %s (code %d)', $e->getMessage(), $e->getCode());
} catch(Exception $e) {
    echo "General Error: ".$e->getMessage();
}