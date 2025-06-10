import './bootstrap';

 document.addEventListener('DOMContentLoaded', ()=>{
//darkmode
let darkmode = localStorage.getItem("darkmode")
const themeBtn = document.getElementById("theme")
  darkmode = localStorage.setItem("darkmode", null)
const enableDarkmode = () =>{
  document.documentElement.classList.add("dark")
  localStorage.setItem("darkmode", 'active')
}

const disableDarkmode = () =>{
  document.documentElement.classList.remove("dark")
  localStorage.setItem("darkmode", null)
}

  darkmode = localStorage.getItem("darkmode")
  darkmode == "active" ? themeBtn.classList.add('text-[#f0e4f7]'): themeBtn.classList.remove('text-[#282729]')
  darkmode == "active" ? document.documentElement.classList.remove("dark")  : document.documentElement.classList.add("dark") 


  const inputs = document.querySelectorAll('input');
  inputs.forEach(input => {
  darkmode == "active" ?  input.classList.remove('input-autofill')  :  input.classList.add('input-autofill')
  })
themeBtn.addEventListener("click", ()=>{
  darkmode = localStorage.getItem("darkmode")
  darkmode !== "active" ? enableDarkmode() : disableDarkmode()
  console.log(darkmode)
  inputs.forEach(input => {
  darkmode == "active" ?  input.classList.remove('input-autofill')  :  input.classList.add('input-autofill')
});

})

const addTask = document.getElementById('add-task')
const closebtns = document.querySelectorAll('.close-task-form')
const formbg = document.getElementById('full-bg')
const updateForm = document.getElementById('update-form')

addTask.addEventListener('click', ()=>{
  (formbg.style.display = 'none') == true ? formbg.style.display = 'none' : formbg.style.display = 'flex'
})

closebtns.forEach(closebtn => {
  closebtn.addEventListener('click', ()=>{
    if(  formbg.style.display != 'none'){
        formbg.style.display = 'none'
    }
    else if(  updateForm.style.display != 'none' ){
        updateForm.style.display = 'none' 
    }

})
});
window.updateForm = function (id) {
    console.log('Task ID:', id);
    (updateForm.style.display = 'none') == true ? updateForm.style.display = 'none' : updateForm.style.display = 'flex'
    // Your logic here
};


  })


