import cv2

cascade = cv2.CascadeClassifier("cascade.xml")

# test_path = "/home/nick/projects.python/boobs/pics/test/*.jpg"
# test_path = "/home/external/moderation-porn-detector/pornPornolab/*.jpg"
#test_path = "/home/external/moderation-porn-detector/boobs-oboobs/*.jpg"
# test_path = "/home/external/moderation-porn-detector/user/*.jpg"

image = cv2.imread('f.jpg')
gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

rects = cascade.detectMultiScale(
    gray,
    scaleFactor=1.1,
    minNeighbors=5,
    minSize=(30, 30)
)

print "Found {0} faces in {1}".format(len(rects), image)

if len(rects) > 0:
    for (x, y, w, h) in rects:
        cv2.rectangle(image, (x, y), (x+w, y+h), (0, 255, 0), 2)

cv2.imwrite('cica.jpg', image)
