import cv2
import numpy as np 



Training_Data, Labels = [], []

for i in xrange(1, 229):
	img = cv2.imread('(' + str(i) + ').png')
	gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
	Training_Data.append(np.asarray(gray, dtype=np.uint8))
	Labels.append(i)

Labels = np.asarray(Labels, dtype=np.int32)


model = cv2.face.createLBPHFaceRecognizer()


model.train(np.asarray(Training_Data), np.asarray(Labels))
print('Model traied successfully')

model.save('taha_model.xml')