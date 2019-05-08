# note-manager
 
# installphp version 5.5 or newer

#navigate to your desired folder then run these commands to install
	
	git clone https://github.com/ahrocha96/note-manager.git
	cd note-manager
	php -S localhost:8000
	
#modify php.ini and add 

extension = php_mysqli

#also add

extension_dir = C:\path\to\php\ext
	
#visit localhost:8000 in your browser


#ERRORS/BUGS
#I noticed the Lumen requirement when I was nearly done. 
I implemented an authentication check, but I can work on adding the 
Lumen framework in the next day or two.
#
#I will be deploying this to heroku as well, I can send a link when I have
the dependencies figured out. I received an HTTP 500 error the first few deploys
#
#The first time you login, it thinks there are no notes. Just submit a new one to view
your other notes
#TODO
#I might include a search function to enhance the retrieval UX for the user.
#