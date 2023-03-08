//upload_category.php validation
function valCat(){
  let catName = document.forms["cat"]["category_name"].value.trim();
  let imageExtension = document.forms["cat"]["category_image"].value.split('.').pop().toLowerCase();
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

  if(catName.length<2){
    alert("First name must be at least 2 characters long");
    return false;
  }
}

function valUp() {
  
  let catID = document.forms["update"]["new_category_id"].value.trim();
  let catName = document.forms["update"]["new_category_name"].value.trim();
  if(isNaN(catID)){
    alert("Category ID must be a number");
    return false;
  }
  if(catName.length<2){
    alert("First name must be at least 2 characters long");
    return false;
  }

}

//upload_products.php validation
function valProd(){
  let prodName = document.forms["prod"]["product_name"].value.trim();
  let prodPrice = document.forms["prod"]["price"].value.trim();
  let prodDisc = document.forms["prod"]["discount"].value.trim();
  let prodDesc = document.forms["prod"]["description"].value.trim();
  let imageExtension = document.forms["prod"]["image"].value.split('.').pop().toLowerCase();
  let prodBrand = document.forms["prod"]["description"].value.trim();
  if(prodName.length<2){
    alert("Product name must be at least 2 characters long");
    return false;
  }
  if(isNaN(prodPrice)){
    alert("Product price must be a number");
    return false;
  }
  if(isNaN(prodDisc)){
    alert("Product discount must be a number");
    return false;
  }
  if(prodDesc.length<10){
    alert("Product description must be at least 10 characters long");
    return false;
  }
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
alert("aa");
  if(prodBrand.length<2){
    alert("Product brand must be at least 2 characters long");
    return false;
  }
}
//cart.php validation
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

function toPayment(){
  window.location.assign("payment.php");
}