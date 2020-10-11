document.addEventListener('DOMContentLoaded', e => {
  addTaskAction('addTask')
})

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
