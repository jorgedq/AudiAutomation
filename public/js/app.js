
$btn = document.getElementById('prueba')

$btn.addEventListener('click',()=>{
    const element = document.createElement('p')
    element.innerHTML = 'hola'
    document.getElementById('colocar').append(element)
})