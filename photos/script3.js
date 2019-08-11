var a = document.getElementsByTagName('select')[0];
a.value = window.location.pathname.substring(18, window.location.pathname.length-1).replace(new RegExp('_', 'g'), ' ');
a.addEventListener('change', function() {
  if(a.value != 'All Years') {
    if(a.value[0] != 2) {
      //.. goes to parent directory, that way it looks for an event in the years directory, not the current event directory that doesn't contain the other events
      window.location = '../' + a.value.replace(new RegExp(' ', 'g'), '_');
    }else{
      window.location = '/photos/' + a.value.replace(new RegExp(' ', 'g'), '_');
    }
  }else{
    window.location = "/photos/";
  }
});
