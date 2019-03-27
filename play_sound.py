# play_sound
# play bell sound

# the pygame library is used as it is more compatible with the raspberry pi's sound output
import pygame
import time

# in a later edition, the program should be able to accept a value for play_bell and change the bell sound according to the value
def play_bell():
    pygame.init()
    pygame.mixer.music.load("class_bell.mp3")
    pygame.mixer.music.play()
    print ("RINGING!!!") # can be used for troubleshooting audio problem
    time.sleep(60) # this delay is to prevent the bell from ringing continuously in the minute
    
