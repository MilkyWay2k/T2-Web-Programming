//create_product.php validation
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
    alert("Category name must be at least 5 characters long");
    return false;
  }
  if(desc.length<15){
    alert("Category description must be at least 15 characters long");
    return false;
  }
}

function valImage(){
  let imageExtension = document.forms["image"]["prod_image"].value.split('.').pop().toLowerCase();
  let title = document.forms["image"]["title"].value.trim();
  var isValidFile = false;
  var allowedExtension = ['jpeg', 'jpg', 'png'];
  for(var index in allowedExtension) {
    if(imageExtension === allowedExtension[index]) {
        isValidFile = true; 
        break;
    }
  }
  if (!isValidFile) {
    alert("Image must be JPG or PNG");
    return false;
  }
  if(title.length<5){
    alert("Image title must be at least 5 characters long");
    return false;
  }
}

//cart.php validation
function test(){
  alert("Test function entered");
  return false;
}

function valCart(){
  let fname = document.forms["cartForm"]["fname"].value.trim();
  let lname = document.forms["cartForm"]["lname"].value.trim();
  let email = document.forms["cartForm"]["email"].value.trim();
  let delivery = document.forms["cartForm"]["deliveryOption"];
  let address = document.forms["cartForm"]["address"].value.trim();
  let postalCode = document.forms["cartForm"]["postalCode"].value.trim();
  let city = document.forms["cartForm"]["city"].value.trim();
  let phone = document.forms["cartForm"]["phone"].value.trim();


  if(fname.length<2){
    alert("First name must be at least 2 characters long");
    return false;
  }
  if(lname.length<2){
    alert("Last name must be at least 2 characters long");
    return false;
  }

//email regex
  var re = /\S+@\S+\.\S+/;
  if (!re.test(email)) {
    alert("Please input a valid email address");
    return false;
  }
  var deliveryChecked = false;
  for (var i = 0, len = delivery.length; i < len; i++) {
    if (delivery[i].checked) {
        deliveryChecked = true;
    }
  }
  if (!deliveryChecked) {
    alert("Choose delivery option");
    return false;
  }

  if(address.length<15){
    alert("Please enter full address");
    return false;
  }
  if(postalCode.length<4){
    alert("Please enter a valid postal code");
    return false;
  }
  if(isNaN(postalCode)){
    alert("Please enter a valid postal code");
    return false;
  }
  if(city.length<2){
    alert("Please enter a valid city");
    return false;
  }
  if(phone.length<8 || phone.length>11){
    alert("Please enter a valid phone number");
    return false;
  }
}
