const userName = document.querySelector('.user_Name input');
const userPass = document.querySelector('.user_Pass input');
const button = document.querySelector('.button');
button.addEventListener('click',()=>{
    if(userName.value =='khr192018' && userPass.value == 'kharu@908'){
        button.href = 'index2.php';
    }
    else{
        alert('enter credentials correctly!');
        button.href='';
    }
})