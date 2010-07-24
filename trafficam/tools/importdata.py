import pymongo
import csv
f = open('traffic.csv', 'rb')
c = csv.reader(f, delimiter='|')
l = list(c)
d = []
for line in l[1:]:
    d.append(dict(
      imgid=line[0],
      name=line[1],
      location=line[2],
      latlon=(0 if line[3].strip() == '' else float(line[3].strip()),
              0 if line[4].strip() == '' else float(line[4].strip())),
      the_geom=line[5],
      has_image=True if line[6] == 't' else False,
      has_video=True if line[7] == 't' else False,
    ))

con = pymongo.Connection()
db = con.hackday
col = db.trafficam
for line in d:
    col.insert(line)
col.ensure_index('imgid', unique=True)
col.ensure_index([('latlon', pymongo.GEO2D)])

# for doc in col.find({"latlon": {"$near": [12.941860, 77.608680]}}).limit(3): repr(doc)
