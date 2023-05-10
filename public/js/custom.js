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
    let ltid = $(obj).val();
    if(ltid == 11){
      ltid = 10;
    }
      let custurl = baseurl+'public/admin/lookup/getjson';
      $.ajax({
      method: "POST",
      url: custurl,
      dataType:"json",
      data: { look_type_id: ltid }
    })
    .done(function( data ) {
      let objReflookupid = $('#reflookupid').empty();
      objReflookupid.append(
        $('<option></option>').val('').html('Select...')
      );
      $.each(data, function(i, item) {
        objReflookupid.append(
          $('<option></option>').val(item.look_up_id).html(item.look_up_name)
        );
      }); 
  }); 
    
}
function getDistrict(obj,baseurl){
    let id = $(obj).val();
    let ltid = $('option:selected', obj).attr('ltval');
    // console.log(id, ltid);
    let custurl = baseurl+'public/admin/user/getjson';
    $.ajax({
    method: "POST",
    url: custurl,
    dataType:"json",
    data: { ref_lookup_id: id }
  })
  .done(function( data ) {
    let objdivisionid = $('#district').empty();
    objdivisionid.append(
      $('<option></option>').val('').html('Select...')
    );
    $.each(data, function(i, item) {
      objdivisionid.append(
        $('<option></option>').val(item.look_up_id).html(item.look_up_name)
      );
    }); 
  }).catch(ex=>{throw ex});
}


