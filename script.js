function init() {
  console.log("Hello World");
  getResponse();
}

$(document).ready(init);


function getResponse(){

  $.ajax({
    url: 'api.php',
    method: 'GET',
    data: {
      paral1: [2, 3, 4],
      paral2: [5,6,7],
      paral3:[8,9,10]
    },
    success: function(data){
      console.log(data);
      
    },
    error: function(err){
      console.log(err);
    }

  })
}