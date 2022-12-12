$(document).ready(function () {

    let alter_count = document.querySelector('[id = "input-alter-values"]');

    let tds = document.querySelectorAll('[class = "votes-number"]');

    function addVotes() {
        for (let i = 0; i < alter_count.value; i++) {
            var a = document.getElementById(`${tds[i].getAttribute('data-id')}`);    
            var alter_id = a.getAttribute('data-id');

            getRoute(alter_id);
            console.log('arroz');
        }  
    }
    setInterval(addVotes, 1000);
});

function getRoute (alter_id) {
    $.get('/get-votes/' + alter_id , function (data) {
        var td = document.getElementById('vote'+alter_id);
        if (td.innerText != data) {
            td.innerText = data;
        }   
    }); 
}