import cv2 
import sys
import numpy as numpy

face_classifier = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')
eye_classifier = cv2.CascadeClassifier('haarcascade_eye.xml')


image = cv2.imread(sys.argv[1])
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

faces = face_classifier.detectMultiScale(gray, 1.3, 5)

for(x,y,w,h) in faces:
	roi_gray = gray[y:y+h, x:x+w]
	roi_color = image[y:y+h, x:x+w]
	eyes = eye_classifier.detectMultiScale(roi_gray)
	for(ex,ey,ew,eh) in eyes:
		cv2.rectangle(roi_color, (ex,ey), (ex+ew, ey+eh), (255,255,0),2)


cv2.imwrite(sys.argv[1], image)