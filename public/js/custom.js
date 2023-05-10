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
function switchsignup() {
  const x = document.querySelector(".register-form-withemail");
  const y = document.querySelector(".register-form-withphone");
  const iconSwitch = document.getElementById('iconswitch');

  if (x.style.display === "block") {
    x.style.display = "none";
    y.style.display = "block";
    document.getElementById('switch').innerHTML = '<i class="zmdi zmdi-email" id="iconswitch"></i> SIGN IN with Email';
  } else {
    x.style.display = "block";
    y.style.display = "none";
    document.getElementById('switch').innerHTML = '<i class="zmdi zmdi-phone" id="iconswitch"></i> SIGN IN with Phone';
  }
}
function getReflookup(obj,baseurl){
    let id = $(obj).val();
    let custurl = baseurl+'public/admin/lookup/getjson/'+id;
    $.ajax({
      method: "POST",
      url: custurl,
      data: { look_type_id: id }
    })
    .done(function( obj ) {
      let data = JSON.parse(obj);
      let objReflookupid = $('#reflookupid').empty();
      objReflookupid.append(
        $('<option></option>').val('').html('Select...')
      );
      $.each(data, function(i, item) {
        console.log(item.look_up_id,item.look_up_name);
        objReflookupid.append(
          $('<option></option>').val(item.look_up_id).html(item.look_up_name)
        );
      }); 
  }); 
}
