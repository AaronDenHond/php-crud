Project Management : PHP-CRUD


Task : Making a CRUD in PHP

CRUD : In computer programming, Create, Read, Update, and Delete (CRUD) are the four basic operations of persistent storage.[1] CRUD is also sometimes used to describe user interface conventions that facilitate viewing, searching, and changing information using computer-based forms and reports.
Data can be put in a location/area of a storage mechanism. 
In our case it’s our self-made database.
The fundamental feature of a storage location is that it's content is both readable and updatable.
Reading data from DB via queries and DB connection in PHP
 Before a storage location can be read or updated it needs to be created; that is allocated and initialized with content.
Initialize/create data via objects.
 At some later point the storage location may need to be destructed; that is finalized and deallocated.
Not done yet, will have to look up

Together these four operations make up the basic operations of storage management known as CRUD: Create, Read, Update, and Delete.

How I interpret CRUD for this assignment :
CREATE : be able to add teacher, student, class to the database.
We’ll do this with a form and POST superglobal.
READ: be able to read information.
We’ll do this by querying our self-made database.
UPDATE : no idea for now
DELETE : no idea for now





Plan of attack :

1. Do some research on CRUD (we've done everything seperately, now bring it together), import the MVC boilerplate template.
        CHECK
2. Create a database in DBeaver with 3 tables (teacher, student, class) and necessary keys (properties)
        CHECK
3. Make one base (non-loader) class, create an object and check if you get the info when vardumping the var, calling methods like getId() etc…
        CHECK
4. Check databaseconnection : store data and see if we can retrieve it.
        CHECK
5. Make all other base classes in model part of MVC, work with inheritance 
        CHECK
6. Make a loader class and test
        CHECK
7. Make all the other loaderclasses
        CHECK


8. Time for C part of MVC : Controllers.
   Make one controller (eg for student) and test.
        CHECK

9. Make the other controllers.
        CHECK

10. Start with the view/creating necessary pages in the view.
        CHECK

11. Form to create data and store in DB on submit (POST/GET).
IN PROGRESS
