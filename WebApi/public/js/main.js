$(document).ready(function () {
    $("#btn").click(function () {
        $.ajax({
            url: 'http://localhost/api/index.php',
            type: 'GET',
            success: function (data) {
                renderUI(JSON.parse(data));
            },
            error: function (e) {
                console.log(e.message);
            }
        });
    });
});

function renderUI(data) {
    let html = ''
    let index = 0
    data.forEach(element => {
        index++
        html += `<tr>
        <th>${index}</th>
        <th>${element.name}</th>
        <th>${element.image}</th>
        </tr>`
    });
    $('#product-list').html(html);
}