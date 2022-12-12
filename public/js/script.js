function selectDateInitial() {

    let input_initial = document.querySelector('[name="data_inicio"]');
    let input_final = document.querySelector('[name="data_final"]');

    input_final.setAttribute('min',input_initial.value);
}

function openModal (elementName) {
    let modal = document.getElementById(elementName);

    modal.style.display = 'flex';
}

function closeModal (elementName) {
    let modal = document.getElementById(elementName);

    modal.style.display = 'none';
}

function openModalWithId (elementName, id) {
    let modal = document.getElementById(elementName+'-'+id);

    modal.style.display = 'flex';
}

function closeModalWithId (elementName, id) {
    let modal = document.getElementById(elementName+'-'+id);

    modal.style.display = 'none';
}

let i = 4;

function createInput(box) {

    box = document.getElementById('alternatives-input');
    let element = document.createElement('input');

    element.setAttribute('name', 'alternativa'+i);
    element.setAttribute('class', 'alternatives');
    element.setAttribute('type', 'text');
    element.setAttribute('placeholder', 'Alternativa...');
    element.setAttribute('required', '');

    box.appendChild(element)

    i++;
}