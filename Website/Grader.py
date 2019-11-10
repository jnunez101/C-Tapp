import csv

key=[]
studentGrades = []
with open('key.txt', 'r') as csvfile:
    key_reader = csv.reader(csvfile, delimiter=',')

    for row in key_reader:
        for columb in range(len(row)):
            key.append(row[columb])

#cwid = 0
with open('test.txt', 'r') as csvfile:
    grades_reader = csv.reader(csvfile, delimiter=',')

    counter = 0
    #cwid = grades_reader[0]   
    for row in grades_reader:
        tempGrades=[]
        counter = 0
        for columb in range(len(row)):
            #this gives the id for the grade
            if(columb == 0):
                tempGrades.append(row[columb])

            #because different sizes
            #adds up the correct answers
            elif (str(row[columb]) == str(key[columb])): 
                counter += 1
                
        #because the key file contains id number also 
        tempGrades.append((counter/(len(key)-1)))
        
        #grade element should be the second one right now 
        studentGrades.append(tempGrades)
        counter=0
            

#print(studentGrades)

f = open('Grades.txt', 'w')  # Open file

#writes the file for grades
for n in range(len(studentGrades)):
    #f.write(cwid)
    for s in range(2):
        
        f.write(str(studentGrades[n][s]))

        if s == 0:
            f.write(",")
    f.write('\n')
        
f.close()
                             
            
