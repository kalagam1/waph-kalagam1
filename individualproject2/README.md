# Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Mahitha Kalaga

**Email**: [kalagam1@udayton.edu](kalagam1@udayton.edu)

![Mahitha's headshot](../images/mahi.jpeg)

## Repository Information

Repository's URL: [https://github.com/kalagam1/waph-kalagam1.git](https://github.com/kalagam1/waph-kalagam1.git)

This is a private repository for Mahitha Kalaga to store all the code from the course. The organization of this repository is as follows.

### Labs

[Hands-on exercises in Lectures](labs)

- [Lab 0](labs/lab0): Development Environment Setup
- [Lab 1](labs/lab1): Foundations of the Web
- [Lab 2](labs/lab2): Front-end Web Development
- [Lab 3](labs/lab3): Secure Web Application Development in PHP/MySQL
- [Lab 4](labs/lab4): A Secure Login System with Session Authentication

### Hackathons

- [Hackathon 1](hackathon1): Cross-site Scripting Attacks and Defenses
- [Hackathon 2](hackathon2): SQL Injection Attacks
- [Hackathon 3](hackathon3): Session Hijacking Attacks and Defenses

### Individual Projects

- [Individual Project 1](https://github.com/kalagam1/kalagam1.github.io): Front-end Web Development with a Professional Profile Website and API Integration on github.io cloud service
- [Individual Project 2](https://github.com/kalagam1/waph-kalagam1/tree/main/individualproject2): Secure Full-stack Web Application Development

## Report

## The Project's overview

This project involved building a secure full-stack web application using PHP and MySQL, focusing on user authentication, profile management, and password updates. Key features included a registration system, secure login with session handling, profile editing, and CSRF protection. The UI was built using HTML, CSS, and JavaScript, with a focus on responsive and user-friendly design. The application enforced strong password policies, used hashed passwords, and implemented both client-side and server-side input validation to defend against XSS and SQL injection attacks. Through this project, I developed practical skills in secure coding, form validation, and session-based user management.

Project's URL: [Individual Project 2](https://github.com/kalagam1/waph-kalagam1/tree/main/individualproject2)

## Part 1 - Functional Requirements

#### Task 1.A:  User Registration

I installed the MySQL server on my virtual machine using the command sudo apt-get install mysql-server -y. After installation, I verified the version using 'mysql -V' and confirmed that it was functioning correctly. I then connected to the MySQL server using sudo mysql -u root -p, which allowed me to proceed with creating and managing databases.

![Show/Hide Email](../../images/lab3.1.1.jpeg)

#### Task 1.B: Login

After installing MySQL, I created a script named database-account.sql, which contained SQL statements to create a new database, add a user, and assign all necessary privileges. I executed this script from within the MySQL prompt using the SOURCE command. The execution successfully created the database and user account, and confirmed that the user had the appropriate permissions.

![Show/Hide Email](../../images/lab3.1.2.jpeg)

![Show/Hide Email](../../images/lab3.1.2.1.jpeg)

#### Task 1.C: Profile Management

To store user data, I created another SQL script named database-data.sql, which defined a Users table with username and password fields. I inserted a test user (kalagam1) with the password, which was hashed using the MD5 function for basic encryption. After executing this script, I used the query SELECT * FROM Users; to verify that the data was stored correctly. I also demonstrated logging into MySQL as the new user (non-root) and displayed the table contents to confirm proper database setup.

![Show/Hide Email](../../images/lab3.1.3.jpeg)

![Show/Hide Email](../../images/lab3.1.3.1.jpeg)

#### Task 1.D: Password Update 

To store user data, I created another SQL script named database-data.sql, which defined a Users table with username and password fields. I inserted a test user (kalagam1) with the password, which was hashed using the MD5 function for basic encryption. After executing this script, I used the query SELECT * FROM Users; to verify that the data was stored correctly. I also demonstrated logging into MySQL as the new user (non-root) and displayed the table contents to confirm proper database setup.

![Show/Hide Email](../../images/lab3.1.3.jpeg)

![Show/Hide Email](../../images/lab3.1.3.1.jpeg)

### Task 2: Security and Non-technical Requirements

#### Task 2.A: Security

To demonstrate a SQL injection vulnerability, I crafted a malicious payload and injected it into the username field on the login page. The payload was: kalagam1’ #<script>alert(document.cookie)</script>

![CSS](../../images/lab3.c.1.jpeg)

This payload allowed me to bypass authentication and gain access to the system. Additionally, the embedded JavaScript executed successfully, revealing the session ID through a cookie alert. The attack worked because user inputs were directly included in the SQL query without validation, making the webpage highly vulnerable to SQL injection. 

#### Task 2.B: Input Validation    

I tested the application for XSS by injecting a JavaScript snippet into a form input. Since the application did not sanitize the output before reflecting it back onto the page, the script was executed and displayed an alert box containing the session cookie. This demonstrated a stored/reflected XSS vulnerability.

![CSS](../../images/lab3.c.2.jpeg)

![CSS](../../images/lab3.c.4.jpeg)

#### Task 2.C: Database Design   

I tested the application for XSS by injecting a JavaScript snippet into a form input. Since the application did not sanitize the output before reflecting it back onto the page, the script was executed and displayed an alert box containing the session cookie. This demonstrated a stored/reflected XSS vulnerability.

![CSS](../../images/lab3.c.2.jpeg)

![CSS](../../images/lab3.c.4.jpeg)

#### Task 2.D: Front-end Development

I tested the application for XSS by injecting a JavaScript snippet into a form input. Since the application did not sanitize the output before reflecting it back onto the page, the script was executed and displayed an alert box containing the session cookie. This demonstrated a stored/reflected XSS vulnerability.

![CSS](../../images/lab3.c.2.jpeg)

![CSS](../../images/lab3.c.4.jpeg)

#### Task 2.E: Session Management    

I tested the application for XSS by injecting a JavaScript snippet into a form input. Since the application did not sanitize the output before reflecting it back onto the page, the script was executed and displayed an alert box containing the session cookie. This demonstrated a stored/reflected XSS vulnerability.

![CSS](../../images/lab3.c.2.jpeg)

![CSS](../../images/lab3.c.4.jpeg)

#### Task 2.F: CSRF Protection  

I tested the application for XSS by injecting a JavaScript snippet into a form input. Since the application did not sanitize the output before reflecting it back onto the page, the script was executed and displayed an alert box containing the session cookie. This demonstrated a stored/reflected XSS vulnerability.

![CSS](../../images/lab3.c.2.jpeg)

![CSS](../../images/lab3.c.4.jpeg)
