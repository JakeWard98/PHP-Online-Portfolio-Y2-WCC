// JavaScript Document
// Created by Jake Ward

function regCheck()
{	
	var noerror = true; //using variable to determin wether error message is to be displayed
	var msg = "There are some errors in this Form\n" //title for error message
	var name = document.forms["register"]["firstname"].value;//detrmine field name var
	var lname = document.forms["register"]["lastname"].value;//detrmine field name var
	var password = document.forms["register"]["psw"].value;//detrmine field psw var
	var email = document.forms["register"]["email"].value;//detrmine field email var
	var passwordlen = document.forms["register"]["psw"].value.length;//detrmine field length psw var
	var dob = document.forms["register"]["dob"].value;//detrmine field dob var
	var val_email = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

		//name test
	if (name == null //empty
	|| name == "") //empty
	
	{
		msg += "Please enter a First Name\n";
			noerror = false; //triggers error message
	}
	
		//Last name test
	if (lname == null //empty
	|| lname == "") //empty
	
	{
		msg += "Please enter a Last Name\n";
			noerror = false; //triggers error message
	}
	
		//dob test
	if (dob == null //empty
	|| dob == "") //empty
	
	{
		msg += "Please enter a D.O.B\n";
			noerror = false; //triggers error message
	}
	
		//password test
	if (password ==  null || password == ""
	|| passwordlen < 6 //less than 6 characters
	|| passwordlen >12)
	{
		msg+= "Please enter a password betwen 6 - 12 characters\n"
			noerror = false;
	}
	
		//email test
	if (email == null || email == ""
	|| !val_email.test(email)) //test email against set defined var value
	
		{
		msg+="Please enter a valid email address\n"
			noeeror = false;
		}
	if (!noerror) alert(msg) //noerr false? => display error message
	return noerror;

}