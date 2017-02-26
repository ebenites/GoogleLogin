# GoogleLogin

### Fixed some bugs

C:\wamp64\www\GoogleLogin\vendor\guzzlehttp\guzzle\src\Client.php:162

```
'verify'          => true,
```
```
'verify'          => false,
```

C:\wamp64\www\GoogleLogin\vendor\firebase\php-jwt\src\JWT.php:123
```
        if (isset($payload->iat) && $payload->iat > ($timestamp + static::$leeway)) {
            throw new BeforeValidException(
                'Cannot handle token prior to ' . date(DateTime::ISO8601, $payload->iat)
            );
        }
```
```
//        if (isset($payload->iat) && $payload->iat > ($timestamp + static::$leeway)) {
//            throw new BeforeValidException(
//                'Cannot handle token prior to ' . date(DateTime::ISO8601, $payload->iat)
//            );
//        }
```
