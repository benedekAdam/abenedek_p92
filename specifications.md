# User CR(UD) Web App
You are given a task to write a PHP Web Application that provides the C and R of the CRUD operations on a User entity.
The users should have the following attributes:
*	Name (mandatory, unique)
*	Date of Birth (mandatory)
*	Emails (1 to N)
The Web App should provide a responsive web user interface that allows us to list users and to create new ones. 
The users should be stored in an in-memory relational db.

Please take care of the followings:
- validation
- security e.g. SQL injection
- common sense (e.g. do not load all the users from the db in one shot)

The output of the task
*	should be available in a Github folder
*	is the project that contains the code and the configuration.
*	is the project documentation in English in a human readable file (e.g. PDF, MS Word).

The Github repo should contain everything that is needed to build and run the project.
The project documentation should contain every instruction to build and run the project.
If this specification does not contain some details you need, you are free to specify it. (It is deliberate).

### Functional requirements

#### Use Case 1 - Running the app
As a Developer I can run the application according to your project documentation.
Notes:
*	The documentation for the configuration should be clear.
*	It should include an embedded RDBMS.
*	It should provide clear information on how to run the app on a Web Server.

#### Use Case 2 - List all users
As a Web-App User I can use my web browser to access the running web app. and see the list of existing users.

#### Use Case 3 - Create User
As a Web-App User I can use my web browser to create a new User entity.

### Non-functional requirements
*	The application should use the most recent stable PHP.
*	The coding should follow the CleanCoding standards 
*	If something is missing because of the lack of time please create a comment in the code and mention it in the project documentation.
*	Demonstrate Integration and Unit testing of the app. (We do not need 100% test coverage, just examples)
*	Prefer PHP coding to SQL coding. 
*	Do not use Wordpress.
