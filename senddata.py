import csv, time
import watson_developer_cloud

with open('data.csv', 'rt') as csvfile:
	reader = csv.reader(csvfile, delimiter=',')
	currenttime = 0
	lasttime = 61208
	first = True
	for row in reader:
		timestamp = int(row[2])
		pop = int(row[0])
		wait = timestamp - lasttime
		currenttime = time.clock()
		#10x timescale
		wait = wait/100
		while(time.clock() - currenttime < wait):
			pass
		lasttime = timestamp
		#send stuff here
		print(str(timestamp) + ' ' + str(pop))

#while True:
#	print("I am working!")
