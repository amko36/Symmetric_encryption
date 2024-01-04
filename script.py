"""
This script makes a symmetric encryption of a given text. 
You can use it with a command line, you should  add two argumets corresponding to the name of input file and output file.
For example, you can use this script with the following command 'python3 script.py text.in text.out'
If you don't want to use the arguments, then you should change the values of filenamein and filenameout
"""
import sys
import math

filenamein=str(sys.argv[1]) #sys.argv returns the first argument of command in commandline. In our case it will be the name of the file containing the text to encrypt
filenameout=str(sys.argv[2])
file = open(filenamein, "r")
text = file.read()
file.close()

tablelen=int(math.sqrt(len(text)))  #number of columns and rows of our table
#In Python len(string) returns the real length of the string, but the first element is always string[0] and not string[1]

if (tablelen**2)<(len(text)):
    tablelen=tablelen+1 
    # for exemple, if there are 4 caracters in the text, then tablelen=2 is enough to insert all our text. But if there are 5 caracters in the text, ther tablelen will still be 2, but that's not enough for inserting all the text, so we increase it 

table = [[' '] * tablelen for i in range(tablelen)] #we create a table with tablelen rows and columnd and fill it with spaces

k=0 #we will use k for extracting each caracter of the text

for i in range (len(text),tablelen**2):
    text=text+' ' 
    # we fill the text with spaces at the end in order to have the same number of caracters that number of elements in the table


for i in range(tablelen):
    for j in range(tablelen):
        table[i][j]=text[k]
        k=k+1
        #for example, the string 'abcde' will be placed in the table like this [['a', 'b', 'c'], ['d', 'e', ' '], [' ', ' ', ' ']]

encryptedtext=''

for i in range(tablelen):
    for j in range(tablelen):
        encryptedtext=encryptedtext+table[j][i]
        # so here we create an encrypted text according to our encrypthon method - reading the text by columns instead of rows.
        # so that such table as  [['a', 'b', 'c'], ['d', 'e', ' '], [' ', ' ', ' ']] will give an encrypted text "ad be c  "

f = open(filenameout, "w")
f.write(encryptedtext)
f.close()

