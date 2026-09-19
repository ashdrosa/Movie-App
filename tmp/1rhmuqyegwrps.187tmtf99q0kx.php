<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form>
      <label>First Name:</label>
      <input type="text" id="first-name" placeholder="First Name" />
      <br />
      <label>Birthday:</label>
      <input type="date" id="DOB" />
      <br />
      <label>Email:</label>
      <input type="email" id="email" placeholder="email" />
      <br />
      <label>Username:</label>
      <input type="text" id="username" placeholder="username" />
      <br />
      <label>Password:</label>
      <input type="password" id="pass" placeholder="password" />
      <br />
      <br />

      <button id="register">Submit</button>
    </form>
  </body>
  <script>
    let submit_btn = document.getElementById("register");
    submit_btn.addEventListener("click", () => {
      console.log("clicked");
    });
  </script>
</html>
