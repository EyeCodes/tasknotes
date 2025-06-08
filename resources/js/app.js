import './bootstrap';

//darkmode
let darkmode = localStorage.getItem("darkmode")
const themeBtn = document.getElementById("theme")

const enableDarkmode = () =>{
  document.documentElement.classList.add("dark")
  localStorage.setItem("darkmode", 'active')
}

const disableDarkmode = () =>{
  document.documentElement.classList.remove("dark")
  localStorage.setItem("darkmode", null)
}

document.documentElement.onload = ()=>{
  darkmode = localStorage.getItem("darkmode")
  darkmode == "active" ? themeBtn.classList.add('text-[#f0e4f7]'): themeBtn.classList.remove('text-[#282729]')
  darkmode == "active" ?  document.documentElement.classList.add("dark") : document.documentElement.classList.remove("dark")

}

themeBtn.addEventListener("click", ()=>{
  darkmode = localStorage.getItem("darkmode")
  darkmode !== "active" ? enableDarkmode() : disableDarkmode()
  console.log(darkmode)

})
