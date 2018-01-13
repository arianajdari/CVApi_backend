import cv2 
import numpy as np 
import sys 

face_classifier = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')

def face_detector():
	img = cv2.imread(sys.argv[1])
	gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
	faces = face_classifier.detectMultiScale(gray, 1.3, 5)
	if faces is ():
		return img, []

	for (x,y,w,h) in faces:
		cv2.rectangle(img, (x,y), (x+w,y+h), (0,255,255),2)
		roi = img[y:y+h, x:w+w]
		roi = cv2.resize(roi, (200,200))
	return img, roi

image, face = face_detector()

face = cv2.cvtColor(face, cv2.COLOR_BGR2GRAY)

model_arian = cv2.face.createLBPHFaceRecognizer();
model_arian.load('arian_model.xml')

model_taha = cv2.face.createLBPHFaceRecognizer();
model_taha.load('taha_model.xml')

results_arian = model_arian.predict(face)
results_taha = model_taha.predict(face)

confidence_arian = 100.0 * (1.0 - (results_arian) / 300.0)
confidence_taha = 100 * (1 - (results_taha) / 300.0)


if confidence_arian < 50.0 and confidence_taha < 50.0:
	cv2.putText(image, 'Can not determine user', (100,120), cv2.FONT_HERSHEY_COMPLEX, 1, (255, 120, 150), 2)
elif confidence_arian > confidence_taha:
	cv2.putText(image, str(confidence_arian) + '% Arian', (100,120), cv2.FONT_HERSHEY_COMPLEX, 1, (255, 120, 150), 2)
else:
	cv2.putText(image, str(confidence_taha) + '% Taha', (100,120), cv2.FONT_HERSHEY_COMPLEX, 1, (255, 120, 150), 2)

cv2.imwrite(sys.argv[1], image)

