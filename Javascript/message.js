const addMessage = document.querySelector('#sendMessageButton')
let addMessageForm= document.querySelector('#contactForm')
let addMessageError = document.querySelector('#success')

addMessage.addEventListener('click',e=>{
    e.preventDefault()
    const xhr = new XMLHttpRequest()
    xhr.open('POST', 'api/php/message.php')
    xhr.onreadystatechange = function(){
        if(xhr.status==200 && xhr.readyState==4){
            let result = xhr.responseText
            if(result == 'success'){
                addMessageError.innerHTML = `<div  class='alert alert-success text-center' ><strong>Sent Successfully!</strong></div>`
                addMessage.disabled = true
            }else{
                addMessageError.innerHTML = `<div class='alert alert-danger text-center'><strong>${result}</strong></div>`
                
            }
        }
    }
    const formdata = new FormData(addMessageForm)
    xhr.send(formdata)
})