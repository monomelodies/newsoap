<?php

/**
 * Simple FaultException that gets thrown if the service reports a fault. The
 * message is the error return by the service.
 */
namespace Newsoap;

class FaultException extends \Exception
{
}

