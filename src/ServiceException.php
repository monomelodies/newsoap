<?php

/**
 * Simple ServiceException that gets thrown on a Curl error. The message is the
 * actual Curl error, the code on of the CURLE_ constants.
 *
 * @see http://php.net/manual/en/curl.constants.php
 */
namespace Newsoap;

class ServiceException extends \Exception
{
}

