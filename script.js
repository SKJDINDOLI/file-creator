//Show menu list
if(document.querySelector("#menu_icon")){
document.querySelector("#menu_icon").addEventListener("click",()=>{
    document.querySelector("#menu_list").classList.toggle("d-none");
})
}

//Download and Delete button
if(document.querySelectorAll(".more_vert")){
Array.from(document.querySelectorAll(".more_vert")).forEach(e=>{
   e.addEventListener("click",()=>{
    e.nextElementSibling.classList.toggle("d-none"); 
   })
});
}


//file type change 
if(document.querySelector("#file_type")){
    document.querySelector("#file_type").addEventListener("change",(e)=>{
    let val=e.target.value;
    let file_text=document.querySelector("#file_text");
    if(val=="html"){
        file_text.innerHTML='<!DOCTYPE html>\n<html lang="en">\n<head>\n    <meta charset="UTF-8">\n    <meta name="viewport" content="width=device-width, initial-scale=1.0">\n    <title>Document</title>\n</head>\n<body>\n\n    <h1>Hello world</h1>\n\n</body>\n</html>';
    }else if(val=="php"){
        file_text.innerHTML='<?php\n\n    echo "Hello World";\n\n?>';
    }else if(val=="js"){
        file_text.innerHTML='let a = "Hello World";\n\nconsole.log(a);';
    }else if(val=="css"){
        file_text.innerHTML='*{\nmargin: 0;\npadding: 0;\n}';
    }else{
        file_text.innerHTML='Hello World';
    }
})
}

if(document.querySelector("#folder_create_btn")){
    document.querySelector("#folder_create_btn").addEventListener("click",()=>{
        document.querySelector("#folder_form").classList.toggle("d-none");
        document.querySelector("#folder_create_btn").classList.toggle("d-none");
    })
}