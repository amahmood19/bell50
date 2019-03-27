# bell50 v1.0
# Athar Mahmood
# developed as a final project for CS50

import play_sound
import time

# the bell will always sound once on startup - this is to indicate its functionality
play_sound.play_bell()

# the following script opens the belltimes text file, and reads the first 4 characters of each file
with open('/var/www/html/belltimes.txt', 'r') as ins:
    bell_times = []
    for line in ins:
        bell_times.append(line[:4])

# convert bell times into integers        
bell_times = list(map(int, bell_times))

while True:
    # check current time
    curr_time = int(time.strftime("%H%M"))

    # sound the bell when bell time is reached
    if curr_time in bell_times:
        play_sound.play_bell()

        
    

