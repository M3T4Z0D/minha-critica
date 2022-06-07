function showMedia() {
    const selectedElement = document.querySelector('#media').selectedIndex
    const display = selectedElement ? 'none' : 'flex'
    document.getElementById('spanInfo5').textContent = selectedElement == 2 ? 'Autor(a)' : 'Elenco'
    document.getElementById('spanInfo6').style.display = display
    document.getElementById('inputInfo6').style.display = display
}

function cancel() {
    window.location.assign("../../index.html")
} 