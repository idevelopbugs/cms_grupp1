$('.removebtn').click(function() {

$.ajax({
    type: "POST",
    url: "some.php",
    data: { name: "John" }
    }).done(function( msg ) {
    alert( "Data Saved: " + msg );
    });    

   });

fetch('jsoncontent.php')
// The response converted to JSON is saved 
  .then(data => data.json())
  .then(function(json){
  	json.map(function(obj){
  		//var p = document.createElement('p');
  		//var text = document.createTextNode(obj['title']);
  		//p.appendChild(text);
  		//document.body.appendChild(p);
  		console.log(typeof obj);
  		var cont = document.getElementById('container');
  		cont.innerHTML = `
  						<div>
  							<p> 
  								${obj.Title} 
  							</p> 
  								${obj.Content} 
  						</div>
  				`; 
  	})

  })
