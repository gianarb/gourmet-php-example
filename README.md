# Gourmet PHP example
Example App for [gourmet](https://github.com/gianarb/gourmet)

This script push a message on AWS SQS.

### Prepare artifact
An artifact is a zip ready to in production, to build it I use 
[phing](http://www.phing.info/) and push it on AWS S3.

```
cp config/deploy.properties.dist config/deploy.properties
```
And replace with the correct values.
```
composer install
vendor/bin/phing upload
```
Resolve PROD dependencies and push all on S3. Now you can **move public your zip** and
take the link by AWS console.

**move public your zip** = At the moment the auth is WIP.

If you would not use S3 please resolve the depencies, zip and host it on your server.
