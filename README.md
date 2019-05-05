# Test App

Ths is a test app in php to detect devices
it is build with Slim Framework to return a json response with the device and OS of the user

##MySQL
showing all campaigns of advertiser #100 that have more than 50 ads

````
SELECT  title, text, image, sponsoredBy, trackingUrl , count(_)
From ads
WHERE
campaignId IN (SELECT
id
FROM
campaigns
WHERE
advertiserId = 100)
HAVING count(_) >= 50;
```

showing all campaigns that do not have any ads

```SELECT id FROM
campaign
WHERE NOT EXIST (
SELECT adsCampaignId FROM ads WHERE id = adsCampaignId
);
```

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
````
