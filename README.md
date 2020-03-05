-- How to Launch Application --

Put all files in "C:\xampp\htdocs\citrus" folder.
Launch "xampp-control.exe" and start Apache/MySql.
Open link "localhost/phpmyadmin" in web browser.
Create new database and name it "citrus".
Import the "citrus.sql" file in the "citrus" database.

Open link "localhost/citrus.index.php" in web browser.



-- Short description of the Project -- 

On index page you can see 9 products pulled from database.
If you click one of them you are redirected to a page with product details. You can comment the selected product trough the form.
Under the form there are all APPROVED comments.
In the navigation bar there is a link for Login, you can login as Admin with the following parameters: 
email: admin@gmail.com
password: 1234567
When you login as admin you are redirected to Admin Panel you see all nonapproved comments ordered by date when posted with paggination.
You have the option to Approve or Delete comments.
Through the navigation bar you can logout.



-- Things to upgrade --

Since there was a short period of time to finish this project there are many things to be added, fixed and upgraded.
1. Create layout file/component folder and optimize files
2. Add registration functionallity
3. Add Shopping cart
4. Add try/catch for handling exceptions
5. Secure SQL queries with Prepare statements etc.
