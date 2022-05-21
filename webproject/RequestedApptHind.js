function start(){
var checkButton= document.getElementById("check-btn");
var deleteButton= document.getElementById("delete-btn");
checkButton.addEventListener('click',checked,false);
deleteButton.addEventListener('click',deleted,false);
}

function deleted(e){
   const event=e.target;
  const request= event.document.getElementByClassName('newappt');
   request.remove();
  //var re= document.getElementsByClassName("newappt");
 // event.parentNode.removeChild(event);
}







window.addEventListener('load',start(),false);