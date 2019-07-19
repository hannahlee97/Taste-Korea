function $(id){var element = document.getElementById(id);if( element == null ) alert( 'Programmer error: ' + id + ' does not exist.' );return element;}


 function validate2(){

         var name = document.getElementById('myName').value;
      var nameRegex = /^[a-zA-Z]+$/;

   if (!nameRegex.test(name))
     {if(name=="")
      {return $('error1').innerHTML="";}
     else {$('error1').innerHTML="Please only enter alphabetic characters"; }}
     else {return $('error1').innerHTML="" }}


   function validate(){

  var email = document.getElementById('myEmail').value;
      var emailRegex =/^[a-z0-9._-]+@[a-z0-9.]+\.[a-z]{2,}$/i; //starts with letter a-z or 0-9 & allows '.', '_', and '-'; must have @; domain has letters a-z or 0-9; TLD has . and any a-z, at least 2 chars; case insensitive.
      if (!emailRegex.test(email))
  {if (email== ""){
  return $('error3').innerHTML=""; }
  else{
  return $('error3').innerHTML="Enter proper email"; }}
     else {return $('error3').innerHTML=""; }}

function validate1(){

      var pass = document.getElementById('myPword2').value;

  var passwordRegex = /^[a-zA-Z0-9]{6,}/;

   if (!passwordRegex.test(pass))
    { if (pass == "") {
    return $('error2').innerHTML="" ;}
    else {
     return $('error2').innerHTML="Password has to be at least 6 characters"; }}
     else {return $('error2').innerHTML="" ;}}



function check(){

  var name = document.getElementById('myName').value;

   var nameRegex = /^[a-zA-Z]+$/;
     if (!nameRegex.test(name)){
   $('error4').innerHTML="Please fill out the form properly";
   return false;}


  var email = document.getElementById('myEmail').value;
      var emailRegex =/^[a-z0-9._-]+@[a-z0-9.]+\.[a-z]{2,}$/i; //starts with letter a-z or 0-9 & allows '.', '_', and '-'; must have @; domain has letters a-z or 0-9; TLD has . and any a-z, at least 2 chars; case insensitive.
      if (!emailRegex.test(email)){
  $('error4').innerHTML="Please fill out the form properly";
  return false;}}

function check0() {

   var tame = document.getElementById('userName').value;

  if (tame == ""){
    $('error5').innerHTML="Username and password has to be entered";
    return false; }

  var pame = document.getElementById('myPword').value;

  if (pame == ""){
    $('error5').innerHTML="Username and password has to be entered";
    return false; }}
