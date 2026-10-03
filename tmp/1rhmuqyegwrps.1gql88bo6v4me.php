<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Special+Gothic+Expanded+One&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <form id="login-form">
      <label> Username: </label>
      <input type="text" id="usrname" placeholder="username" name="user_name" />
      <br />
      <label> Password: </label>
      <input
        type="password"
        id="pass"
        placeholder="password"
        name="user_password"
      />
      <br />
      <br />
      <button type="click" id="submit-login">Submit</button>
    </form>
    <br />
    <a href="/register"> Don't have an account? Create an account </a>
  </body>

  <script>
    let submit_Btn = document.getElementById("submit-login");
    submit_Btn.addEventListener("click", async (e) => {
      e.preventDefault();
      console.log("clicked");

      const login_Form = document.getElementById("login-form");
      const formData = new FormData(login_Form);

      const response = await fetch("/login/user", {
        method: "POST",
        body: formData,
      });

      const result = await response.json();
      console.log(result.success);
      if (result.success == true) {
        window.location.href = "/";
      }
    });
  </script>
</html>
