### Project Management : PHP-CRUD

## Task : Making a CRUD in PHP

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
We’ll do this by querying our self-made database and displaying the information from said DB on the respective pages.
DELETE : We do this via a delete button per row (1 row being 1 object teacher,campus class or student). By checking the value of the button and doing a
DELETE FROM WHERE quere where we check if the ID we want to delete matches the one in the table we can delete rows.
UPDATE : in progress

**Plan of attack :**

- [x] 1.  Do some research on CRUD (we've done everything seperately, now bring it together), import the MVC boilerplate template.

- [x] 2.  Create a database in DBeaver with 3 tables (teacher, student, class) and necessary keys (properties)

- [x] 3.  Make one base (non-loader) class, create an object and check if you get the info when vardumping the var, calling methods like getId() etc…

- [x] 4.  Check databaseconnection : store data and see if we can retrieve it.

- [x] 5.  Make all other base classes in model part of MVC, work with inheritance

- [x] 6.  Make a loader class and test

- [x] 7.  Make all the other loaderclasses

- [x] 8.  Time for C part of MVC : Controllers.
      Make one controller (eg for student) and test.

- [x] 9.  Make the other controllers.

- [x] 10. View : start with the view/creating necessary pages in the view.

- [x] 11. Form to create data and store in DB on submit (POST/GET).

- [x] 12. Forms per page to show relevant information.

- [x] 13. Create functionality test and making sure it works for all tables

- [x] 14. DELETE functionality for 1 and test

- [x] 15. test DELETE functionality for all tables

- [x] 16. UPDATE functionality

- [x] 17. Check if core functionalities (Create,Read,Update,Delete) work for all 3 entities

- [x] 18. Clean up HTML

- [x] 19. Edge case 1

- [x] 20. Edge case 2

21. Details button/pages

    IN PROGRESS
