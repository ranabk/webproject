function start(){
const addButton= document.getElementById('addbt');
addButton.addEventListener('click',addService);
}

function addService(event){
//send info

var service= document.getElementById('serviceName');
service.value='';
var date= document.getElementById('descrip');
date.value='';
var time= document.getElementById('price');
time.value='';


}