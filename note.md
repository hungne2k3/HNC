## Auth with JWT: Json Web Token
- JWT gồm 3 phần: Header - Payload - Signature
  + Header: Algorithm and token type.
  + Payload: Data.
  + Verify Signature: header, payload encode and key.

## Scope
- Front-End: Javascript or React
- Back-End: Laravel 10.x
  
## API --> Authentication --> Token(JWT)

Request get Data: send token into Header (Authorization: <Bearer> Token)
Server --> Check Token invalid? --> Decode Payload --> Query DataBase.

# STEP
1. Generate jwt:secret
   `php artisan jwt:secret`
2. Config ....
