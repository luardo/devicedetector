# Test App

Ths is a test app in php to detect devices
it is build with Slim Framework to return a json response with the device and OS of the user

##API answer:

###selecting a specific ad
Method: GET, Uri: /ads/:id

###selecting all ads of a specific campaign
Method: GET, Uri: /campaigns/:id/ads/

###selecting all ads of a specific advertiser
Method: GET, Uri: /advertisers/:id/ads/
###creating an ad
Method: POST, Uri: /ads

###modifying a specific ad
Method: PUT or PATCH, Uri: ads/:id

## How to run locally

`docker-compose up -d`

The app should be accessible under `localhost:3000`

## Contributing

## Versioning

## License
