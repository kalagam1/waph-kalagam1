# Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Mahitha Kalaga

**Email**: [kalagam1@udayton.edu](kalagam1@udayton.edu)

![Mahitha's headshot](../../images/mahi.jpeg)

## Repository Information

Repository's URL: [https://github.com/MahithaKalaga-cyber/waph-mahitha.git](https://github.com/MahithaKalaga-cyber/waph-mahitha.git)

This is a private repository for Mahitha Kalaga to store all the code from the course. The organization of this repository is as follows.

### Labs

[Hands-on exercises in Lectures](labs)

- [Lab 0](labs/lab0): Development Environment Setup
- [Lab 1](labs/lab1): Foundations of the Web
- [Lab 2](labs/lab2): Front-end Web Development

## Report

## The lab's overview

This lab focused on core front-end web development techniques using HTML, CSS, JavaScript, Ajax, jQuery, and Web API integration. The tasks reinforced lecture materials from weeks 4 to 6 and were implemented using a local Apache server. Through this lab, I gained experience in dynamic page updates, asynchronous requests, real-time clocks, and integrating third-party APIs into web interfaces.

Lab's URL: [Lab2](https://github.com/MahithaKalaga-cyber/waph-mahitha/tree/main/labs/lab2)

## Part 1 - Basic HTML with Forms, and JavaScript

### Task 1.A: A Basic HTML 

Created waph-mahitha.html with proper HTML tags. Included:
 - Headshot image (150x150 pixels)
 - A simple form with "<input>" and "<submit>" tags

#### Basic HTML waph-mahitha.html 
![Basic HTML waph-mahitha.html](../../images/2.1.a.a.jpeg) 
![Basic HTML waph-mahitha.html](../../images/2.1.a.jpeg) 
![Basic HTML waph-mahitha.html](../../images/2.1.a.a.a.jpeg)

### Task 1.B.i: Inline JavaScript

For the inline JavaScript task, I added an onclick event to a button that, when clicked, displays the current date and time. I also used the onkeypress attribute in a text input to log what keys were pressed to the browser console. 

#### Inline JavaScript
![Inline JavaScript](../../images/2.1.b.2.jpeg)
![Inline JavaScript](../../images/2.1.b.2.1.jpeg)

### Task 1.B.ii: Digital Clock 

Using setInterval() and JavaScript's Date() object, I created a live digital clock that updates every second. It displays the time in HH:MM:SS format. This was written inside a <script> tag and directly manipulated the inner content of a "<div>". 

#### Digital Clock
![Digital Clock](../../images/2.1.b.jpeg)
![Digital Clock](../../images/2.1.b.b.jpeg)
![Digital Clock](../../images/2.1.b.b.b.jpeg)

### Task 1.B.iii: Show/Hide Email

Created a reusable and modular JavaScript file (email.js) that dynamically toggles the visibility of my email address. When the user clicks a div, the content switches between a label and a mailto: hyperlink. This component demonstrates external JS integration, conditional logic, and DOM element replacement.

#### Show/Hide Email
![Show/Hide Email](../../images/2.1.c.jpeg)
![Show/Hide Email](../../images/2.1.c.c.jpeg)
![Show/Hide Email](../../images/2.1.c.c.c.jpeg)

### Task 1.B.iv: Analog Clock

Added an analog clock using a <canvas> element and the external script hosted at https:/waph-phung.github.io/clock.js. The script draws clock hands in real time using canvas rendering.

#### Analog Clock
![Analog Clock](../../images/2.1.d.jpeg)
![Analog Clock](../../images/2.1.d.d.jpeg)

### Task 2: Ajax, CSS, jQuery, and Web API Integration

### Task 2.A: Ajax 

Implemented a form-driven Ajax request using XMLHttpRequest to send user input to echo.php. The servers response is retrieved and rendered within a target div element. By monitoring the request through browser developer tools, I gained insight into asynchronous communication and HTTP request/response lifecycles.

#### Ajax
![Ajax](../../images/2.2.a.jpeg)
![Ajax](../../images/2.2.a.a.jpeg)

### Task 2.B: CSS  

Demonstrated an understanding of different CSS application methods:
 - Inline CSS was used directly within HTML tags for quick styling.
 - Internal CSS was defined within a <style> block in the <head> for layout consistency.
 - External CSS was applied by linking to a remote stylesheet (https:/waph-phung.github.io/style3.css).

#### CSS 
![CSS](../../images/2.2.b.jpeg)
![CSS](../../images/2.2.b.b.jpeg)

### Task 2.C: jQuery   

Included the jQuery library via CDN and developed Ajax functions using both $.get() and $.post() methods to interact with the echo.php endpoint. The responses were dynamically injected into the DOM. 

#### jQuery  
![jQuery](../../images/2.2.c.1.jpeg)
![jQuery](../../images/2.2.c.c.1.jpeg)

#### jQuery  
![jQuery](../../images/2.2.c.2.jpeg)
![jQuery](../../images/2.2.c.c.2.jpeg)

### Task 2.D: Web API Integration  

 - i. Joke API

Used jQuery to fetch a random programming joke from https:/v2.jokeapi.dev/joke/Programming?type=single on page load. The returned JSON was parsed, and the joke was displayed in a <div> element. This integration demonstrated the practical use of external APIs to enhance user engagement.

#### Joke API 
![Joke API](../../images/2.2.d.1.jpeg)
![Joke API](../../images/2.2.d.d.1.jpeg)

 - ii. Agify API with fetch()

Used JavaScripts modern fetch() API to retrieve age prediction data from https:/api.agify.io/?name=... based on user input. The results were processed asynchronously and rendered within the page, providing a hands-on example of modern JavaScript promises and external API interaction.

#### Agify API with fetch()
![Agify API with fetch()](../../images/2.2.d.2.jpeg)
![Agify API with fetch()](../../images/2.2.d.d.2.jpeg)


