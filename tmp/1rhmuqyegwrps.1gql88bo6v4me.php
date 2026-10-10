<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>

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
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>
