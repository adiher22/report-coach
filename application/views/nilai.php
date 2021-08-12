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
    <div class="form-group">
        <label for="sesi">Sesi (Angka)</label>
        <input type="number" id="sesi" name="sesi" class="form-control">

    </div>

   
    <label for="">Komunikasi</label>
     <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
            <label class="custom-control-label" for="customRadioInline1">1</label>
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            
        </div>
       
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">2</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
            
        </div>
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">3</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
          
        </div>
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">4</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
          
        </div>
         <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
             <label class="custom-control-label" for="customRadioInline1">5</label>
        </div>
    </div>
     <label for="">Kehadiran</label>
     <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
            <label class="custom-control-label" for="customRadioInline1">1</label>
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            
        </div>
       
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">2</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
            
        </div>
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">3</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
          
        </div>
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">4</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
          
        </div>
         <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
             <label class="custom-control-label" for="customRadioInline1">5</label>
        </div>
    </div>
     <label for="">Effort</label>
     <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
            <label class="custom-control-label" for="customRadioInline1">1</label>
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            
        </div>
       
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">2</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
            
        </div>
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">3</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
          
        </div>
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">4</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
          
        </div>
         <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
             <label class="custom-control-label" for="customRadioInline1">5</label>
        </div>
    </div>
     <label for="">Komitmen</label>
     <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
            <label class="custom-control-label" for="customRadioInline1">1</label>
            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
            
        </div>
       
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">2</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
            
        </div>
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">3</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
          
        </div>
         <div class="custom-control custom-radio custom-control-inline">
             <label class="custom-control-label" for="customRadioInline1">4</label>
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
          
        </div>
         <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
             <label class="custom-control-label" for="customRadioInline1">5</label>
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