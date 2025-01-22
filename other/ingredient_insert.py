import mysql.connector
import json

#Script om ingredienten toe te voegen aan de database.

mydb= mysql.connector.connect(
    host='localhost',
    user='RecipePort',
    password='SomePassword001',
    database='RecipePort'
)

mycursor = mydb.cursor()

sqlstatement = ''
with open(r"C:\xampp\htdocs\RecipePort\other\ingredienten.json",'r') as f:
    jsondata = json.loads(f.read())

for json in jsondata:
    keylist = "("
    valuelist = "("
    firstPair = True
    for key, value in json.items():
        if not firstPair:
            keylist += ", "
            valuelist += ", "
        firstPair = False
        keylist += key
        if type(value) in (str, str):
            valuelist += "'" + value + "'"
        else:
            valuelist += str(value)
    keylist += ")"
    valuelist += ")"

    sqlstatement = "INSERT INTO ingredient " + keylist + " VALUES " + valuelist + ";"
    mycursor.execute(sqlstatement)
    mydb.commit()