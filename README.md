Withings App
========

Current State
------------------
 Relatively Unusable & Borked

Notes
-------

* Withings V2 API is based on OAuth 1.0
* Everytime I request an access_token it sends me back new access_token and secret values
* This is contrary to how every other OAuth 1.0 app I've ever used behaves
* Thus I am unable to sign any requests properly and always result in a 205 (The provided userid and/or Oauth credentials do not match)

API Documentation
--------------------------

Withings WBSAPI V2 [http://www.withings.com/en/api/wbsapiv2](http://www.withings.com/en/api/wbsapiv2)