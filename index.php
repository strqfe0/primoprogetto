<!doctype html>
<html lang="it">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <title>Give</title>
      <style>
         .outer {
         display: table;
         position: absolute;
         height: 90%;
         width: 100%;
         }
         .middle {
         display: table-cell;
         vertical-align: middle;
         }
         .inner {
         margin-left: auto;
         margin-right: auto; 
         width: 100%;
         text-align: center;
         }
         .form-control::-webkit-input-placeholder { /* WebKit, Blink, Edge */
         color:    white;
         }
         .form-control:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
         color:    white;
         opacity:  1;
         }
         .form-control::-moz-placeholder { /* Mozilla Firefox 19+ */
         color:    #909;
         opacity:  1;
         }
         .form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
         color:    white;
         }
         .form-control::-ms-input-placeholder { /* Microsoft Edge */
         color:    white;
         }
         .form-control::placeholder { /* Most modern browsers support this now. */
         color:    white;
         }
         .tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
      </style>
      <script>
          function showCopyMessage(){
            document.getElementById('copyMessage').innerHTML = '<i>Clicca sul box con il dato generato per copiarlo.</i><br /><br />';
          }

          function copy(){
              var elem = document.getElementById('generated').placeholder;
              if(elem != ""){
                var btn = document.getElementById('generated');
                var clipboard = new ClipboardJS(btn);
                clipboard.on('success', function(e) {
                    alert("Copiato con successo!");
                });
                clipboard.on('error', function(e) {
                    console.log(e);
                });
              }
          }

          function generateResult(){
             console.log("<?php echo "test";
               $file = file_get_contents("list.txt");
               $list = array();
               $ex = explode(PHP_EOL, $file);
               foreach($ex as $row){
                  array_push($list, $row);
               }
               $count = count($list);
               $riga = rand(0, $count);
               
               ?>
               ");
               var test = '<?php echo $list[$riga]; ?>';
               document.getElementById('generated').placeholder = test;
               document.getElementById('generated').setAttribute('data-clipboard-text', test);
               <?php unset($riga); ?>
          }
      </script>
   </head>
   <body style="background-color: black;" class="text-light">
      <div class = 'inner'>
         <div class = 'outer'>
            <div class = 'middle'>
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-2"></div>
                     <div class="col-sm-8">
                        <div class="card text-white bg-danger mb-3">
                           <div class="card-body">
                              <h2 class="card-title text-center">
                              Titolo</h5>
                              <hr width="50%" color="#FFFFFF">
                              <p class="card-text">
                                 <input class="form-control text-center" id="generated" style="background-color: #db7c78;" type="text" placeholder="" data-clipboard-text="-" onclick="copy(); " readonly>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-6 text-center"><span id="copyMessage"></span><button type="button" onclick="generateResult(); showCopyMessage();" class="btn btn-light">Genera</button>
                                        </div>
                                    </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Optional JavaScript -->
               <!-- jQuery first, then Popper.js, then Bootstrap JS -->
               <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
               <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
            </div>
         </div>
      </div>
   </body>
</html>
