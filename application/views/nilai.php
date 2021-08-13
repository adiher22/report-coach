<!DOCTYPE html>
<html>
<head>
    <title>Penilaian coach dinamis dengan codeigniter 3 dan ajax</title>
    <!-- Load file CSS Bootstrap melalui CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Load file library jQuery melalui CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="container mt-5">
     <h4>Penilaian coach dinamis dengan codeigniter 3 dan ajax</h4>
    <form action="">
    <span id="name_coache" class="text-center mt-4 mb-5"><b> Nama Coache : <?= $coache['name_coache'] ?></b></span>
    <div class="form-group">
        <label for="sesi">Sesi (Angka)</label>
        <input type="number" id="sesi" name="sesi" class="form-control">

    </div>

   
    <label for="">Komunikasi</label>
     <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3">3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
            <label class="form-check-label" for="inlineRadio3">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
            <label class="form-check-label" for="inlineRadio3">5</label>
        </div>
    </div>
     <label for="">Kehadiran</label>
     <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option6">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option7">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option8">
            <label class="form-check-label" for="inlineRadio3">3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option9">
            <label class="form-check-label" for="inlineRadio3">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option10">
            <label class="form-check-label" for="inlineRadio3">5</label>
        </div>
    </div>
     <label for="">Effort</label>
     <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option11">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option12">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option13">
            <label class="form-check-label" for="inlineRadio3">3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option14">
            <label class="form-check-label" for="inlineRadio3">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option15">
            <label class="form-check-label" for="inlineRadio3">5</label>
        </div>
    </div>
     <label for="">Komitmen</label>
     <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option16">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option17">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option18">
            <label class="form-check-label" for="inlineRadio3">3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option19">
            <label class="form-check-label" for="inlineRadio3">4</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option20">
            <label class="form-check-label" for="inlineRadio3">5</label>
        </div>
    </div>
    <div class="form-group">
       <button type="submit" id="kirim" class="btn btn-primary">Kirim</button>
    </div>
    </form>
    <script>

     
        $("#coach").change(function(){

            // variabel dari nilai combo box kendaraan
            var id_coach = $("#coach").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                url : "<?php echo base_url();?>/ListCoach/getCoache",
                method : "POST",
                data : {id_coach:id_coach},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id+'>'+data[i].name_coache+'</option>';
                    }
                   $('#coache').html(html);

                }
                
            });
        });
    </script>

</div>
</body>
</html>