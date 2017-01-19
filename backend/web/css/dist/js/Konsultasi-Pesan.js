jQuery(document).ready(function($) {
    reloadMessageList();
    $("#tbody-message-list").on('click','.clickable-row', (function() {
        window.document.location = $(this).data("href");
    }));
});

function getIsiKonsultasi($id_konsultasi) {
  $("#loading-isi-pesan").show();
  $.getJSON(
            'create-json/get-isi-konsultasi',
            {id_konsultasi:$id_konsultasi},
            function(data){
              $('#judul').html("");
              $('#judul').append(data.konsultasi.judul);
              $("#btn-jawab-pesan").show();
              $("#btn-hapus-pesan").show();
              $("#id_konsultasi").val(data.konsultasi.id_konsultasi);
              $("#loading-isi-pesan").hide();
              document.getElementById("btn-delete-ya").setAttribute("href", "/praktikdokter/konsultasi-pesan/delete?id="+data.konsultasi.id_konsultasi);
              document.getElementById("message-tr").setAttribute("class", "clickable-row");
              $('.direct-chat-messages').html("");
              for (var i in data.isi_konsultasi){
                var datalist = data.isi_konsultasi[i];
                if (datalist['tipe']==0) {
                  $('.direct-chat-messages').append("<div class='direct-chat-info clearfix'><span class='direct-chat-name pull-left'>"+datalist['nama_pasien']+"</span></div><div class='direct-chat-msg'><div class='direct-chat-text pull-left'><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp pull-right'>"+datalist['tanggal']+"</span></div>"+datalist['isi']+"</div></div>");
                } else {
                  $('.direct-chat-messages').append("<div class='direct-chat-msg right'><div class='direct-chat-info clearfix'><span class='direct-chat-name pull-right'>"+datalist['nama_dokter']+"</span></div><div class='direct-chat-text pull-right'><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp'>"+datalist['tanggal']+"</span></div>"+datalist['isi']+"</div></div>");
                }
              }
            $('.messages-value').scrollTop($('.messages-value')[0].scrollHeight);
            }
    )
}

$('#reply-modal').on('shown.bs.modal', function() {
    $('.replyTextArea').focus();
});

$('#form-jawab-pesan').submit(function(e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    $('#reply-modal').modal('hide');
    $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType:'json',
        success: function(data) {
          if (data.success = 1) {
            $('.direct-chat-messages').append("<div class='direct-chat-msg right'><div class='direct-chat-info clearfix'><span class='direct-chat-name pull-right'>"+data.isi_pesan.nama_dokter+"</span></div><div class='direct-chat-text pull-right'><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp'>"+data.isi_pesan.tanggal+"</span></div>"+data.isi_pesan.isi+"</div></div>");
            $('.messages-value').scrollTop($('.messages-value')[0].scrollHeight);
            reloadMessageList();
          }
        }
    });
    return false;
});


function reloadMessageList() {
  $.getJSON(
            'create-json/get-message-list',
            {},
            function(data){
              $('#tbody-message-list').html("");
              for (var i in data){
                var message_list = data[i];
                  $('#tbody-message-list').append("<tr "+((message_list['seen']==1) ? "class='clickable-row'" : "class='clickable-row unred-message'")+ "id='message-tr' data-href='javascript:getIsiKonsultasi("+message_list['id_konsultasi']+")'><td class='mailbox-name'><a href='read-mail.html'>"+message_list['nama_pasien']+"</a><br><b>"+message_list['judul']+"</b></td><td class='mailbox-date'>"+message_list['tanggal']+"</td></tr>");
              }
            }
    )
}

// "<tr"+((data['seen']==1) ? "class='clickable-row'" : "class='clickable-row unred-message'")+ "id='message-tr' data-href='javascript:getIsiKonsultasi("+data['id_konsultasi']+")'><td class='mailbox-name'><a href='read-mail.html'>"+data['nama_pasien']+"</a><br><b>"+data['judul']+"</b></td><td class='mailbox-date'>"+data['tanggal']+"</td></tr>"

// $('.replyButton').on('click', function () {
//         $('#reply-modal').modal('show')
//           .find('#modalContent')
//           .load($(this).attr('value'));
// });
