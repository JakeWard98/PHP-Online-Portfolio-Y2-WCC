// JavaScript Document
// Created by Jake Ward

var type = "<p>" 
+ navigator.appCodeName + "<br>" //This finds the code name of the browser
+ navigator.appName + "<br>" //This returns the name of the browser
+ navigator.appVersion + "<br>" //This works out what version of browser the user is using
+ navigator.userAgent + "<br>" //Returns the agent header
+ navigator.platform + "<br>" //This finds out what platform is being used i.e. Android, Win 7, OSX
+ navigator.cookieEnabled + //This find out if the user has cookies enabled on their browsers
"</p>";// defining type

var agent = navigator.userAgent; //defining agent
		if (agent.indexOf("Firefox") >=0)
		{
			image = '<img src="images/firefox.svg">'; //if true display image
		}
		else if (agent.indexOf("OPR") >=0)
		{
			image = '<img src="images/opera.svg">'; //if true display image
		}
		else if (agent.indexOf("Chrome") >=0)
		{
			image = '<img src="images/chrome2.svg">'; //if true display image
		}
		else if (agent.indexOf("MSIE") >=0)
		{
			image = '<img src="images/Internet_Explorer.svg">'; //if true display image
		}
		else if (agent.indexOf("Safari") >=0)
		{
			image = '<img src="images/safari.svg">'; //if true display image
		}
		else
		{
			image = "Unknown browser type"
		}
		//browser type dection end