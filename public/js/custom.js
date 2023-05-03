document.getElementById("switch").addEventListener(
    "click",
    () => {
      document.getElementsByClassName("withphone").hidden = false;
      document.getElementsByClassName("withemail").hidden = true;
    },
    false
  );