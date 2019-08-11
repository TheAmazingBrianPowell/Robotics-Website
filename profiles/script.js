//similar to photos javascript files
var a = document.getElementsByTagName('select')[0];
a.addEventListener('change', function() {
  if(a.value != 'All Years') {
    window.location = "http://" + document.location.hostname + "/profiles/" + a.value;
  }else{
    window.location = "http://" + document.location.hostname + "/profiles/";
  }
});
if(window.location.pathname != "/profiles/") {
  a.value = window.location.pathname.substring(10,19);
}
