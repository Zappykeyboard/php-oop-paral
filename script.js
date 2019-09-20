function init() {
  console.log("Hello World");
  $(document).on('click', '#send', collectData);
  
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

  getResponse(arr);

}

function getResponse(arr){

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
      
    },
    error: function(err){
      console.log(err);
    }

  })
}