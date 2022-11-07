// $(document).ready(function () {
//     function disableSendButton() {
//         $('.btn-send-user-data').attr({disabled: true})
//     }

//     $('.btn-send-user-data').on('click', function(e){
//         e.preventDefault()
//         disableSendButton()

//         let userData = {
//             firstName: $('#first-name').val(), 
//             secondName: $('#second-name').val(),
//             birthDate: $('#birth-date').val(),
//             phoneNumber: $('#phone-number').val()
//         }

//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
//             }
//         })
        
//         $.ajax({
//             type: 'POST',
//             url: 'index',
//             dataType: 'json',
//             data: userData,
//             // method: 'POST',
//             // complete,
//             success: function() {
//                 console.log('all is ok')
//             },
//             error: function(data) {
//                 console.log(data)
//             },
//         })
//     })
// });

