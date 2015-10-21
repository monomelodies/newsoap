# Newsoap
A modernised fork of `nusoap`.

## Installation

### Composer (recommended)
```bash
$ composer require monomelodies/newsoap
```

### Manual
1. Download or clone the repository;
2. Add `/path/to/newsoap/src` as a PSR-4 path to your autoloader for `Newsoap\\`.

## Why this library?
Modern PHP installations have a pretty awesome `SoapClient` native class, I'm
very well aware of that :) However, there are situations where using this is not
an option:

1. For some reason, the SOAP extension is not installed;
2. You're interfacing with a crappy SOAP server that doesn't adhere to specs.
   Actually, `Newsoap` was specifically created to talk to `LexisNexis`, but I'm
   sure there are other implementations out there that will trip over PHP's
   (conforming) implementation.

## Usage
Basically the same as `nusoap`, with currently two notable exceptions:

1. The class name to use (duh). Use `new Newsoap\Client(...$optons)`.
   The parameters are still the same as for `newsoap_client` (though I really
   want to change them, constructors with a gazillion arguments are bad
   practive).
2. On failure, `Newsoap` doesn't silently "log" errors but throws an exception
   of the type `Newsoap\ServiceException`.

## Todos
- Modernize more code
- Implement exception-based error handling throughout
- Cleanup the old debug methods
- Check `Server` implementation (I was initially more concerned with the client,
  but it should work - but really maybe this lib shouldn't concern itself with
  that part anyway)
- Add unit tests

