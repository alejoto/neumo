function hideshow1(main, second) {
  if (main.val() != "") {
    second.show("fast");
  }
  else {
    second.hide("fast");
  }
}

function show_ifnoempty(one, two) {
  $(document).ready(function() {
    two.hide();
    one.keyup(function() {
      hideshow1(one, two)
    })
  })
}

function hide_if_empty(n_empty, hid_shw) {
  $(document).ready(function() {
    hid_shw.hide();
  })

  n_empty.change(function() {
    hideshow1(n_empty, hid_shw);
  })
}

$(document).ready(function() {
  $("#patientexist").hide();
  $("#enterpatient").hide();
  $("#docidnum").hide();
})

$("#idnumber").blur(function() {
  
  var doc=$("#docid").val();
  if (doc=="Cédula") {doc="cc"};
  if (doc=="Registro Civil") {doc="rc"};
  if (doc=="Tarjeta de Identidad") {doc="ti"};
  if (doc=="Cédula Extranjería") {doc="ce"};
  if (doc=="Pasaporte") {doc="ps"};
  var docidnum=doc+$("#idnumber").val();

  $.post("ajax_search_patient.php",{ doc:docidnum }, function(data) {
    if(data=='no') {
      $("#enterpatient").show("fast");
      $("#patientexist").hide("fast");
    }else{
      $("#enterpatient").hide("fast");
      $("#patientexist").show("fast");

      var myArray = data.split('?');
      for(var i=0;i<myArray.length;i++){
        var pos = "#patient_" +  i;
        $(pos).html(myArray[i]);
      }
    }
  });
  
  $("#docidnum").val(docidnum);
});

function tiprequired (reqfld) {
  $(document).ready(function() {
    reqfld.blur(function() {
      if (reqfld.val() == "") {
        reqfld.tooltip({
          title: 'Requerido',
          placement: 'right'
        });
        reqfld.tooltip('show');
        } else reqfld.tooltip('destroy');
      });
    });
  }

function show_ifnoempty(one, two) {
  $(document).ready(function() {
    two.hide();
  })

  one.keyup(function() {
    if (one.val()!="") {
      two.show("fast");
    }
    else {
      two.hide("fast");
    }
  })
}

function onlynumber(o_nb) {
  o_nb.keydown(function(event) {
    if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 45 || event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {} else {
      if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
        event.preventDefault();
      }
    }
  });
}

function num_ranges(vale, maxi, mini) {
  $(document).ready(function() {
    onlynumber(vale);
    vale.blur(function() {
      if (vale.val() >maxi) {
        vale.popover('destroy');
        vale.popover({title:"Valor debe ser menor o igual a "+maxi,placement: 'right'});
        vale.popover('show');
        vale.focus();
      }
      else if (vale.val() < mini) {
        vale.popover('destroy');
        vale.popover({title:"Valor debe ser mayor o igual a "+mini,placement: 'right'})
        vale.popover('show');
        }/**/
      else vale.popover('destroy');
    });
  })
}
    
function up_cas(lwc) {
  lwc.keyup(function() {
    lwc.val($(this).val().toUpperCase());
  });
}

tiprequired ($("#day"));
tiprequired ($("#name"));
tiprequired ($("#surname"));
tiprequired ($("#gender"));
tiprequired ($("#citybth"));
tiprequired ($("#statebth"));
tiprequired ($("#countrybth"));

show_ifnoempty($("#year"),$("#month"));
show_ifnoempty($("#month"),$("#day"));

up_cas($('#name'));
up_cas($('#surname'));
up_cas($('#citybth'));
up_cas($('#statebth'));
up_cas($('#countrybth'));

num_ranges($("#year"),2020,1913);
num_ranges($("#month"),12,1);
num_ranges($("#day"),31,1);
hide_if_empty($("#docid"), $("#idnumberctr"));