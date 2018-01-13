import cv2
import numpy as numpy


face_classifier = cv2.CascadeClassifier('haarcascade_frontalface_default.xml')


def face_extractor(img):

	img = cv2.imread(img)
	gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
	faces = face_classifier.detectMultiScale(gray, 1.3, 5)

	if faces is ():
		return None

	for (x,y,w,h) in faces:
		cropped_faces = img[y:y+h, x:x+w]

	return cropped_faces


for i in xrange(11,253):
	try:
		face = cv2.resize(face_extractor('a (' + str(i) + ').jpg'), (200,200))
		face = cv2.cvtColor(face, cv2.COLOR_BGR2GRAY)
		cv2.imwrite('a (' + str(i)+  ').png', face)
	except:
		print('aa')


