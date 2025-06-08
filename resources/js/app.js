import './bootstrap';

//darkmode
let darkmode = localStorage.getItem("darkmode")
const themeBtn = document.getElementById("toggle")

const enableDarkmode = () =>{
  document.body.classList.add("darkPallet")
  localStorage.setItem("darkmode", 'active')
}

const disableDarkmode = () =>{
  document.body.classList.remove("darkPallet")
  localStorage.setItem("darkmode", null)
}

document.body.onload = ()=>{
  darkmode = localStorage.getItem("darkmode")
  darkmode == "active" ? themeBtn.checked = true : themeBtn.checked = false
  darkmode == "active" ?  document.body.classList.add("darkPallet") : document.body.classList.remove("darkPallet")

}

themeBtn.addEventListener("click", ()=>{
  darkmode = localStorage.getItem("darkmode")
  darkmode !== "active" ? enableDarkmode() : disableDarkmode()
})
