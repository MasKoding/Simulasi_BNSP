```javascript

$('#tipe').change(function (){
   
   var tipe = $('#tipe').val();

   if(tipe == ""){
    $('#harga').val("")
   }else{
    $.ajax({
        url:'api/get_tipe_kamar.php',
        type:'POST',
        dataType:'json',
        data:{
            tipe: tipe
        },
        success:function (resp){
                var harga = resp.replace(/,/g,'')
                var hargaFormat = numberWithCommas(harga)
                $('#harga').val(hargaFormat)

         }
    })
   } 
 })


 $('#hitung_total').click(function () {
    // validasi
    var durasi = parseInt($('#durasi').val())
    // cek apakah durasi berupa angka integer
    var durasiType = Number.isInteger(durasi)

    let discount = 0;
    //hapus koma atau titik pada number format uang
    var harga = parseInt(removeCommas($('#harga').val()))
   // ambil value checkbox breakfast
    var include_breakfast = $('#breakfast').is(':checked')  
    var breakfast_price = 80000
    console.log('harga:',harga)
    console.log('breakfast:',include_breakfast)
    if(!durasiType){
        $('#durasiError').text('Input durasi harus Angka atau Number')   
        $('#total_bayar').val('')
    }else{
        $('#durasiError').text('')    
        harga*=durasi

        if(durasi >3){
            discount = 0.1
           
            harga -= (harga*discount)
        }

        if(include_breakfast){
            harga+=breakfast_price
        }else{
            harga = harga
        }
        
        var hargaFormat = numberWithCommas(harga.toString().replace(/,/g,''))
        $('#total_bayar').val(hargaFormat)    
    }
 })




 function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return parts.join(".");
}

function removeCommas(mystring){
    mystring = mystring.replace(/(\d)[\s.]+(?=\d)/g, '$1')
     return mystring
}

```
