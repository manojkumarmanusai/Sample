from flask import Flask,request,render_template
from json2html import *
import json
import os

app = Flask(__name__)
jsonfile = 'activity.json'

@app.route('/addActivity',methods=['POST'])
def addActivity():
	activityDate = request.form['activityDate']
	noOfHours = request.form['noOfHours']
	activityDescription = request.form['activityDescription']
	
	print("Received following values")
	
	print("Activity Date ",activityDate)
	print("No Of Hours ",noOfHours)
	print("Activity Description ",activityDescription)
	
	jsonArray =  [{ "Activity Date":activityDate, "No Of Hours": noOfHours , "Activity Description":activityDescription}]
	
	f = open(jsonfile, mode='r+')
	data = json.load(f)		
	data.extend(jsonArray)
	f.seek(0)
	json.dump(data, f)
	f.close()
	
	return """<html><body>
	<head><title> Add Activity</title></head>
        <h1>Successfully entered the activity</h1>
	</body></html>""" ""

@app.route('/getActivity',methods=['GET'])
def getActivity():
	f = open(jsonfile, mode='r')
	infoFromJson = json.load(f)
	print(infoFromJson)
	tableHtml = json2html.convert(json = infoFromJson)
	
	return """<html><body>
	<head><title> Activity History</title></head>
        <h1>Activity</h1>""" + tableHtml + """</body></html>"""
        
# main driver function
if __name__ == '__main__':

	# run() method of Flask class runs the application
	# on the local development server.
	app.run()

