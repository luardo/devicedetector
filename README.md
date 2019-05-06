# Test App

This is a test app using php and react to detect user device.
the backend is build with Slim Framework to return a json response.
The client is a simple react app which connects to the api to get the device response.

## MySQL

Showing all campaigns of advertiser #100 that have more than 50 ads

```
SELECT
    a.title,
    a.text,
    a.image,
    a.sponsoredBy,
    a.trackingUrl,
    count(a.\*)
From
    ads a
JOIN campaigns c
ON a.campaignId = c.id
WHERE
    c.advertiserId = 100
HAVING
    count(a.\*) >= 50;
```

showing all campaigns that do not have any ads

```SELECT id FROM
campaign
WHERE NOT EXIST (
SELECT adsCampaignId FROM ads WHERE id = adsCampaignId
);
```

## API answer:

### selecting a specific ad

Method: GET, Uri: /ads/:id

### selecting all ads of a specific campaign

Method: GET, Uri: /campaigns/:id/ads/

### selecting all ads of a specific advertiser

Method: GET, Uri: /advertisers/:id/ads/

### creating an ad

Method: POST, Uri: /ads

### modifying a specific ad

Method: PUT or PATCH, Uri: ads/:id

## How to run locally

To run the backend, in the root folder run:
`docker-compose up -d`
The php app should be accessible under `localhost:8080`

To run the client, go to the client folder
`cd client/`
`docker-compose up -d --build`

The react app should be accessible under `localhost:3000`

## Contributing

## Versioning

## License

```

```
