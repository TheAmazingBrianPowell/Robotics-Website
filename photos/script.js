//Okay, this is a javascript file, amazing, right?

//Get the first select element on the page
var a = document.getElementsByTagName('select')[0];
//set the default value to the All Years option
a.value = 'All Years';

//wait for a change...
a.addEventListener('change', function() {
  //if the value changed to something other than all years...
  if(a.value != 'All Years') {
    //change the page to the current directory + the option value with the underscores ('_') added back in
    window.location = a.value.replace(new RegExp(' ', 'g'), '_');
  }else{
    //otherwise we must be headed to the main photos page for all the years!
    window.location = "/photos/";
  }
});
