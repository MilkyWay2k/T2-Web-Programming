function valProd(){
  let name = document.forms["product"]["name"].value.trim();
  let desc = document.forms["product"]["desc"].value.trim();
  let price = document.forms["product"]["price"].value.trim();

  if(name.length<5){
    alert("Product name must be at least 5 characters long");
    return false;
  }
  if(desc.length<15){
    alert("Product description must be at least 15 characters long");
    return false;
  }
  if(isNaN(price)){
    alert("Product price must be a number");
  }
}

function valCat(){
  let name = document.forms["category"]["name"].value.trim();
  let desc = document.forms["category"]["desc"].value.trim();

  if(name.length<5){
    alert("Product name must be at least 5 characters long");
    return false;
  }
  if(desc.length<15){
    alert("Product description must be at least 15 characters long");
    return false;
  }
}
