function showMedia() {
    const selectedElement = document.querySelector('#media').selectedIndex
    const display = selectedElement ? 'none' : 'flex'
    document.getElementById('spanInfo5').textContent = selectedElement == 2 ? 'Autor(a)' : 'Elenco'
    document.getElementById('inputInfo5').setAttribute('name', selectedElement == 2 ? 'author' : 'cast')
    document.getElementById('spanInfo6').style.display = display
    document.getElementById('inputInfo6').style.display = display

    const form = document.getElementById('mediaForm')
    const action = ['filme', 'serie', 'livro'] 
    form.action = 'http://localhost:8081/progweb/cadastro_de_midia/' + action[selectedElement]
}

function cancel() {
    window.location.assign("../../../index.php")
} 