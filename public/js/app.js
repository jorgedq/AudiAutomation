document.addEventListener('DOMContentLoaded', e => {
  //initStyle()
  addTaskAction('addTask')
  darkMode()
})
// const initStyle = () => {
//   const $switch = document.getElementById('dark-check')
//   console.log(localStorage.getItem('dark_mode'));
//   if (localStorage.getItem('dark_mode')) {
//     $switch.addAttribute('checked','checked')
//     activeDark()
//     activeStorageDark()
//   }else{
//     destroyStorageDark()
//     activeLight()
//     $switch.removeAttribute('checked')
//   }
// }
const darkMode = () => {
  const $dark = document.querySelector('.switch__slider')
  const $switch = document.getElementById('dark-check')
  document.addEventListener('click', e => {
    if (
      e.target.matches('.switch__slider') ||
      e.target.matches('.switch__slider *')
    ) {
      
      if(!$switch.checked){
        activeLight()
        destroyStorageDark()
      }else{
        activeStorageDark()
        activeDark()
      }
    }
  })
}
function activeLight(){
  document.body.classList.add('dark')
}
function activeStorageDark(){
  localStorage.setItem('dark_mode',true)
}
function destroyStorageDark(){
  localStorage.setItem('dark_mode',false)
}
function activeDark(){
  document.body.classList.remove('dark')
}
//add task element
const addTaskAction = id => {
  const $formTask = document.getElementById('taskform')
  const $iconBtnAdd = document.getElementById('icn')
  document.addEventListener('click', e => {
    if (e.target.matches(`#${id}`) || e.target.matches(`#${id} *`)) {
      $formTask.classList.toggle('active-taskform')
      toggleData($formTask)
      toggleBtn($iconBtnAdd, $formTask)
    }
  })
}
const toggleData = $element => {
  if ($element.dataset.active === 'false') {
    $element.setAttribute('data-active', 'true')
  } else {
    $element.setAttribute('data-active', 'false')
  }
}
const toggleBtn = ($icon, $element) => {
  if ($element.dataset.active === 'false') {
    $icon.classList.remove('fa-plus')
    $icon.classList.add('fa-times')
  } else {
    $icon.classList.remove('fa-times')
    $icon.classList.add('fa-plus')
  }
}
