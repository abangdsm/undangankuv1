$(document).ready(function () {
    showData();

    $('.btnmd').click(function () {
        tambahData();
    });

    function showData() {
        $('.katamereka').html('');
        $.ajax({
            type: 'GET',
            url: 'getData.php',
            dataType: 'JSON',
            success: function (response) {
                let data = '';
                for (let i = 0; i < response.length; i++) {
                    data +=
                        `
                    <p>`+ response[i].nama_lengkap + `</p>
                    <p>`+ response[i].ucapan + `</p>
                    `
                }
                $('.katamereka').append(data);
            }
        })
    }

    function tambahData() {
        const nama_lengkap = $('.nama_lengkap').val();
        const ucapan = $('.ucapan').val();
        $.ajax({
            type: 'POST',
            url: 'addData.php',
            data: 'nama_lengkap=' + nama_lengkap + '&ucapan=' + ucapan,
            dataType: 'JSON',
            success: function (response) {
                if (response.status == '1') {
                    alert(response.msg);
                    showData();
                } else {
                    alert(response.msg);
                    showData();
                }
            }
        })
    }
});