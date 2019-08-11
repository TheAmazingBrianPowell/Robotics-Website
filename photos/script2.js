var a = document.getElementsByTagName('select')[0];
a.value = window.location.pathname.substring(8,17).replace(new RegExp('_', 'g'), ' ');
a.addEventListener('change', function() {
  //if value is something other than 'All Years'
  if(a.value != 'All Years') {
    //if the value is not a folder...
    if(a.value[0] != 2) {
      //go to an events page
      window.location = a.value.replace(new RegExp(' ', 'g'), '_');
    }else{
      //otherwise go to a years page
      window.location = '/photos/' + a.value.replace(new RegExp(' ', 'g'), '_');
    }
  }else{
    //otherwise, go to the main photos directory
    window.location = "/photos/";
  }
});
