import cv2
import glob
import numpy as np
import re


image=None
im1=cv2.imread("E:\laravel\criminal_record\public\images\input\image.jpg")

for img in glob.glob("E:/laravel/criminal_record/public/images/fingerprint\*.jpg"):
    im2=cv2.imread(img)

    difference=cv2.subtract(im1,im2)

    result=not np.any(difference)

    if result is True:
        image=img
        break

if image is not None:
    image1=re.findall('\\d',image)
    print image1
else:
    print 12121212
