Hacks from Yahoo! Bangalore Open Hack Day 2010, July 24-25.

## Team

The Anonymice

* [Aashish Solanki](http://aashish.in/)
* [Akash Mahajan](http://akashm.com/)
* [Karthik Rao](http://kartik-rao.com/)
* [Kiran Jonnalagadda](http://jace.zaiki.in/)
* [Pradeep Banavara](http://www.facebook.com/pradeepbv)

## Hacks

### Trafficam

Trafficam is a mobile web app that displays current traffic status from the
nearest traffic camera. It uses [HTML5 geolocation][hgeo] to retrieve the user's
coordinates, [YQL][] to get a place name for the given coordinates, and
[MongoDB][] to sort the list of known cameras by geographic proximity, using
MongoDB's built-in 2D [geospatial indexing][mgeo] ability. The camera image is
retrieved from [BTIS.in][]. [Flask][] is used to bind MongoDB to the front-end.

Live at [http://hackday.freecrow.org/trafficam](http://hackday.freecrow.org/trafficam)

[hgeo]: http://dev.w3.org/geo/api/spec-source.html
[YQL]: http://developer.yahoo.com/yql/
[MongoDB]: http://www.mongodb.org/
[mgeo]: http://www.mongodb.org/display/DOCS/Geospatial+Indexing
[BTIS.in]: http://btis.in/
[Flask]: http://flask.pocoo.org/
