function init() {
  console.log("Hello World");
  $(document).on('click', '#send', getResponse);
  
}

$(document).ready(init);


function collectData(){
  var arr = [];

  $('.form').each(function(i){

    var dimensioni = [];
    var a, b, p;

    a = Number($('#altezza' + (i+1)).val());
    dimensioni.push(a);

    b = Number($('#base' + (i+1)).val()); 
    dimensioni.push(b);

    p = Number($('#prof' + (i+1)).val());
    dimensioni.push(p);

    arr.push(dimensioni);
  });

  console.log(arr);
  

  return arr;

}

function getResponse(){

  var arr = collectData();

  var theData = {
     paral1: arr[0],
      paral2: arr[1],
      paral3:arr[2]
  }

  $.ajax({
    url: 'api.php',
    method: 'GET',
    data: theData,
    success: function(data){
      console.log(data);
      printData(arr, data);
    },
    error: function(err){
      console.log(err);
    }

  })
}

function printData(arr, data){

  var source = $('#item-template').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i<arr.length;i++){
    var index = arr[i];
    var context = {
      number: i+1,
      riassunto: 'Altezza: ' + index[0] +
      ', Base: ' + index[1] +
      ', Profondità: ' + index[2] ,
      area: 'Area: ' + data.areas[i] ,
      volume: 'Volume: ' + data.volumes[i]
    }

    var html = template(context);

    $('#risposte').append(html);
  }

  

 
}