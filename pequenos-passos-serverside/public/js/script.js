M.AutoInit();

function avatarPreview(){
    console.log('ok')
    let fileInput=document.querySelector('#file');
    let preview=document.querySelector('#alunoPreview');
    if(fileInput.files && fileInput.files[0]){
        let reader = new FileReader();
        reader.onload=function(e){
            preview.style.display='block';
            preview.src=e.target.result;
        }
        reader.readAsDataURL(fileInput.files[0]);
    }

}
