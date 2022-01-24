# To-Do-Application
To Do Application

Feature set => 
Add Tasks you want to complete/do,
Delete when done
Be able to come back to the list to cross of when mind changed
Adding a start and end deadline (optional)
Select status to indicate where you are at in progress/done
Wireframe =>
Add a box (input field for text with a button that will add to the list) and Insert in to the database each time the button is clicked
Creating A List with all the added inputs for view, running through a while loop that will  keep iterating as long as it is higher then zero
A Delete button to remove when they are done
A checkbox to cross of an item from the list uncheck/check
Letting the user add a start to end date time stamp
Creating another checkbox with all the status to let user know where they are at
Architectural Design =>
User goes to the site, checks to see if there is any to do’s in the list if not will add some has the option to create a start and end date and option to track the progress.
Sees the todos, when done crosses it off and has the option to delete it
Goes to page either sees list or sees an indication that list is empty an input field which would say what do you want to do? And an add button next to it allowing user to add.
Stateful Data =>
Create a database called todos which has 6 r
ows date_created Datetime, 
checkbox boolean,
 rowid integer,
title text, 
status integer,
 date started and ended datetime
 i would also later like to implement a note section which will also be a text fields
FrontEnd =>
I would use bootstrap, plain css/scss/sass
Html to create the elements like, list and checkbox input field
Database:
SInce this is a project i will create using php i will create a db_conn.php file that will connect the database using PDO php consistent way to access the database
I will first Create the connection by new PDO("mysql:host=$sName;dbname=$db_name", $uName, $password); by putting in a try and catch to see when connected
I will select all from table and order it by descending to put the most recent todo on top then i will link the input field to a database field, store all the data in there
Post data to database

File Structure => 
JS folder to have javascript and  jquery 
Img to hold images
Css to hold css and stylesheets
App to hold all my php files
Index.php file on its own that will render everything 
Db_conn.php which will hold the database connection
