A symmetric encryption system written in Python. 
It may help to introduce the basics of cryptography to children. 
It can be used either as a website (just copy the repository on your webserver and make sure that Python is installed), or as script with the following command 'python3 script.py source_file destination_file'. The source file will contain the text you want to encrypt. The encrypted text will be stored in a destination file.
To decrypt the text, you have just to re-encrypt it. If you copy an encrypted text, make sure it contains all characters, even the spaces at the end of encrypted text).

The encryption works in the following way:
    For exemple, we want to encrypt the word 'Hello'. 
    We'll convert it into 2d array with N rows and N columns. N corresponds to an integer of the square root of text length (+1 if it's not an integer initially). In our case, N equals 3 and our phrase will be written to the table in the following way:

'H'  'e'  'l'

'l'  'o'  ' '

' '  ' '  ' '

And now, to encrypt our text, we will write each character of the table in a string column by column. And we will have the following string with encrypted text: 'Hl eo l  ' 
If you re-encrypt this string in the same way, you will get the initial 'Hello'. 