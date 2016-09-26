Docker and Web Services

1.What this service does?
	This service provides the ascii code of any symbol,string,character.

2.Example - 
	For character s - the ascii value is 115
	For String supi - the ascii value is 115+117+112+105=449

3.How to run the service?
	sudo docker run -d -p 8080:80 suprabha ./startme.sh
	curl http://172.17.0.2/index.php?num1=supi
	The expected output is :449

4.Future work -
	This application can be used in encrypting and decrypting a file.


