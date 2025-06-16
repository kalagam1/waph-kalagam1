# Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Mahitha Kalaga

**Email**: [kalagam1@udayton.edu](kalagam1@udayton.edu)

![Mahitha's headshot](/images/mahi.jpeg)

## Repository Information

Repository's URL: [https://github.com/MahithaKalaga-cyber/waph-mahitha.git](https://github.com/MahithaKalaga-cyber/waph-mahitha.git)

This is a private repository for Mahitha Kalaga to store all the code from the course. The organization of this repository is as follows.

### Labs

[Hands-on exercises in Lectures](labs)

- [Lab 0](labs/lab0): Development Environment Setup
- [Lab 1](labs/lab1): Foundations of the Web
- [Lab 2](labs/lab2): Front-end Web Development

## Report

## The Hackathon's overview

This hackathon focused on identifying and exploiting reflected Cross-Site Scripting (XSS) vulnerabilities through a series of hands-on web security exercises. Covered in Lectures 7 and 8, the hackathon included two tasks: performing XSS attacks across seven levels of increasing difficulty, and implementing proper defenses in insecure web applications from Lab 1 and Lab 2.

Hackathon's URL: [Hackathon](https://github.com/MahithaKalaga-cyber/waph-mahitha/tree/main/hackathon1)

## Task 1: Attacks

In this task, I performed reflected XSS attacks on levels 0 to 6 by injecting custom payloads to display messages like "Hacked by Mahitha Kalaga". For each level, I bypassed filters using different techniques such as using image tags, obfuscated scripts, and DOM manipulation, and identified the likely vulnerable PHP code behind each level.

### Level 0: 

I injected a basic scriptalert('Level 0: Hacked by Mahitha Kalaga')script payload. Since there was no input filtering, the alert executed successfully.

![level 0](/images/level0.jpeg)

![level 0](/images/level0.1.jpeg)

### Level 1: 

The input was reflected inside an attribute, so I broke out using "script.../script. This triggered the alert, proving the vulnerability exists in unescaped attribute context.

![level 1](/images/level1.jpeg)

### Level 2: 

The input was submitted via POST by creating level.html, and the server echoed it without filtering. Using a standard script payload in the form triggered the alert, showing direct use of $_POST["input"].

  - Payload: scriptalert("Level 2: Hacked by Mahitha Kalaga")/script
  - Input Method: Submitted via POST
  - Code Guess: echo $_POST["input"];

![level 2](/images/level2.jpeg)

![level 2](/images/level2.1.jpeg)

### Level 3: 

The script tag was filtered, so I used img src=x onerror=... to trigger JavaScript via an event. The alert showed my message, confirming that only script tags were stripped, not event handlers.

  - Payload: img src=x onerror="alert('Level 3: Hacked by Mahitha Kalaga')
  - Code Guess: echo str_replace("script", "", $_GET["input"]);

![level 3](/images/level3.jpeg)

### Level 4: 

I used the details HTML tag with the ontoggle event to trigger the alert. The payload successfully executed and displayed the message “Level 4: Hacked by Mahitha Kalaga”. This confirms the application only filters specific tags like <script> but still allows dangerous event attributes.

  - Payload: details open ontoggle="alert('Level 4: Hacked by Mahitha Kalaga')"
  - Code Guess: echo str_ireplace("<script>", "", $_GET["input"]);

![level 4](/images/level4.jpeg)

### Level 5: 

Since keywords like alert and script were filtered in Level 5, I bypassed detection using a harmless-looking <img> tag with a console.log() payload. The attack succeeded, and the message “Level 5: Hacked by Mahitha Kalaga” was printed in the browser console. This confirms that the input is still executed in the browser context, even though the output is sanitized for visible scripts.

  - Payload: img src=x onerror="console.log('Level 5: Hacked by Mahitha Kalaga')"
  - Code Guess: $input = $_GET["input"];
                         $input = str_ireplace(["<script>", "alert"], "", $input);
                         echo $input;

![level 5](/images/level5.jpeg)

![level 5](/images/level5.1.jpeg)

### Level 6: 

Level 6 was designed to escape special characters, using htmlentities(). Despite that, I successfully injected a working script tag via URL, and the alert “Level 6: Hacked by Mahitha Kalaga” was displayed. This indicates that the server-side encoding was either bypassed or not enforced properly in all contexts.

  - Payload: scriptalert("Level 6: Hacked by Mahitha Kalaga")/script
  - Code Guess: echo htmlentities($_POST["input"]);

![level 6](/images/level6.jpeg)

### Task 2: Defenses

### Task 2.A: Ajax 

Implemented a form-driven Ajax request using XMLHttpRequest to send user input to echo.php. The servers response is retrieved and rendered within a target div element. By monitoring the request through browser developer tools, I gained insight into asynchronous communication and HTTP request/response lifecycles.

![Ajax](../../images/2.2.a.jpeg)

![Ajax](../../images/2.2.a.a.jpeg)

### Task 2.B: CSS  

Demonstrated an understanding of different CSS application methods:
 - Inline CSS was used directly within HTML tags for quick styling.
 - Internal CSS was defined within a style block in the head for layout consistency.
 - External CSS was applied by linking to a remote stylesheet (https:/waph-phung.github.io/style3.css).

![CSS](../../images/2.2.b.jpeg)

![CSS](../../images/2.2.b.b.jpeg)

### Task 2.C: jQuery   

Included the jQuery library via CDN and developed Ajax functions using both $get() and $post() methods to interact with the echo.php endpoint. The responses were dynamically injected into the DOM.   

![jQuery](../../images/2.2.c.1.jpeg)

![jQuery](../../images/2.2.c.c.1.jpeg)

![jQuery](../../images/2.2.c.2.jpeg)

![jQuery](../../images/2.2.c.c.2.jpeg)

### Task 2.D: Web API Integration  

 - i. Joke API

Used jQuery to fetch a random programming joke from https:/v2.jokeapi.dev/joke/Programming?type=single on page load. The returned JSON was parsed, and the joke was displayed in a div element. This integration demonstrated the practical use of external APIs to enhance user engagement.

![Joke API](../../images/2.2.d.i.jpeg)

![Joke API](../../images/2.2.d.d.1.jpeg)

 - ii. Agify API with fetch()

Used JavaScripts modern fetch() API to retrieve age prediction data from https:/api.agify.io/?name=... based on user input. The results were processed asynchronously and rendered within the page, providing a hands-on example of modern JavaScript promises and external API interaction.

![Agify API with fetch()](../../images/2.2.d.2.jpeg)

![Agify API with fetch()](../../images/2.2.d.d.2.jpeg)


