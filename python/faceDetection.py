import cv2 
import sys
import numpy as numpy

face_classifier = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')

image = cv2.imread(sys.argv[1])
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

faces = face_classifier.detectMultiScale(gray, 1.3, 5)

for(x,y,w,h) in faces:
	cv2.rectangle(image, (x,y), (x+w,y+h), (127,0,255), 2)

cv2.imwrite(sys.argv[1], image)