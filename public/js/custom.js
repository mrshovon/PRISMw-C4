function switchlogin() {
  const x = document.querySelector(".register-form-withemail");
  const y = document.querySelector(".register-form-withphone");
  const iconSwitch = document.getElementById('iconswitch');

  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.display = "block";
    document.getElementById('switch').innerHTML = '<i class="zmdi zmdi-email" id="iconswitch"></i> LOGIN with Email';
  } else {
    x.style.display = "block";
    y.style.display = "none";
    document.getElementById('switch').innerHTML = '<i class="zmdi zmdi-phone" id="iconswitch"></i> LOGIN with Phone';
  }
}