let input = document.getElementById('pass');
let test = document.getElementById('test');

console.log("test");
function enter(){
  console.log("test2");
  if(input.value == ""){
  }
  else {
    ajax();
  }
}
function ajax(){
  let str = input.value;
  console.log(str);
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      if(this.responseText != "ja"){
      window.location.replace("http://26583.hosts2.ma-cloud.nl/HACKETON");
    }
    }
  };
  let urlString = "getpass.php?q="+str;
  console.log(urlString);
  xmlhttp.open("GET",urlString,true);
  xmlhttp.send();
}
