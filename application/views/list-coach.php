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
    <div class="form-group">
        <label for="sel1">Pilih Coach:</label>
        <select class="form-control" name="coach" id="coach">
            <option value="">--Pilih Coach--</option>
            <?php foreach($data as $coach ) : ?>
                <option value="<?= $coach['id'] ?>"><?= $coach['nama'] ?></option>
            <?php endforeach?>
        </select>
    </div>

    <div class="form-group">
        <label for="sel1">Pilih Coache:</label>
        <select class="form-control" name="coache" id="coache">
            <!-- Merk motor akan diload menggunakan ajax, dan ditampilkan disini -->
        <option value="">Tidak Tersedia</option>
        </select>
    </div>
    <div class="form-group">
       <button type="submit" class="btn btn-primary">Kirim</button>
    </div>

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