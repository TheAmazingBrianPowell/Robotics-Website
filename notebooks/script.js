var a = document.getElementsByTagName('select')[0];
a.addEventListener('change', function() {
  if(a.value != 'All Years') {
    window.location = "http://" + document.location.hostname + "/notebooks/" + a.value;
  }else{
    window.location = "http://" + document.location.hostname + "/notebooks/";
  }
});
if(window.location.pathname != "/notebooks/") {
  a.value = window.location.pathname.substring(11,20);
}
