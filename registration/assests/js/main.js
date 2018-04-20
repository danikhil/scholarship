addCount=0;

function autofill() {
    var add=document.getElementById("inputCrrAddress").value;
    addCount++;
    if(addCount&1) {
        document.getElementById("inputPermAddress").value=add;
    }
    else {
        document.getElementById("inputPermAddress").value="";
    }
}

//Moving between diffrent steps
function toStep1() {
    javascript:document.getElementById('step1-tab').click();
}

function toStep2() {
    javascript:document.getElementById('step2-tab').click();
}

function toStep3() {
    javascript:document.getElementById('step3-tab').click();
}


function readURL(input, id) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $(id+'Preview').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#inputPhoto").change(function() {
  readURL(this, '#inputPhoto');
});

$("#inputSign").change(function() {
  readURL(this, '#inputSign');
});