#!/usr/bin/env python

from geopy.geocoders import Nominatim
from geopy.distance import vincenty
import os
#import sys


#print len(sys.argv)
#print str(sys.argv[1])

geolocator = Nominatim()

with open('location1.txt', 'r') as coordinates_file:
	data1=coordinates_file.read()

with open('location2.txt', 'r') as coordinates_file:
	data2=coordinates_file.read()

location1 = (data1)
location2 = (data2)
#location2 = (32.527782, -94.729043)

#distance_miles = vincenty(location1, location2).miles
#distance_km = distance_miles * 1.60934

equal_sign = "=" * 15
space = " " * 7
#print space,"Distance between location 1 and location 2"
#print equal_sign
#print " ",'%.2f'%distance_miles,"miles"
#print " ",'%.2f'%distance_km,"km"

#-----Reverse geocoding-------
location1_address =  geolocator.reverse(location1)
print (location1_address.address)

location2_address =  geolocator.reverse(location2)
print (location2_address.address)
