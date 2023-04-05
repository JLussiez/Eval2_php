window.addEventListener('load', function(){
    let errormsg = document.getElementById('errormsg');
    if(errormsg){
        let errormsgModal = new bootstrap.Modal(errormsg, {
            keyboard: false
        });    
        errormsgModal.show();
    }
});