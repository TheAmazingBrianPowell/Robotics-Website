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

//Lazy loading technique, loads images as the user scrolls
var imgs = document.getElementsByTagName('img');
var divs = document.getElementsByTagName('div');
window.addEventListener("scroll", LoadTheStuff);
LoadTheStuff();
function LoadTheStuff() {
    for(var i = 2; i < imgs.length; i++) {
      if(divs[i-2].getBoundingClientRect().top < (window.innerHeight + 300 || document.documentElement.clientHeight + 300) && divs[i-2].getBoundingClientRect().bottom > -300) {
        imgs[i].setAttribute('src', imgs[i].getAttribute('data-src'));
      }
    }
};
